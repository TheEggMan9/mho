<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // important !

class SupprimerCompteController extends Controller
{
    public function destroy(Request $request)
    {
        // Vérifier que l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect()->route('seConnecter')
                ->withErrors(['error' => 'Vous devez être connecté pour supprimer votre compte.']);
        }

        // Validation
        $request->validate([
            'password' => 'required'
        ], [
            'password.required' => 'Le mot de passe est requis pour supprimer votre compte.'
        ]);

        $user = Auth::user();

        // Vérification du mot de passe hashé
        if (!Hash::check($request->password, $user->mdp)) {
            return back()->withErrors([
                'password' => 'Le mot de passe est incorrect.'
            ]);
        }

        // Déconnexion AVANT suppression
        Auth::logout();

        // Suppression du compte
        $user->delete();

        // Nettoyage session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')
            ->with('success', 'Votre compte a été supprimé avec succès.');
    }
}
