@extends('layouts.app')

@section('title', 'Quiz Marvel')

@section('no-searchbar')
@endsection

@section('background-class', 'bg-image')

@section('content')

<div class="container py-5">
  <div class="quiz-container">
    <h1 class="quiz-title-red">
      <i class="bi bi-patch-question-fill"></i> Testez vos connaissances sur l'univers Marvel !
    </h1>

    <p class="quiz-subtitle">
       Choisissez votre niveau de difficulté :
    </p>

    <div class="difficulty-cards">

      <a href="{{ url('/onglet/quizz/quizzPersonnage/quizzFacile/quizzFacilePersonnage') }}" class="difficulty-card easy">
        <span class="difficulty-icon">🌟</span>
        <div class="difficulty-title">Facile</div>
        <p class="difficulty-description">
          Parfait pour débuter votre aventure Marvel
        </p>
      </a>

      <a href="{{ url('/onglet/quizz/quizzPersonnage/quizzMoyen/quizzMoyenPersonnage') }}" class="difficulty-card medium">
        <span class="difficulty-icon">⚡</span>
        <div class="difficulty-title">Moyen</div>
        <p class="difficulty-description">
          Pour les fans qui connaissent leurs héros
        </p>
      </a>

      <a href="{{ url('/onglet/quizz/quizzPersonnage/quizzDifficile/quizzDifficilePersonnage') }}" class="difficulty-card hard">
        <span class="difficulty-icon">🔥</span>
        <div class="difficulty-title">Difficile</div>
        <p class="difficulty-description">
          Réservé aux vrais experts de l'univers Marvel
        </p>
      </a>

    </div>
  </div>
</div>

@endsection
