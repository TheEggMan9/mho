<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compte;

class CreerCompteController extends Controller
{
    public function showRegistrationForm()
    {
        return view('onglet.creerCompte'); 
    }

    public function register(Request $request)
    {
			$validatedData = $request->validate([
				'nom' => 'required|string|alpha|max:255',
				'prenom' => 'required|string|alpha|max:255',
				'login' => ['required', 'string', 'regex:/^[a-z0-9-]+$/','max:255','unique:Comptes'],
				'mdp' => ['required', 'string', 'min:8', 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*(_|[^\w])).+$/'],
			],[
'nom.required' => 'Le champ :attribute est obligatoire.',
    'nom.alpha' => 'Le champ :attribute ne doit contenir que des lettres.',
    'prenom.required' => 'Le champ :attribute est obligatoire.',
    'prenom.alpha' => 'Le champ :attribute ne doit contenir que des lettres.',
    'login.required' => 'Le champ :attribute est obligatoire.',
    'login.regex' => 'Le format du champ :attribute est invalide. Il ne doit contenir que des lettres minuscules, des chiffres ou des tirets.',
    'login.max' => 'Le champ :attribute ne doit pas dépasser :max caractères.',
    'login.unique' => 'Le champ :attribute existe déjà.',
    'mdp.required' => 'Le champ :attribute est obligatoire.',
    'mdp.min' => 'Le champ :attribute doit comporter au moins :min caractères.',
    'mdp.regex' => 'Le format du champ :attribute est invalide. Il doit contenir minimum 8 caractères avec au moins une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial.',
], [
    'nom' => 'nom',
    'prenom' => 'prénom',
    'login' => 'login',
    'mdp' => 'mot de passe',
				]);



        try {
            $user = Compte::create([
                'nom' => $validatedData['nom'],
                'prenom' => $validatedData['prenom'],
                'login' => $validatedData['login'],
                'mdp' => $validatedData['mdp'], 
            ]);

            return redirect('/')->with('success', 'Votre compte a été créé avec succès ! Connectez-vous maintenant.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'La création du compte a échoué. Veuillez réessayer.']);
            //return back()->withInput()->withErrors(['error' => 'Erreur : ' . $e->getMessage()]);
        }
    }
}
