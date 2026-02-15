<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use App\Models\CompteModerateur;

class connexionModerateurController extends Controller
{
    /**
     * Afficher le formulaire de connexion modérateur
     */
    public function showLoginForm()
    {
        return view('onglet.typeConnexion.moderateurs.seConnecterModerateur');
    }

    /**
     * Gérer la tentative de connexion modérateur
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

        // Recherche du modérateur par email
        $user = CompteModerateur::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->mdp, $user->mdp)) {
            // Incrémenter le compteur de tentatives échouées
            RateLimiter::hit($key, 60);

            return back()->withErrors([
                'login_error' => 'Identifiants incorrects. Veuillez réessayer.'
            ])->withInput($request->only('email'));
        }

        // Réinitialiser le compteur après connexion réussie
        RateLimiter::clear($key);

        // Connexion avec guard 'moderateur'
        Auth::guard('moderateur')->login($user, $request->boolean('remember'));
        
        // Régénérer la session (protection CSRF)
        $request->session()->regenerate();

        return redirect('/moderateurs/indexModerateur')->with('success', 'Heureux de vous revoir cher modérateur ' . $user->prenom . ' !');
    }

    /**
     * Déconnecter le modérateur
     */
    public function logout(Request $request)
    {
        Auth::guard('moderateur')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('deco', 'Vous avez été déconnecté.');
    }

    /**
     * Obtenir la clé de limitation de débit pour la requête
     */
    protected function throttleKey(Request $request): string
    {
        return 'moderateur:' . Str::transliterate(Str::lower($request->input('email')).'|'.$request->ip());
    }
}