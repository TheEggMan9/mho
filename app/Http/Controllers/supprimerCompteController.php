<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SupprimerCompteController extends Controller
{
    public function destroy(Request $request)
    {
        // Vérifier que l'utilisateur est connecté
        if (!Auth::check()) {
            return redirect()->route('seConnecter')
                ->withErrors(['error' => 'Vous devez être connecté pour supprimer votre compte.']);
        }

        // Validation du mot de passe
        $request->validate([
            'password' => 'required|string',
        ], [
            'password.required' => 'Le mot de passe est requis pour supprimer votre compte.',
        ]);

        $user = Auth::user();

        // Vérifier le mot de passe hashé avec le champ 'password'
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'password' => 'Le mot de passe est incorrect.'
            ]);
        }

        // Déconnexion avant suppression
        Auth::logout();

        // Suppression du compte
        $user->delete();

        // Nettoyer la session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')
            ->with('success', 'Votre compte a été supprimé avec succès.');
    }
}