<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quiz Marvel - Personnages</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="{{ asset('css/style4.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="bg-image">

<header class="text-white text-center py-4">
  <h1><i class="bi bi-lightning-charge-fill"></i> Marvel's Heroes Origins</h1>
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}"><i class="bi bi-house-fill"></i> Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/sommaire') }}"><i class="bi bi-list-ul"></i> Sommaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/quizzMarvel') }}"><i class="bi bi-patch-question-fill"></i> Quizz</a>
        </li>
          @if (Auth::check())
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/onglet/monCompte') }}"><i class="bi bi-person-circle"></i> Mon compte</a>
                </li>
          @endif

          @if (!Auth::check())
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/onglet/seConnecter') }}"><i class="bi bi-box-arrow-in-right"></i> Se connecter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/onglet/creerCompte') }}"><i class="bi bi-person-plus-fill"></i> Créer un compte</a>
                </li>
          @endif
          
          @if (Auth::check())
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-right"></i> Se déconnecter</a>
                </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
          @endif
        <li class="nav-item">
          <a href="https://www.instagram.com/math.is93000?igshid=ZDc4ODBmNjlmNQ==" target="_blank" class="nav-link">
            <i class="bi bi-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-5">
  <div class="quiz-game-container">
    <div class="main_content">

      <!-- Écran d'accueil -->
      <div id="header_screen" class="header_screen">
        <div class="quiz-intro-card">
          <div class="quiz-intro-icon">
            <i class="bi bi-controller"></i>
          </div>
          <h1 class="title">Quiz Marvel - Thème Personnages</h1>
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
          <div style="background: white; padding: 2rem; border-radius: 15px; margin-bottom: 2rem;">
            <div style="text-align: center; color: #7f8c8d; font-size: 1.1rem; padding: 1rem 0;">
            <div id="questions_screen" class="questions_screen"></div>
          </div>
        </div>

      <!-- Écran de résultats -->
      <div id="result_screen" class="result_screen">
        <div class="result-card">
          <div class="result-icon">
            <i class="bi bi-trophy-fill"></i>
          </div>
          <h2 class="result-title">Résultat Final</h2>
          <div class="result-score">
            <span class="score-label">Votre score :</span>
            <div class="score-value">
              <span id="nbrCorrects" class="score-number">??</span>
              <span class="score-separator">/</span>
              <span class="nbrQuestion score-total">??</span>
            </div>
          </div>
          <div class="result-actions">
            <a href="{{ url('/onglet/quizzMarvel') }}" class="btn btn-primary btn-lg">
              <i class="bi bi-arrow-left-circle"></i> Retour aux Quiz
            </a>
            <button onclick="location.reload()" class="btn btn-outline-secondary btn-lg">
              <i class="bi bi-arrow-clockwise"></i> Recommencer
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/script3.js') }}"></script>
</body>
</html>