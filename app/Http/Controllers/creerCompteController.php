<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compte;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class CreerCompteController extends Controller
{
    public function showRegistrationForm()
    {
        return view('onglet.creerCompte');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|alpha|max:255',
            'prenom' => 'required|string|alpha|max:255',
            'email' => [
                'required',
                'string',
                'email',           // validation email standard
                'max:255',
                'unique:comptes,email'
            ],
            'mdp' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).+$/'
            ],
        ]);

        $user = Compte::create([
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'email' => $validated['email'],
            'mdp' => Hash::make($validated['mdp']),
        ]);

        Mail::to($user->email)->send(new WelcomeEmail($user));

        return redirect('/')->with('success', 'Compte créé avec succès.');
    }
}
