<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Se connecter</title>

  <!-- Lien Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Lien fichier CSS -->
  <link href="{{ asset('css/style3.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
   
  <div class="bg-image">

    <header class="bg-dark text-white text-center py-4">
      <h1>Se connecter</h1>
    </header>

    <!-- Barre de navigation -->
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
          </ul>
        </div>
      </div>
    </nav>

        @if($errors->has('login_error'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('login_error') }}
            </div>
        @endif
        <div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">
        <fieldset class="bg-secondary p-4 rounded shadow w-50 position-relative" style="background-image: url('{{ asset('img/spiderMan.gif') }}'); background-size: cover; background-position: center; max-width: 2000px;">
        <form action="{{ route('login') }}" method="POST">
            @csrf 
            <label class="text-white">Login :</label><br>
            <input type="text" name="login" class="form-control mb-2" placeholder="Saisir votre login" required="required" autocomplete="off">
            
            <label class="text-white">Mot de passe :</label><br>
            <input type="password" name="mdp" id="password" class="form-control mb-2" placeholder="Saisir votre mot de passe" required>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" id="show-password" onclick="togglePasswordVisibility()">
            <label class="form-check-label text-white">Afficher le mot de passe</label>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Valider</button>    
                <input type="reset" value="Annuler" class="btn btn-secondary">
            </div>
        </form>
    </fieldset>
</div>
</div> 
</div>    
</body>
<script src="{{ asset('js/script2.js') }}"></script>
</html>
