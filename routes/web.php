<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\connexionModerateurController;
use App\Http\Controllers\CreerCompteController;
use App\Http\Controllers\supprimerCompteController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\MotDePasseOublieController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin-redirect', function () {
    return redirect('/admin');
})->name('admin.dashboard');

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
    Route::get('/onglet/seConnecter', [ConnexionController::class, 'showLoginForm'])
        ->name('login');
    Route::post('/onglet/seConnecter', [ConnexionController::class, 'login'])
        ->name('loginUtilisateur');

    Route::get('/mot-de-passe-oublie', [MotDePasseOublieController::class, 'showLinkRequestForm'])
        ->name('password.request');
    Route::post('/mot-de-passe-oublie', [MotDePasseOublieController::class, 'envoyerLien'])
        ->name('password.email');
    Route::get('/reset-password/{token}', [MotDePasseOublieController::class, 'showResetForm'])
        ->name('password.reset');
    Route::post('/reset-password', [MotDePasseOublieController::class, 'reinitialiser'])
        ->name('password.update');

    // Inscription utilisateur
    Route::get('/onglet/creerCompte', [CreerCompteController::class, 'showRegistrationForm'])
        ->name('register');
    Route::post('/onglet/creerCompte', [CreerCompteController::class, 'register']);
});

// Déconnexion (accessible uniquement si authentifié)
Route::post('/logout', [ConnexionController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
Route::get('/deconnexion', [ConnexionController::class, 'logout'])
    ->middleware('auth')
    ->name('logout.get');

/*
|--------------------------------------------------------------------------
| Routes Vérification d'email
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    // Page "Vérifiez votre email"
    Route::get('/email/verify', function () {
        return view('onglet.verifierEmail');
    })->name('verification.notice');

    // Traitement du lien cliqué dans l'email
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        try {
            Mail::to($request->user()->email)->send(new WelcomeEmail($request->user()));
        } catch (\Exception $e) {
            \Log::error('Erreur envoi email bienvenue', [
                'user_id' => $request->user()->id,
                'error' => $e->getMessage()
            ]);
        }

        return redirect('/')->with('success', 'Votre adresse email a été vérifiée avec succès ! Bienvenue sur Marvel\'s Heroes Origins.');
    })->middleware(['signed'])->name('verification.verify');

    // Renvoyer l'email de vérification
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('status', 'verification-link-sent');
    })->middleware(['throttle:6,1'])->name('verification.send');
});

/*
|--------------------------------------------------------------------------
| Routes Protégées - Utilisateurs (email vérifié requis)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {
    // Mon compte
    Route::get('/onglet/monCompte', function () {
        return view('onglet.monCompte');
    })->name('account');

    Route::post('/mon-compte/envoyer-lien-reinitialisation', [MotDePasseOublieController::class, 'envoyerLien'])
        ->name('password.email');

    // Suppression de compte
    Route::delete('/supprimer-compte', [supprimerCompteController::class, 'destroy'])
        ->name('destroy');
});

/*
|--------------------------------------------------------------------------
| Routes Quizz (email vérifié requis)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->prefix('onglet/quizz')->name('quizz.')->group(function () {
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
| Routes Commentaire (email vérifié requis)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'verified'])->group(function () {

    Route::post('/commentaires/{ficheId}',
        [CommentaireController::class, 'store'])
        ->name('commentaire.store');

    Route::delete('/commentaires/{commentaireId}',
        [CommentaireController::class, 'destroy'])
        ->name('commentaire.destroy');

    Route::post('/commentaires/{commentaireId}/like',
        [CommentaireController::class, 'toggleLike'])
        ->name('commentaire.like');

});

/*
|--------------------------------------------------------------------------
| Routes Recherche et Fiches Héros
|--------------------------------------------------------------------------
*/
// Autocomplétion AJAX
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::post('/like/{ficheId}', [LikeController::class, 'toggle'])
    ->middleware(['auth', 'verified'])
    ->name('like.toggle');

// Fiche détaillée
Route::get('/heros/{slug}', [SearchController::class, 'show'])->name('fiche.show');

// Résultats filtrés (espèce / organisation)
Route::get('/fiches/resultats', [SearchController::class, 'resultats'])->name('fiches.resultats');