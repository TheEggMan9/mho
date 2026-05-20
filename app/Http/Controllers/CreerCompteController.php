<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use App\Mail\WelcomeEmail;

class CreerCompteController extends Controller
{
    /**
     * Afficher le formulaire d'inscription
     */
    public function showRegistrationForm()
    {
        return view('onglet.creerCompte');
    }

    /**
     * Gérer l'inscription
     */
    public function register(Request $request)
    {
        $this->ensureIsNotRateLimited($request);

        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'pseudo' => 'required|string|min:3|max:20|unique:users,pseudo|alpha_dash',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/',
                'confirmed',
            ],
        ], [
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
            'email.unique' => 'Cet email est déjà utilisé.',
            'pseudo.required' => 'Le pseudo est obligatoire.',
            'pseudo.min' => 'Le pseudo doit contenir au moins 3 caractères.',
            'pseudo.max' => 'Le pseudo ne peut pas dépasser 20 caractères.',
            'pseudo.unique' => 'Ce pseudo est déjà pris.',
            'pseudo.alpha_dash' => 'Le pseudo ne peut contenir que des lettres, chiffres, tirets et underscores.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'password.regex' => 'Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'pseudo' => $request->pseudo,
            'password' => Hash::make($request->password),
            'is_admin' => 0,
        ]);

        event(new Registered($user));

        Auth::login($user);

        RateLimiter::clear($this->throttleKey($request));

        try {
            Mail::to($user->email)->send(new WelcomeEmail($user));
        } catch (\Exception $e) {
            \Log::error('Erreur envoi email bienvenue', [
                'user_id' => $user->id,
                'error' => $e->getMessage()
            ]);
        }

        return redirect('/')->with(
            'success',
            'Bienvenue ' . ($user->prenom ?? $user->name) . ' ! Votre compte a été créé avec succès.'
        );
    }

    protected function ensureIsNotRateLimited(Request $request): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey($request), 3)) {
            return;
        }

        $seconds = RateLimiter::availableIn($this->throttleKey($request));
        $minutes = ceil($seconds / 60);

        throw ValidationException::withMessages([
            'email' => "Trop de tentatives d'inscription. Veuillez réessayer dans {$minutes} minute(s).",
        ]);
    }

    protected function throttleKey(Request $request): string
    {
        return 'register:' . Str::lower($request->ip());
    }
}