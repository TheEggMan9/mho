<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Compte;

class ConnexionController extends Controller
{
    public function showLoginForm()
    {
        return view('onglet.typeConnexion.utilisateurs.seConnecter');
    }

    public function login(Request $request)
    {
        // Validation
        $request->validate([
            'email' => 'required|email',
            'mdp'   => 'required|string',
        ]);

        // Recherche de l'utilisateur par email
        $user = Compte::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->mdp, $user->mdp)) {
            return back()->withErrors([
                'login_error' => 'Identifiants incorrects. Veuillez réessayer.'
            ])->withInput();
        }

        // Connexion
        Auth::login($user);
        $request->session()->regenerate();

        return redirect('/')->with('success', 'Heureux de vous revoir ' . $user->prenom . ' !');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('deco', 'Vous avez été déconnecté.');
    }
}

