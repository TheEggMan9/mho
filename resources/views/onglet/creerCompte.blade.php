<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Créer un compte</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link href="{{ asset('css/style3.css') }}" rel="stylesheet">
</head>

<body>
<div class="bg-image">

<header class="text-white text-center py-4">
  <h1><i class="bi bi-person-plus-fill"></i> Créer un compte</h1>
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

<div class="container d-flex justify-content-center align-items-center" style="min-height:70vh">
  <div class="form-container">
    <div class="form-card">
      <div class="form-header">
        <h2><i class="bi bi-person-plus-fill"></i> Inscription</h2>
        <p>Créez votre compte pour accéder à l'application</p>
      </div>

      {{-- erreurs Laravel --}}
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('register') }}" method="POST" class="needs-validation" novalidate>
        @csrf

        <div class="mb-3">
          <label class="form-label">Nom</label>
          <input type="text" name="nom" class="form-control" required>
          <div class="invalid-feedback">Nom requis</div>
        </div>

        <div class="mb-3">
          <label class="form-label">Prénom</label>
          <input type="text" name="prenom" class="form-control" required>
          <div class="invalid-feedback">Prénom requis</div>
        </div>

        <div class="mb-3">
          <label class="form-label"><i class="bi bi-envelope-fill"></i> Email</label>
          <input type="email" name="email" class="form-control" required>
          <div div class="invalid-feedback">Email requis</div>
        </div>


        <div class="mb-3">
          <label class="form-label"><i class="bi bi-lock-fill"></i> Mot de passe</label>
          <div class="input-group">
            <input type="password" name="mdp" id="password" class="form-control" required>
            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
              <i class="bi bi-eye"></i>
            </button>
          </div>
          <small class="text-muted d-block mt-1">
            8 caractères minimum, avec au moins une majuscule, une minuscule, un chiffre et un caractère spécial
          </small>
          <div class="invalid-feedback">Mot de passe invalide</div>
        </div>

        <button class="btn btn-primary w-100 mb-3" type="submit">
          <i class="bi bi-person-plus-fill me-2"></i>Créer mon compte
        </button>

        <div class="text-center mt-4">
          <p class="text-muted">Vous avez déjà un compte ? <a href="{{ url('/onglet/seConnecter') }}" class="text-primary fw-bold">Connectez-vous</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Toggle password visibility
document.getElementById('togglePassword').addEventListener('click', function() {
  const password = document.getElementById('password');
  const icon = this.querySelector('i');
  
  if (password.type === 'password') {
    password.type = 'text';
    icon.classList.remove('bi-eye');
    icon.classList.add('bi-eye-slash');
  } else {
    password.type = 'password';
    icon.classList.remove('bi-eye-slash');
    icon.classList.add('bi-eye');
  }
});

// Form validation
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      const password = document.getElementById('password').value
      const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/

      if (!regex.test(password)) {
        event.preventDefault()
        document.getElementById('password').classList.add('is-invalid')
      }

      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    })
  })
})()
</script>
</body>
</html>