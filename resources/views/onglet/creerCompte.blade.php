<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Créer un compte</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="{{ asset('css/style3.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
   
  <div class="bg-image">


    <header class="bg-dark text-white text-center py-4">
      <h1>Créer un compte</h1>
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
              <a class="nav-link" href="{{ url('/onglet/seConnecter') }}">Se connecter</a>
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
     <fieldset class="bg-secondary p-4 rounded shadow w-50 position-relative" style="background-image: url('{{ asset('img/gorr.gif') }}'); background-size: cover; background-position: center; max-width: 2000px;">
      <form action="{{ route('register') }}" method="post">
          @csrf 
          <label class="text-white">Nom :</label><br>
          <input type="text" name="nom" class="form-control mb-2" placeholder="Saisir votre nom" autocomplete="off" required><br>

          <label class="text-white">Prénom :</label><br>
          <input type="text" name="prenom" class="form-control mb-2" placeholder="Saisir votre prénom" autocomplete="off" required><br>

          <label class="text-white">Login :</label><br>
          <input type="text" name="login" class="form-control mb-2" placeholder="Saisir votre login" autocomplete="off" required><br>

          <label class="text-white">Mot de passe :</label><br>
          <div class="d-flex align-items-center">
            <input type="password" name="mdp" class="form-control mb-2" id="password" placeholder="Saisir votre mot de passe" required>
            <a class="btn btn-info ms-2" data-bs-toggle="tooltip" title="Votre mot de passe doit contenir : 
              - minimum 8 caractères  
              - au moins une lettre majuscule 
              - au moins une lettre minuscule 
              - au moins un chiffre 
              - au moins un caractère spécial.">
            
              <i class="bi bi-info-circle-fill"></i>
            </a>
          </div>
  
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="show-password" onclick="togglePasswordVisibility()">
          <label class="form-check-label text-white" for="show-password">Afficher le mot de passe</label>
        </div>           
              <ul>
                <button type="submit" class="btn btn-primary mt-2">Valider</button>
                <button type="reset" class="btn btn-secondary mt-2">Effacer</button>
              </ul>
  
                @if ($errors->any())
                  <div class="alert alert-danger mt-3">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif
      </form>
    </fieldset>
    </div>
   </div> 
 </div>     
</body>
<script src="{{ asset('js/script2.js') }}"></script>
</html>
