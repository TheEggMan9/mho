<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Mon compte - Marvel's Heroes Origins</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="{{ asset('css/style3.css') }}" rel="stylesheet" type="text/css" />
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
          <a class="nav-link" href="{{ url('/onglet/seConnecter') }}"><i class="bi bi-box-arrow-in-right"></i> Se connecter</a>
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

<div class="container py-5">
  <div class="account-container">
    @if(Auth::check())
      <!-- Carte d'informations personnelles -->
      <div class="account-info-card">
        <div class="account-header">
          <div class="account-avatar">
            <i class="bi bi-person-circle"></i>
          </div>
          <h2>{{ Auth::user()->prenom }} {{ Auth::user()->nom }}</h2>
        </div>

        <div class="account-details">
          <h3><i class="bi bi-info-circle-fill"></i> Informations personnelles</h3>
          <div class="info-grid">
            <div class="info-item">
              <span class="info-label"><i class="bi bi-person"></i> Nom</span>
              <span class="info-value">{{ Auth::user()->nom }}</span>
            </div>
            <div class="info-item">
              <span class="info-label"><i class="bi bi-person"></i> Prénom</span>
              <span class="info-value">{{ Auth::user()->prenom }}</span>
            </div>
            <div class="info-item">
              <span class="info-label"><i class="bi bi-at"></i> email</span>
              <span class="info-value">{{ Auth::user()->email }}</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Carte de suppression de compte -->
      <div class="account-danger-card">
        <div class="danger-header">
        </div>
        <p class="danger-description">
          La suppression de votre compte est définitive et irréversible. Toutes vos données seront perdues.
        </p>

        @if ($errors->any())
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <ul class="mb-0">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
        @endif

        <form action="{{ route('destroy') }}" method="post" id="deleteForm">
          @csrf
          @method('DELETE')
          
          <div class="mb-3">
            <label for="password" class="form-label">
              <i class="bi bi-lock-fill"></i> Confirmez avec votre mot de passe
            </label>
            <div class="input-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Saisir votre mot de passe" required>
              <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                <i class="bi bi-eye" id="eyeIcon"></i>
              </button>
            </div>
          </div>

          <button type="button" class="btn btn-danger btn-lg w-100" onclick="confirmDelete()">
            <i class="bi bi-trash-fill"></i> Supprimer définitivement mon compte
          </button>
        </form>
      </div>

    @else
      <!-- Carte si non connecté -->
      <div class="account-not-connected">
        <div class="not-connected-icon">
          <i class="bi bi-person-x-fill"></i>
        </div>
        <h2>Vous n'êtes pas connecté</h2>
        <p>Connectez-vous pour accéder à votre espace personnel</p>
        <a href="{{ route('seConnecter') }}" class="btn btn-primary btn-lg">
          <i class="bi bi-box-arrow-in-right"></i> Se connecter
        </a>
      </div>
    @endif
  </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Toggle password visibility
document.getElementById('togglePassword')?.addEventListener('click', function () {
  const passwordField = document.getElementById('password');
  const eyeIcon = document.getElementById('eyeIcon');
  
  if (passwordField.type === 'password') {
    passwordField.type = 'text';
    eyeIcon.classList.remove('bi-eye');
    eyeIcon.classList.add('bi-eye-slash');
  } else {
    passwordField.type = 'password';
    eyeIcon.classList.remove('bi-eye-slash');
    eyeIcon.classList.add('bi-eye');
  }
});

// Confirmation de suppression
function confirmDelete() {
  const password = document.getElementById('password').value;
  
  if (!password) {
    alert('Veuillez saisir votre mot de passe pour confirmer');
    return;
  }
  
  if (confirm('⚠️ ATTENTION ⚠️\n\nÊtes-vous absolument sûr de vouloir supprimer votre compte ?\n\nCette action est IRRÉVERSIBLE et entraînera la perte définitive de toutes vos données.\n\nTapez OK pour confirmer la suppression.')) {
    document.getElementById('deleteForm').submit();
  }
}
</script>
<script src="{{ asset('js/script2.js') }}"></script>
</body>
</html>