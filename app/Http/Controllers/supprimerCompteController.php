<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class supprimerCompteController extends Controller
{
    public function destroy(Request $request)
{
    $user = Auth::user();

    if (Hash::check($request->password, $user->mdp)) {
        $user->delete();

        Auth::logout();

        return redirect('/')->with('success', 'Votre compte a été supprimé avec succès.');
    } else {
        return back()->withErrors(['password' => 'Le mot de passe est incorrect.']);
    }
}

}

