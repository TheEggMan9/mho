<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/************************************************************************************************************************************************************/
/*PARTIE UTILISATEUR*****************************************************************************************************************************************/
/************************************************************************************************************************************************************/
Route::get('/', function () {
    return view('index');
});

Route::get('/onglet/monCompte', function () {
    if (Auth::check()) {
        return view('onglet.monCompte');
    } else {
        return redirect('/onglet/seConnecter');
    }
});

Route::delete('/supprimer-compte', 'App\Http\Controllers\supprimerCompteController@destroy')->name('destroy');

Route::get('/onglet/seConnecter', function () {
    return view('onglet.seConnecter');
});

Route::get('/onglet/typeConnexion/utilisateurs/seConnecter', 'App\Http\Controllers\connexionController@showLoginForm')->name('showLoginForm');
Route::post('/onglet/typeConnexion/utilisateurs/seConnecter', 'App\Http\Controllers\connexionController@login')->name('loginUtilisateur');

Route::get('/onglet/creerCompte', 'App\Http\Controllers\CreerCompteController@showRegistrationForm');
Route::post('/onglet/creerCompte', 'App\Http\Controllers\CreerCompteController@register')->name('register');

Route::post('/onglet/logout', 'App\Http\Controllers\connexionController@logout')->name('logout');

Route::get('/onglet/commentaire', function () {
    return view('onglet.commentaire');
});

Route::get('/onglet/sommaire', function () {
    return view('onglet.sommaire');
});
/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/







/************************************************************************************************************************************************************/
/*PARTIE MODERATEUR*****************************************************************************************************************************************/
/************************************************************************************************************************************************************/
Route::get('/moderateurs/indexModerateur', function () {
    return view('moderateurs.indexModerateur');
});

Route::get('/onglet/typeConnexion/moderateurs/seConnecterModerateur', 'App\Http\Controllers\connexionModerateurController@showLoginForm')->name('showLoginForm');
Route::post('/onglet/typeConnexion/seConnecterModerateur', 'App\Http\Controllers\connexionModerateurController@login')->name('loginModerateur');



/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/
/************************************************************************************************************************************************************/









/*quizz*/
Route::get('/onglet/quizzMarvel', function () {
    return view('onglet.quizzMarvel');
});
/*quizz personnage*/
Route::get('/onglet/quizz/quizzPersonnage/quizzChoix', function () {
    return view('onglet.quizz.quizzPersonnage.quizzChoix');
});
Route::get('/onglet/quizz/quizzPersonnage/quizzFacile/quizzFacilePersonnage', function () {
    return view('onglet.quizz.quizzPersonnage.quizzFacile.quizzFacilePersonnage');
});

Route::get('/onglet/quizz/quizzPersonnage/quizzChoix', function () {
    return view('onglet.quizz.quizzPersonnage.quizzChoix');
});
Route::get('/onglet/quizz/quizzPersonnage/quizzMoyen/quizzMoyenPersonnage', function () {
    return view('onglet.quizz.quizzPersonnage.quizzMoyen.quizzMoyenPersonnage');
});

Route::get('/onglet/quizz/quizzPersonnage/quizzChoix', function () {
    return view('onglet.quizz.quizzPersonnage.quizzChoix');
});
Route::get('/onglet/quizz/quizzPersonnage/quizzDifficile/quizzDifficilePersonnage', function () {
    return view('onglet.quizz.quizzPersonnage.quizzDifficile.quizzDifficilePersonnage');
});




use App\Http\Controllers\SearchController;

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/heros/{slug}', [SearchController::class, 'show'])->name('fiche.show');
