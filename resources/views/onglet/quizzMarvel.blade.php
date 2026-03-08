@extends('layouts.app')

@section('title', 'Quiz Marvel - Choix du thème')

@section('no-searchbar')
@endsection

@section('content')

@if (!Auth::check())

    <div class="container py-5">
        <div class="alert alert-info text-center">
            <h3>🔒 Quiz réservé aux membres</h3>
            <p>Créez un compte gratuitement pour accéder aux quiz Marvel !</p>

            <a href="{{ url('/onglet/creerCompte') }}" class="btn btn-primary">
                S'inscrire maintenant
            </a>

            <a href="{{ url('/onglet/seConnecter') }}" class="btn btn-outline-secondary">
                Se connecter
            </a>
        </div>
    </div>

@else

    <div class="container py-5">
        <div class="quiz-theme-container">

            <div class="quiz-theme-header text-center mb-5">
                <h1 class="quiz-title-red">
                    <i class="bi bi-patch-question-fill"></i>
                    Bienvenue sur le Quiz Marvel
                </h1>
                <p>Choisissez votre niveau de difficulté</p>
            </div>

            <div class="theme-cards">

                <a href="{{ url('/onglet/quizz/quizzPersonnage/quizzChoix') }}" class="theme-card personnage">
                    <div class="theme-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3>Thème Personnages</h3>
                    <p>Testez vos connaissances sur les héros et vilains Marvel</p>
                </a>

                <a href="#" class="theme-card informatique">
                    <div class="theme-icon">
                        <i class="bi bi-laptop"></i>
                    </div>
                    <h3>Thème Informatique</h3>
                    <p>Découvrez l'univers technologique de Marvel</p>
                </a>

                <a href="#" class="theme-card energie">
                    <div class="theme-icon">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>
                    <h3>Thème Énergie</h3>
                    <p>Explorez les pouvoirs et énergies de l'univers Marvel</p>
                </a>

            </div>

        </div>
    </div>

@endif

@endsection