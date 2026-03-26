<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use App\Models\CompteModerateur;

class connexionModerateurController extends Controller
{
    public function showLoginForm()
    {
        return view('onglet.typeConnexion.moderateurs.seConnecterModerateur');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'mdp'   => 'required|string',
        ]);

        $key = $this->throttleKey($request);
        
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            $minutes = ceil($seconds / 60);
            
            return back()->withErrors([
                'login_error' => "Trop de tentatives de connexion. Veuillez réessayer dans {$minutes} minute(s)."
            ])->withInput($request->only('email'));
        }

        $user = CompteModerateur::where('email', $request->email)->first();

        if (!$user || $request->mdp !== $user->mdp) {
            RateLimiter::hit($key, 60);

            return back()->withErrors([
                'login_error' => 'Identifiants incorrects. Veuillez réessayer.'
            ])->withInput($request->only('email'));
        }

        RateLimiter::clear($key);

        Auth::guard('moderateur')->login($user, $request->boolean('remember'));
        
        $request->session()->regenerate();

        return redirect('/moderateurs/indexModerateur')->with('success', 'Heureux de vous revoir cher modérateur ' . $user->prenom . ' !');
    }

    public function logout(Request $request)
    {
        Auth::guard('moderateur')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('deco', 'Vous avez été déconnecté.');
    }

    protected function throttleKey(Request $request): string
    {
        return 'moderateur:' . Str::transliterate(Str::lower($request->input('email')).'|'.$request->ip());
    }
}