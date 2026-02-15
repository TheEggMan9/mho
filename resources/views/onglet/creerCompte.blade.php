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

  <div id="js-error-alert" class="alert alert-danger alert-dismissible fade" role="alert" style="display: none;">
  <i class="bi bi-exclamation-triangle-fill"></i>
  <strong>Erreur de validation :</strong>
  <ul id="js-error-list" class="mb-0 mt-2"></ul>
  <button type="button" class="btn-close" onclick="document.getElementById('js-error-alert').style.display='none'"></button>
</div>

      {{-- Affichage des erreurs --}}
@if ($errors->any())
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <i class="bi bi-exclamation-triangle-fill"></i>
    <strong>Erreur :</strong>
    <ul class="mb-0 mt-2">
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>
@endif

      <form action="{{ route('register') }}" method="POST" class="needs-validation" novalidate>
        @csrf

        <!-- Nom -->
        <div class="mb-3">
          <label for="nom" class="form-label">
            <i class="bi bi-person-fill"></i> Nom
          </label>
          <input 
            type="text" 
            name="nom" 
            id="nom" 
            class="form-control @error('nom') is-invalid @enderror" 
            value="{{ old('nom') }}"
            placeholder="Votre nom"
            required
          >
          @error('nom')
            <div class="invalid-feedback d-block">{{ $message }}</div>
          @else
            <div class="invalid-feedback">Nom requis</div>
          @enderror
        </div>

        <!-- Prénom -->
        <div class="mb-3">
          <label for="prenom" class="form-label">
            <i class="bi bi-person-fill"></i> Prénom
          </label>
          <input 
            type="text" 
            name="prenom" 
            id="prenom" 
            class="form-control @error('prenom') is-invalid @enderror" 
            value="{{ old('prenom') }}"
            placeholder="Votre prénom"
            required
          >
          @error('prenom')
            <div class="invalid-feedback d-block">{{ $message }}</div>
          @else
            <div class="invalid-feedback">Prénom requis</div>
          @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">
            <i class="bi bi-envelope-fill"></i> Email
          </label>
          <input 
            type="email" 
            name="email" 
            id="email" 
            class="form-control @error('email') is-invalid @enderror" 
            value="{{ old('email') }}"
            placeholder="votre@email.com"
            autocomplete="email"
            required
          >
          @error('email')
            <div class="invalid-feedback d-block">{{ $message }}</div>
          @else
            <div class="invalid-feedback">Email requis</div>
          @enderror
        </div>

        <!-- Mot de passe -->
        <div class="mb-3">
          <label for="password" class="form-label">
            <i class="bi bi-lock-fill"></i> Mot de passe
          </label>
          <div class="input-group">
            <input 
              type="password" 
              name="mdp" 
              id="password" 
              class="form-control @error('mdp') is-invalid @enderror" 
              autocomplete="new-password"
              required
            >
            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
              <i class="bi bi-eye" id="eyeIcon"></i>
            </button>
          </div>
          <small class="text-muted d-block mt-1">
            8 caractères minimum, avec au moins une majuscule, une minuscule, un chiffre et un caractère spécial (@$!%*?&)
          </small>
          @error('mdp')
            <div class="invalid-feedback d-block">{{ $message }}</div>
          @else
            <div class="invalid-feedback">Mot de passe invalide</div>
          @enderror
        </div>

        <!-- Confirmation mot de passe -->
        <div class="mb-3">
          <label for="password_confirmation" class="form-label">
            <i class="bi bi-lock-fill"></i> Confirmer le mot de passe
          </label>
          <div class="input-group">
            <input 
              type="password" 
              name="mdp_confirmation" 
              id="password_confirmation" 
              class="form-control" 
              autocomplete="new-password"
              required
            >
            <button class="btn btn-outline-secondary" type="button" id="togglePasswordConfirm">
              <i class="bi bi-eye" id="eyeIconConfirm"></i>
            </button>
          </div>
          <div class="invalid-feedback">Les mots de passe doivent correspondre</div>
        </div>

        <!-- Bouton submit -->
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
  const icon = document.getElementById('eyeIcon');
  
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

// Toggle password confirmation visibility
document.getElementById('togglePasswordConfirm').addEventListener('click', function() {
  const password = document.getElementById('password_confirmation');
  const icon = document.getElementById('eyeIconConfirm');
  
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

// Fonction pour afficher les erreurs avec Bootstrap
function showErrors(errors) {
  const alertDiv = document.getElementById('js-error-alert');
  const errorList = document.getElementById('js-error-list');
  
  // Vider la liste précédente
  errorList.innerHTML = '';
  
  // Ajouter chaque erreur
  errors.forEach(error => {
    const li = document.createElement('li');
    li.textContent = error;
    errorList.appendChild(li);
  });
  
  // Afficher l'alerte avec animation
  alertDiv.style.display = 'block';
  alertDiv.classList.add('show');
  
  // Scroll vers l'alerte
  alertDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

// Form validation
const form = document.querySelector('.needs-validation');

form.addEventListener('submit', function(event) {
  const password = document.getElementById('password').value;
  const passwordConfirm = document.getElementById('password_confirmation').value;
  const nom = document.getElementById('nom').value.trim();
  const prenom = document.getElementById('prenom').value.trim();
  const email = document.getElementById('email').value.trim();
  const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/;
  
  let errorMessages = [];
  let hasError = false;

  // Vérifier les champs vides
  if (nom.length === 0) {
    errorMessages.push('Le nom est obligatoire.');
    document.getElementById('nom').classList.add('is-invalid');
    hasError = true;
  } else {
    document.getElementById('nom').classList.remove('is-invalid');
  }

  if (prenom.length === 0) {
    errorMessages.push('Le prénom est obligatoire.');
    document.getElementById('prenom').classList.add('is-invalid');
    hasError = true;
  } else {
    document.getElementById('prenom').classList.remove('is-invalid');
  }

  if (email.length === 0) {
    errorMessages.push('L\'email est obligatoire.');
    document.getElementById('email').classList.add('is-invalid');
    hasError = true;
  } else {
    document.getElementById('email').classList.remove('is-invalid');
  }

  // Vérifier le format du mot de passe
  if (!regex.test(password)) {
    document.getElementById('password').classList.add('is-invalid');
    errorMessages.push('Le mot de passe doit contenir au moins 8 caractères avec une majuscule, une minuscule, un chiffre et un caractère spécial (@$!%*?&).');
    hasError = true;
  } else {
    document.getElementById('password').classList.remove('is-invalid');
    document.getElementById('password').classList.add('is-valid');
  }

  // Vérifier que les mots de passe correspondent
  if (password !== passwordConfirm) {
    document.getElementById('password_confirmation').classList.add('is-invalid');
    errorMessages.push('Les mots de passe ne correspondent pas.');
    hasError = true;
  } else if (passwordConfirm.length > 0) {
    document.getElementById('password_confirmation').classList.remove('is-invalid');
    document.getElementById('password_confirmation').classList.add('is-valid');
  }

  // Si des erreurs, empêcher la soumission et afficher
  if (hasError) {
    event.preventDefault();
    event.stopPropagation();
    showErrors(errorMessages);
  }

  form.classList.add('was-validated');
});

// Validation temps réel du mot de passe
document.getElementById('password').addEventListener('input', function() {
  const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/;
  
  if (regex.test(this.value)) {
    this.classList.remove('is-invalid');
    this.classList.add('is-valid');
  } else {
    this.classList.remove('is-valid');
    if (this.value.length > 0) {
      this.classList.add('is-invalid');
    }
  }
});

// Vérification de la correspondance des mots de passe en temps réel
document.getElementById('password_confirmation').addEventListener('input', function() {
  const password = document.getElementById('password').value;
  
  if (this.value === password && this.value.length > 0 && password.length > 0) {
    this.classList.remove('is-invalid');
    this.classList.add('is-valid');
  } else if (this.value.length > 0) {
    this.classList.remove('is-valid');
    this.classList.add('is-invalid');
  }
});

// Masquer l'alerte quand l'utilisateur commence à corriger
['nom', 'prenom', 'email', 'password', 'password_confirmation'].forEach(id => {
  const element = document.getElementById(id);
  if (element) {
    element.addEventListener('input', function() {
      // Masquer l'alerte après 1 seconde de saisie
      setTimeout(() => {
        const alertDiv = document.getElementById('js-error-alert');
        if (alertDiv.classList.contains('show')) {
          alertDiv.classList.remove('show');
          setTimeout(() => {
            alertDiv.style.display = 'none';
          }, 150);
        }
      }, 1000);
    });
  }
});
</script>
</body>
</html>