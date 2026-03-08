@extends('layouts.app')

@section('title', 'Quiz Marvel - Personnages')

@section('styles')
<link href="{{ asset('css/style4.css') }}" rel="stylesheet">
@endsection

@section('no-searchbar')
@endsection

@section('background-class', 'bg-image')

@section('content')

<div class="container py-5">
  <div class="quiz-game-container">
    <div class="main_content">

      <!-- Écran d'accueil -->
      <div id="header_screen" class="header_screen">
        <div class="quiz-intro-card">

          <div class="quiz-intro-icon">
            <i class="bi bi-controller"></i>
          </div>

          <h1 class="title">
            Quiz Marvel - Thème Personnages
          </h1>

          <div class="quiz-info-badge">
            <i class="bi bi-question-circle-fill"></i>
            <span class="nbrQuestion">??</span> Questions
          </div>

          <button id="btn_start" class="start">
            <i class="bi bi-play-fill"></i> Commencer le Quiz
          </button>

        </div>
      </div>


      <!-- Écran de questions -->
      <div class="question-container">

        <div style="background:white;padding:2rem;border-radius:15px;margin-bottom:2rem;">

          <div style="text-align:center;color:#7f8c8d;font-size:1.1rem;padding:1rem 0;">

            <div id="questions_screen" class="questions_screen"></div>

          </div>

        </div>

      </div>


      <!-- Écran de résultats -->
      <div id="result_screen" class="result_screen">

        <div class="result-card">

          <div class="result-icon">
            <i class="bi bi-trophy-fill"></i>
          </div>

          <h2 class="result-title">
            Résultat Final
          </h2>

          <div class="result-score">

            <span class="score-label">
              Votre score :
            </span>

            <div class="score-value">

              <span id="nbrCorrects" class="score-number">
                ??
              </span>

              <span class="score-separator">
                /
              </span>

              <span class="nbrQuestion score-total">
                ??
              </span>

            </div>

          </div>


          <div class="result-actions">

            <a href="{{ url('/onglet/quizz/quizzMarvel') }}"
               class="btn btn-primary btn-lg">

              <i class="bi bi-arrow-left-circle"></i>
              Retour aux Quiz

            </a>

            <button onclick="location.reload()"
                    class="btn btn-outline-secondary btn-lg">

              <i class="bi bi-arrow-clockwise"></i>
              Recommencer

            </button>

          </div>

        </div>

      </div>

    </div>
  </div>
</div>

@endsection


@section('scripts')
<script src="{{ asset('js/script4.js') }}"></script>
@endsection