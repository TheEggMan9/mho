<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quiz Marvel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('css/style4.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

  <div class="bg-image">

<!-- En-tête avec titre et navigation -->
<header class="bg-dark text-white text-center py-4">
  <h1>Marvel's Heroes Origins</h1>
</header>

<!-- Barre de navigation responsive -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/sommaire') }}">Sommaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/monCompte') }}">Mon compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/seConnecter') }}">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/creerCompte') }}">Créer un compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>
      </ul>
    </div>
  </div>
</nav>

<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">

<fieldset style="background-color: blue; color: white;">
        <div class="titre_menu">
            <h1> Bienvenue sur le QuizzMarvel </h1>
        </div>
        <div class="sous_titre">
            <h3 style="text-decoration: underline;"> Choisissez votre thème </h3>
        </div>    


    <div class="content">
        <div class="food">
            <a class="theme_txt_personnage" href="{{ url('/onglet/quizz/quizzPersonnage/quizzPersonnage') }}"> Thème personnage </a>
        </div>
        <div class="informatique">
            <a class="theme_txt_informatique" href="./quizz_informatique/quizz.html"> Thème de l'informatique </a>
        </div>
        <div class="energy">
            <a class="theme_txt_energy" href="./quizz_energie/quizz.html"> Thème de l'énergie </a>
        </div>
    </div>
</div>
</fieldset>
</div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
