<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quiz Marvel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="{{ asset('css/style4.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

  <div class="bg-image"><!--changer dans le css-->

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
        <li class="nav-item">
          <a href="https://www.instagram.com/math.is93000?igshid=ZDc4ODBmNjlmNQ==" target="_blank" style="color: white; display: inline-block;">
          <i class="bi bi-instagram" style="font-size: 20px;"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
        <fieldset style="background-color: blue; color: white;">
            <div class="main_content">

<div id="header_screen" class="header_screen">
    <h1 class="title"> QuizzMarvel Thème Personnage</h1>
    <span class="sous_title"> Il y a <span class="nbrQuestion"> ?? </span> Questions </span>
    <div>
        <button id="btn_start" class="start"> Commencer </button>
    </div>
</div>

<div id="questions_screen" class="questions_screen">

</div>

<div id="result_screen" class="result_screen">
    <h2 class=""> Résultat </h2>
    <span class=""> Votre score est de <span id="nbrCorrects"> ?? </span> sur <span class="nbrQuestion"> ?? </span> </span>
    <form>
        <button type="submit" formaction="{{ url('/onglet/quizzMarvel') }}">Accueil quizz</button>
    </form>
</div>
</div>
</div>

</fieldset>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/script5.js') }}"></script>

</body>
</html>
