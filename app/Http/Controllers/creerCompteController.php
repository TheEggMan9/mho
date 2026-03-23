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
use App\Models\Compte;
use App\Mail\WelcomeEmail;
use Illuminate\Validation\Rules\Password;


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
     * Gérer l'inscription d'un nouvel utilisateur
     */
    public function register(Request $request)
    {
        // Protection anti-spam
        $this->ensureIsNotRateLimited($request);


$request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|unique:comptes,email',
        'pseudo' => 'required|string|min:3|max:20|unique:comptes,pseudo|alpha_dash', // ✅ AJOUTÉ
        'mdp' => [
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
        'mdp.required' => 'Le mot de passe est obligatoire.',
        'mdp.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
        'mdp.regex' => 'Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial.',
        'mdp.confirmed' => 'Les mots de passe ne correspondent pas.',
    ]);

    $user = Compte::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email' => $request->email,
        'pseudo' => $request->pseudo,
        'mdp' => Hash::make($request->mdp),
    ]);

        // Déclencher l'événement Registered
        event(new Registered($user));

        // Connexion automatique après inscription
        Auth::login($user);

        // Réinitialiser le rate limiter
        RateLimiter::clear($this->throttleKey($request));

        // Envoyer l'email de bienvenue
        try {
            Mail::to($user->email)->send(new WelcomeEmail($user));
        } catch (\Exception $e) {
            \Log::error('Erreur envoi email bienvenue', [
                'user_id' => $user->id,
                'error' => $e->getMessage()
            ]);
        }

        return redirect('/')->with('success', 'Bienvenue ' . $user->prenom . ' ! Votre compte a été créé avec succès.');
    }

    /**
     * Vérifier le rate limiting pour éviter le spam
     */
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

    /**
     * Obtenir la clé de rate limiting
     */
    protected function throttleKey(Request $request): string
    {
        return 'register:' . Str::lower($request->ip());
    }
}