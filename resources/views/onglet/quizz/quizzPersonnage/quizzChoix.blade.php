<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quiz Marvel</title>
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
          <a class="nav-link" href="{{ url('/onglet/monCompte') }}"><i class="bi bi-person-circle"></i> Mon compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/seConnecter') }}"><i class="bi bi-box-arrow-in-right"></i> Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/creerCompte') }}"><i class="bi bi-person-plus-fill"></i> Créer un compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-right"></i> Se déconnecter</a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
        </form>
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
  <div class="quiz-container">
    <h1 class="quiz-title-red">
      <i class="bi bi-patch-question-fill"></i> Testez vos connaissances sur l'uners Marvel !
    </h1>
    <p class="quiz-subtitle">
       Choisissez votre niveau de difficulté :
    </p>

    <div class="difficulty-cards">
      <a href="{{ url('/onglet/quizz/quizzPersonnage/quizzFacile/quizzFacilePersonnage') }}" class="difficulty-card easy">
        <span class="difficulty-icon">🌟</span>
        <div class="difficulty-title">Facile</div>
        <p class="difficulty-description">Parfait pour débuter votre aventure Marvel</p>
      </a>

      <a href="{{ url('/onglet/quizz/quizzPersonnage/quizzMoyen/quizzMoyenPersonnage') }}" class="difficulty-card medium">
        <span class="difficulty-icon">⚡</span>
        <div class="difficulty-title">Moyen</div>
        <p class="difficulty-description">Pour les fans qui connaissent leurs héros</p>
      </a>

      <a href="{{ url('/onglet/quizz/quizzPersonnage/quizzDifficile/quizzDifficilePersonnage') }}" class="difficulty-card hard">
        <span class="difficulty-icon">🔥</span>
        <div class="difficulty-title">Difficile</div>
        <p class="difficulty-description">Réservé aux vrais experts de l'univers Marvel</p>
      </a>
    </div>
  </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>