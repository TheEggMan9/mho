<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;

class MotDePasseOublieController extends Controller
{
    // Affiche le formulaire qui demande l'adresse email
    public function showLinkRequestForm()
    {
        return view('onglet.motDePasseOublie');
    }

    // Envoie le lien de réinitialisation par email
    public function envoyerLien(Request $request)
    {
        $this->ensureIsNotRateLimited($request, 'reset-link');

        $request->validate([
            'email' => 'required|email',
        ], [
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        RateLimiter::hit($this->throttleKey($request, 'reset-link'), 60);

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', 'Un lien de réinitialisation a été envoyé à votre adresse email.')
            : back()->withErrors(['email' => __($status)]);
    }

    // Affiche le formulaire de réinitialisation (après clic sur le lien reçu par mail)
    public function showResetForm(Request $request, string $token)
    {
        return view('onglet.reinitialiserMotDePasse', [
            'token' => $token,
            'email' => $request->email,
        ]);
    }

    // Traite la réinitialisation du mot de passe
    public function reinitialiser(Request $request)
    {
        $this->ensureIsNotRateLimited($request, 'reset-password');

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/',
                'confirmed',
            ],
        ], [
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'password.regex' => 'Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                ])->save();
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            RateLimiter::clear($this->throttleKey($request, 'reset-link'));
            RateLimiter::clear($this->throttleKey($request, 'reset-password'));

            return redirect()->route('login')->with('status', 'Votre mot de passe a été réinitialisé avec succès.');
        }

        RateLimiter::hit($this->throttleKey($request, 'reset-password'), 60);

        return back()->withErrors(['email' => [__($status)]]);
    }

    protected function ensureIsNotRateLimited(Request $request, string $prefix): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey($request, $prefix), 3)) {
            return;
        }

        $seconds = RateLimiter::availableIn($this->throttleKey($request, $prefix));
        $minutes = ceil($seconds / 60);

        throw ValidationException::withMessages([
            'email' => "Trop de tentatives. Veuillez réessayer dans {$minutes} minute(s).",
        ]);
    }

    protected function throttleKey(Request $request, string $prefix): string
    {
        return $prefix . ':' . Str::lower($request->ip());
    }
}