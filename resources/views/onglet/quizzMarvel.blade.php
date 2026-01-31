<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quiz Marvel - Choix du thème</title>
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
@if (!Auth::check())
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
    
    @else (Auth::check())
            <div class="container py-5">
              <div class="quiz-theme-container">
                <div class="quiz-theme-header">
                  <h1 class="quiz-title-red">
                    <i class="bi bi-patch-question-fill"></i> Bienvenue sur le Quiz Marvel
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

                    <a href="./quizz_informatique/quizz.html" class="theme-card informatique">
                      <div class="theme-icon">
                        <i class="bi bi-laptop"></i>
                      </div>
                        <h3>Thème Informatique</h3>
                          <p>Découvrez l'univers technologique de Marvel</p>
                    </a>

                    <a href="./quizz_energie/quizz.html" class="theme-card energie">
                      <div class="theme-icon">
                        <i class="bi bi-lightning-charge-fill"></i>
                      </div>
                        <h3>Thème Énergie</h3>
                      <p>Explorez les pouvoirs et énergies de l'univers Marvel</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
    
@endif


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>