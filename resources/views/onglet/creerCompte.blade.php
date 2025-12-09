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

        <!-- Formulaire-->
     <div class="container d-flex justify-content-center align-items-center" style="height: 70vh;">
  <fieldset class="bg-secondary p-4 rounded shadow w-50 position-relative" style="background-image: url('{{ asset('img/gorr.gif') }}'); background-size: cover; background-position: center; max-width: 2000px;">
    <form action="{{ route('register') }}" method="post" class="needs-validation" novalidate>
      @csrf 
      
      <div class="mb-3">
        <label for="nom" class="form-label text-white">Nom :</label>
        <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" placeholder="Saisir votre nom" value="{{ old('nom') }}" autocomplete="off" required>
        <div class="valid-feedback">Valide !</div>
        <div class="invalid-feedback">
          @error('nom') {{ $message }} @else Veuillez saisir votre nom. @enderror
        </div>
      </div>

      <div class="mb-3">
        <label for="prenom" class="form-label text-white">Prénom :</label>
        <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" placeholder="Saisir votre prénom" value="{{ old('prenom') }}" autocomplete="off" required>
        <div class="valid-feedback">Valide !</div>
        <div class="invalid-feedback">
          @error('prenom') {{ $message }} @else Veuillez saisir votre prénom. @enderror
        </div>
      </div>

      <div class="mb-3">
        <label for="login" class="form-label text-white">Login :</label>
        <input type="text" name="login" id="login" class="form-control @error('login') is-invalid @enderror" placeholder="Saisir votre login" value="{{ old('login') }}" autocomplete="off" required>
        <div class="valid-feedback">Valide !</div>
        <div class="invalid-feedback">
          @error('login') {{ $message }} @else Veuillez saisir votre login. @enderror
        </div>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label text-white">Mot de passe :</label>
        <div class="input-group has-validation">
          <input type="password" name="mdp" class="form-control @error('mdp') is-invalid @enderror" id="password" placeholder="Saisir votre mot de passe" required>
          <button class="btn btn-info" type="button" data-bs-toggle="tooltip" title="Votre mot de passe doit contenir : 
            - minimum 8 caractères  
            - au moins une lettre majuscule 
            - au moins une lettre minuscule 
            - au moins un chiffre 
            - au moins un caractère spécial.">
            <i class="bi bi-info-circle-fill"></i>
          </button>
          <div class="invalid-feedback">
            @error('mdp') {{ $message }} @else Veuillez saisir un mot de passe valide. @enderror
          </div>
        </div>
      </div>

      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="show-password" onclick="togglePasswordVisibility()">
        <label class="form-check-label text-white" for="show-password">Afficher le mot de passe</label>
      </div>

      <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary">Valider</button>
        <button type="reset" class="btn btn-secondary">Effacer</button>
      </div>
    </form>
  </fieldset>
</div>

<script>
// Active la validation Bootstrap
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()

// Fonction pour afficher/masquer le mot de passe
function togglePasswordVisibility() {
  var passwordField = document.getElementById('password');
  if (passwordField.type === 'password') {
    passwordField.type = 'text';
  } else {
    passwordField.type = 'password';
  }
}

// Active les tooltips Bootstrap
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
    </fieldset>
    </div>
   </div> 
 </div>     
</body>
<script src="{{ asset('js/script2.js') }}"></script>
</html>
