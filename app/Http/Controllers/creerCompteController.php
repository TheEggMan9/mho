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

        // Validation avec messages personnalisés
        $request->validate([
            'nom' => ['required', 'string', 'alpha', 'max:255', 'min:2'],
            'prenom' => ['required', 'string', 'alpha', 'max:255', 'min:2'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:comptes,email'],
            'mdp' => [
                'required',
                'string',
                'min:8',
                'max:255',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).+$/'
            ],
        ], [
            // Messages personnalisés
            'nom.required' => 'Le nom est obligatoire.',
            'nom.alpha' => 'Le nom ne doit contenir que des lettres.',
            'nom.min' => 'Le nom doit contenir au moins 2 caractères.',
            
            'prenom.required' => 'Le prénom est obligatoire.',
            'prenom.alpha' => 'Le prénom ne doit contenir que des lettres.',
            'prenom.min' => 'Le prénom doit contenir au moins 2 caractères.',
            
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'L\'adresse email n\'est pas valide.',
            'email.unique' => 'Cette adresse email est déjà utilisée.',
            
            'mdp.required' => 'Le mot de passe est obligatoire.',
            'mdp.min' => 'Le mot de passe doit contenir au moins 8 caractères.',
            'mdp.confirmed' => 'Les mots de passe ne correspondent pas.',
            'mdp.regex' => 'Le mot de passe doit contenir au moins une majuscule, une minuscule, un chiffre et un caractère spécial (@$!%*?&).',
        ]);

        // Créer l'utilisateur
        $user = Compte::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'mdp' => Hash::make($request->mdp),
        ]);

        // Déclencher l'événement Registered (pour Breeze)
        event(new Registered($user));

        // Connexion automatique après inscription
        Auth::login($user);

        // Réinitialiser le rate limiter
        RateLimiter::clear($this->throttleKey($request));

        // Envoyer l'email de bienvenue (en async si possible)
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