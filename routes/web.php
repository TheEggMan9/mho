<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\connexionModerateurController;
use App\Http\Controllers\CreerCompteController;
use App\Http\Controllers\supprimerCompteController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LikeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Routes Publiques
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/onglet/sommaire', function () {
    return view('onglet.sommaire');
})->name('sommaire');

Route::get('/onglet/commentaire', function () {
    return view('onglet.commentaire');
})->name('commentaire');

/*
|--------------------------------------------------------------------------
| Routes d'Authentification - Utilisateurs
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    // Afficher le choix de connexion
    Route::get('/onglet/seConnecter', function () {
        return view('onglet.seConnecter');
    })->name('login.choice');

    // Connexion utilisateur
    Route::get('/onglet/typeConnexion/utilisateurs/seConnecter', [ConnexionController::class, 'showLoginForm'])
        ->name('login');
    Route::post('/onglet/typeConnexion/utilisateurs/seConnecter', [ConnexionController::class, 'login'])
        ->name('loginUtilisateur');

    // Inscription utilisateur
    Route::get('/onglet/creerCompte', [CreerCompteController::class, 'showRegistrationForm'])
        ->name('register');
    Route::post('/onglet/creerCompte', [CreerCompteController::class, 'register']);
});

// Déconnexion (accessible uniquement si authentifié)
Route::post('/logout', [ConnexionController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

/*
|--------------------------------------------------------------------------
| Routes Protégées - Utilisateurs
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    // Mon compte
    Route::get('/onglet/monCompte', function () {
        return view('onglet.monCompte');
    })->name('account');

    // Suppression de compte
    Route::delete('/supprimer-compte', [supprimerCompteController::class, 'destroy'])
        ->name('account.destroy');
});

/*
|--------------------------------------------------------------------------
| Routes d'Authentification - Modérateurs
|--------------------------------------------------------------------------
*/
Route::prefix('moderateurs')->name('moderateur.')->group(function () {
    Route::middleware('guest:moderateur')->group(function () {
        // Connexion modérateur
        Route::get('/seConnecter', [connexionModerateurController::class, 'showLoginForm'])
            ->name('login');
        Route::post('/seConnecter', [connexionModerateurController::class, 'login'])
            ->name('loginPost');
    });

    // Déconnexion modérateur
    Route::post('/logout', [connexionModerateurController::class, 'logout'])
        ->middleware('auth:moderateur')
        ->name('logout');

    // Routes protégées modérateur
    Route::middleware(['auth:moderateur'])->group(function () {
        Route::get('/indexModerateur', function () {
            return view('moderateurs.indexModerateur');
        })->name('index');
    });
});

/*
|--------------------------------------------------------------------------
| Routes Quizz
|--------------------------------------------------------------------------
*/
Route::prefix('onglet/quizz')->name('quizz.')->group(function () {
    // Page principale des quizz
    Route::get('/quizzMarvel', function () {
        return view('onglet.quizzMarvel');
    })->name('index');

    // Quizz Personnage
    Route::prefix('quizzPersonnage')->name('personnage.')->group(function () {
        Route::get('/quizzChoix', function () {
            return view('onglet.quizz.quizzPersonnage.quizzChoix');
        })->name('choix');

        Route::get('/quizzFacile/quizzFacilePersonnage', function () {
            return view('onglet.quizz.quizzPersonnage.quizzFacile.quizzFacilePersonnage');
        })->name('facile');

        Route::get('/quizzMoyen/quizzMoyenPersonnage', function () {
            return view('onglet.quizz.quizzPersonnage.quizzMoyen.quizzMoyenPersonnage');
        })->name('moyen');

        Route::get('/quizzDifficile/quizzDifficilePersonnage', function () {
            return view('onglet.quizz.quizzPersonnage.quizzDifficile.quizzDifficilePersonnage');
        })->name('difficile');
    });
});

/*
|--------------------------------------------------------------------------
| Routes Recherche et Fiches Héros
|--------------------------------------------------------------------------
*/
// Autocomplétion AJAX
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::post('/like/{ficheId}', [LikeController::class, 'toggle'])->middleware('auth')->name('like.toggle');

// Fiche détaillée
Route::get('/heros/{slug}', [SearchController::class, 'show'])->name('fiche.show');

// Résultats filtrés (espèce / organisation)
Route::get('/fiches/resultats', [SearchController::class, 'resultats'])->name('fiches.resultats');