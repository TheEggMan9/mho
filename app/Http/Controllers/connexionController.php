<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use App\Models\Compte;

class ConnexionController extends Controller
{
    /**
     * Afficher le formulaire de connexion
     */
    public function showLoginForm()
    {
        return view('onglet.typeConnexion.utilisateurs.seConnecter');
    }

    /**
     * Gérer la tentative de connexion
     */
    public function login(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required|email',
            'mdp'   => 'required|string',
        ]);

        // Vérifier le rate limiting AVANT la tentative
        $key = $this->throttleKey($request);
        
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            $minutes = ceil($seconds / 60);
            
            return back()->withErrors([
                'login_error' => "Trop de tentatives de connexion. Veuillez réessayer dans {$minutes} minute(s)."
            ])->withInput($request->only('email'));
        }

        // Recherche de l'utilisateur par email
        $user = Compte::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->mdp, $user->mdp)) {
            // Incrémenter le compteur de tentatives échouées
            RateLimiter::hit($key, 60);

            return back()->withErrors([
                'login_error' => 'Identifiants incorrects. Veuillez réessayer.'
            ])->withInput($request->only('email'));
        }

        // Réinitialiser le compteur après connexion réussie
        RateLimiter::clear($key);

        // Connexion
        Auth::login($user, $request->boolean('remember'));
        
        // Régénérer la session (protection CSRF)
        $request->session()->regenerate();

        return redirect()->intended('/')->with('success', 'Heureux de vous revoir ' . $user->prenom . ' !');
    }

    /**
     * Déconnecter l'utilisateur
     */
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('deco', 'Vous avez été déconnecté.');
    }

    /**
     * Obtenir la clé de limitation de débit pour la requête
     */
    protected function throttleKey(Request $request): string
    {
        return Str::transliterate(Str::lower($request->input('email')).'|'.$request->ip());
    }
}