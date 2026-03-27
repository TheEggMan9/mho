<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use App\Models\User;

class ConnexionController extends Controller
{
    public function showLoginForm()
    {
        return view('onglet.seConnecter');
    }

    public function login(Request $request)
    {
        // Validation en français
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ], [
            'email.required' => 'L’adresse email est obligatoire.',
            'email.email' => 'L’adresse email doit être valide.',
            'password.required' => 'Le mot de passe est obligatoire.',
        ]);

        $key = $this->throttleKey($request);

        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            $minutes = ceil($seconds / 60);
            return back()->withErrors([
                'login_error' => "Trop de tentatives de connexion. Veuillez réessayer dans {$minutes} minute(s)."
            ])->withInput($request->only('email'));
        }

        $user = User::where('email', $request->email)->first();

        // Vérification du mot de passe en prenant en compte le champ réel en DB
        if (!$user || !Hash::check($request->password, $user->password)) {
            RateLimiter::hit($key, 60);

            return back()->withErrors([
                'login_error' => 'Identifiants incorrects. Veuillez réessayer.'
            ])->withInput($request->only('email'));
        }

        RateLimiter::clear($key);

        Auth::login($user, $request->boolean('remember'));
        $request->session()->regenerate();

        return redirect()->intended('/')->with('success', 'Heureux de vous revoir ' . $user->prenom . ' !');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('deco', 'Vous avez été déconnecté.');
    }

    protected function throttleKey(Request $request): string
    {
        return Str::transliterate(
            Str::lower($request->input('email')) . '|' . $request->ip()
        );
    }
}