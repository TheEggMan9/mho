<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CompteModerateur;

class connexionModerateurController extends Controller
{
    public function showLoginForm()
    {
        return view('onglet.typeConnexion.moderateurs.seConnecterModerateur');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'mdp');

        $user = CompteModerateur::where('email', $credentials['email'])->first();

        if (!$user || $credentials['mdp'] !== $user->mdp) {
            return back()->withErrors(['login_error' => 'Identifiants incorrects. Veuillez réessayer']);
        }

        Auth::login($user);
        return redirect('/moderateurs/indexModerateur')->with('success', 'Heureux de vous revoir cher modérateur' . $user->prenom . ' !');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('deco', 'Vous avez été déconnecté.');
    }
}
