<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Se connecter - Marvel's Heroes Origins</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="{{ asset('css/style3.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="bg-image">

<header class="text-white text-center py-4">
  <h1><i class="bi bi-box-arrow-in-right"></i> Se connecter</h1>
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
          <a class="nav-link" href="{{ url('/onglet/creerCompte') }}"><i class="bi bi-person-plus-fill"></i> Créer un compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/quizzMarvel') }}"><i class="bi bi-patch-question-fill"></i> Quizz</a>
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

<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh; padding-top: 2rem; padding-bottom: 2rem;">
  <div class="form-container">
    <div class="form-card">
      <div class="form-header">
        <h2><i class="bi bi-person-fill"></i> Connexion Modérateur</h2>
        <p>Accédez à votre espace modérateur</p>
      </div>

      <form action="{{ route('loginModerateur') }}" method="POST" class="needs-validation" novalidate>
          @csrf 
        
        <div class="mb-3">
  <label for="email" class="form-label">
    <i class="bi bi-envelope-fill"></i> Email
  </label>
  <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror @error('login_error') is-invalid @enderror" placeholder="Votre adresse email" value="{{ old('email') }}" autocomplete="off" required>
  <div class="invalid-feedback">
    @error('email') {{ $message }} @else Veuillez saisir votre email. @enderror
  </div>
</div>


        <div class="mb-3">
          <label for="password" class="form-label">
            <i class="bi bi-lock-fill"></i> Mot de passe
          </label>
          <div class="input-group has-validation">
            <input type="password" name="mdp" class="form-control @error('mdp') is-invalid @enderror @error('login_error') is-invalid @enderror" id="password" placeholder="Votre mot de passe" required>
            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
              <i class="bi bi-eye" id="eyeIcon"></i>
            </button>
            <div class="invalid-feedback">
              @error('mdp') {{ $message }} @else @error('login_error') {{ $message }} @else Veuillez saisir votre mot de passe. @enderror @enderror
            </div>
          </div>
        </div>


        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary btn-lg">
            <i class="bi bi-box-arrow-in-right"></i> Se connecter
          </button>
          <button type="reset" class="btn btn-outline-secondary">
            <i class="bi bi-x-circle"></i> Annuler
          </button>
        </div>

        <div class="text-center mt-3">
          <p class="text-muted">Pas encore inscrit ? <a href="{{ url('/onglet/creerCompte') }}" class="text-primary fw-bold">Créer un compte</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Validation simple côté client
// Validation simple côté client
document.querySelector('form').addEventListener('submit', function(event) {
  const email = document.getElementById('email').value.trim();
  const password = document.getElementById('password').value.trim();
  
  if (!email || !password) {
    event.preventDefault();
    event.stopPropagation();
    this.classList.add('was-validated');
    return false;
  }
});

</script>
<script src="{{ asset('js/script2.js') }}"></script>
</body>
</html>