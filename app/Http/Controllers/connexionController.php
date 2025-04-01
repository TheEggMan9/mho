<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Compte;

class ConnexionController extends Controller
{
    public function showLoginForm()
    {
        return view('onglet.seConnecter');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('login', 'mdp');

        $user = Compte::where('login', $credentials['login'])->first();

        if (!$user || $credentials['mdp'] !== $user->mdp) {
            return back()->withErrors(['login_error' => 'Identifiants incorrects. Veuillez réessayer']);
        }

        Auth::login($user);
        return redirect('/')->with('success', 'Heureux de vous revoir ' . $user->prenom . ' !');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('deco', 'Vous avez été déconnecté.');
    }
}
