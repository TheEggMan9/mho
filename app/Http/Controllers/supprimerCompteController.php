<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class supprimerCompteController extends Controller
{
    public function destroy(Request $request)
    {
        $user = Auth::user();

        // Vérifier si le mot de passe actuel correspond au mot de passe saisi
        if ($request->input('password') === $user->mdp) {
            // Si le mot de passe correspond, supprimer le compte de l'utilisateur
            $user->delete();

            // Rediriger vers la page d'accueil avec un message de succès
            return redirect('/')->with('success', 'Votre compte a été supprimé avec succès.');
        } else {
            // Si le mot de passe ne correspond pas, renvoyer avec un message d'erreur
            return back()->withErrors(['error' => 'Le mot de passe est incorrect.']);
        }
    }
}