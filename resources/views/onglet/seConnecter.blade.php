<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Se connecter</title>

  <!-- Lien Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <!-- Lien fichier CSS -->
  <link href="{{ asset('css/style3.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
   
  <div class="bg-image">

    <header class="text-white text-center py-4">
      <h1><i class="bi bi-box-arrow-in-right"></i> Se connecter</h1>
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
          <a class="nav-link" href="{{ url('/') }}"><i class="bi bi-house-fill"></i> Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/sommaire') }}"><i class="bi bi-list-ul"></i> Sommaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/monCompte') }}"><i class="bi bi-person-circle"></i> Mon compte</a>
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

    <!-- Container principal -->
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh; padding-top: 2rem; padding-bottom: 2rem;">
      <div class="login-type-container">
        <div class="login-type-card">
          <div class="login-type-header">
            <h2><i class="bi bi-people-fill"></i> Choisir votre type de compte</h2>
            <p>Sélectionnez comment vous souhaitez vous connecter</p>
          </div>

          <div class="login-type-grid">
            <a href="{{ url('/onglet/typeConnexion/utilisateurs/seConnecter') }}" class="login-type-btn user-btn">
              <div class="login-type-icon">
                <i class="bi bi-person-fill"></i>
              </div>
              <h3>Utilisateur</h3>
              <p>Accès standard pour les fans Marvel</p>
            </a>

            <a href="{{ url('/onglet/typeConnexion/moderateurs/seConnecterModerateur') }}" class="login-type-btn moderator-btn">
              <div class="login-type-icon">
                <i class="bi bi-shield-fill-check"></i>
              </div>
              <h3>Modérateur</h3>
              <p>Accès privilégié avec droits d'administration</p>
            </a>
          </div>

          <div class="text-center mt-4">
            <p class="text-muted">Pas encore de compte ? <a href="{{ url('/onglet/creerCompte') }}" class="text-primary fw-bold">S'inscrire maintenant</a></p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>

    // Logout button
    document.getElementById('logoutBtn').addEventListener('click', function(e) {
      e.preventDefault();
      alert('Déconnexion réussie !');
    });
  </script>
</body>
</html>