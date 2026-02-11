<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Marvel's Heroes Origins</title>
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

<!-- Alerts avec animations -->
@if(session('success'))
  <div class="container mt-3">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  </div>
@endif

@if(session('deco'))
  <div class="container mt-3">
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <i class="bi bi-info-circle-fill"></i> {{ session('deco') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  </div>
@endif

@if(session('delete'))
  <div class="container mt-3">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle-fill"></i> {{ session('delete') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  </div>
@endif

<!-- Barre de recherche -->
<div class="container text-center py-4">
    <form id="searchForm" 
          data-baseurl="{{ url('heros') }}"
          data-searchurl="{{ url('/search') }}"
          data-resultatsurl="{{ url('/fiches/resultats') }}">
        <div class="input-group mb-2">
            <input type="text" class="form-control" id="input" placeholder="Rechercher un personnage...">
            <button class="btn btn-primary" type="submit">Rechercher</button>
        </div>

        <div class="row mb-2">
            <div class="col">
                <select id="especeFilter" class="form-select">
                    <option value="">Toutes les espèces</option>
                    @foreach(App\Models\Espece::all() as $espece)
                        <option value="{{ $espece->id }}">{{ $espece->nomEspece }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <select id="orgFilter" class="form-select">
                    <option value="">Toutes les organisations</option>
                    @foreach(App\Models\Organisation::all() as $org)
                        <option value="{{ $org->id }}">{{ $org->nomOrganisation }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <ul class="list list-group"></ul>
    </form>
</div>

<!-- Section principale avec hero et description -->
<div class="container py-5">
  <div class="row align-items-center g-4">
    <!-- Groot Animation -->
    <div class="col-md-5 text-center">
      <div class="hero-image-container">
        <img src="{{ asset('img/groot.gif') }}" alt="Groot" class="img-fluid hero-image">
      </div>
    </div>

    <!-- Description -->
    <div class="col-md-7">
      <div class="description-card">
        <h2 class="description-title">
          <i class="bi bi-book-fill"></i> Bienvenue dans l'Univers Marvel
        </h2>
        <p class="description-text">
          Marvel's Heroes Origins est une encyclopédie en ligne consacrée à l'univers Marvel. 
          Son objectif principal est de fournir une source complète d'informations sur les personnages, 
          les lieux <span class="badge bg-warning text-dark">prochainement...</span> et les événements <span class="badge bg-warning text-dark">prochainement...</span> qui composent l'univers des bandes dessinées Marvel.
        </p>
        <p class="description-text mb-0">
          Marvel's Heroes Origins vise à servir de guide complet et informatif pour les fans de Marvel et les novices, 
          en offrant un accès facile à une mine d'informations sur cet univers fascinant.
        </p>
      </div>
    </div>
  </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/barreRecherche.js') }}"></script>
</body>
</html>