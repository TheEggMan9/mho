<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Mon compte</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="{{ asset('css/style3.css') }}" rel="stylesheet" type="text/css" />
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
          <a class="nav-link" href="{{ url('/onglet/seConnecter') }}">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/creerCompte') }}">Créer un compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/quizzMarvel') }}">Quizz</a>
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
  
<div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">
    <fieldset class="bg-secondary p-4 rounded shadow w-50 position-relative"> 
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <h2>Paramètre</h2> 
   @if(Auth::check())
    <h2>Informations personnelles</h2>
    <p>Nom: {{ Auth::user()->nom }}</p>
    <p>Prénom: {{ Auth::user()->prenom }}</p>
    <p>Login: {{ Auth::user()->login }}</p>
@else
    <a href="{{ route('seConnecter') }}">Se connecter</a>
@endif

            <form action="{{ route('destroy') }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer votre compte ?');">
                @csrf
                @method('DELETE')
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe :</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="show-password" onclick="togglePasswordVisibility()">
                        <label class="form-check-label text-white">Afficher le mot de passe</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger w-100">Supprimer mon compte</button>
            </form>
        
    </fieldset>
</div>

<script src="{{ asset('js/script2.js') }}"></script>
</div>
    </div>
</div>
</body>

</html>


