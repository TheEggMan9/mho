<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abomination - Marvel's Heroes Origins</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="bg-image">

<header class="text-white text-center py-4 hero-header">
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

<!-- Barre de recherche -->
<div class="container text-center py-4">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <form autocomplete="off" class="search-form">
        <div class="search-wrapper">
          <div class="input-group">
            <span class="input-group-text bg-white border-end-0">
              <i class="bi bi-search"></i>
            </span>
            <input type="text" class="form-control border-start-0 ps-0" id="input" placeholder="Rechercher un personnage Marvel..." />
          </div>
          <ul class="list list-group"></ul>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Contenu principal du héros -->
<div class="container py-5">
    <div class="hero-detail-container">
        <div class="row g-4">
            <!-- Colonne gauche: Image + Descriptif -->
            <div class="col-lg-5">
                <!-- Image du héros -->
                <div class="hero-image-card">
                    <img src="{{ asset('img/heros/abomination.jpg') }}" class="img-fluid" alt="Abomination">
                    <div class="hero-name-badge">
                        <h1>ABOMINATION</h1>
                    </div>
                </div>

                <!-- Descriptif -->
                <div class="hero-content-card mt-4">
                    <h2 class="hero-section-title">
                        <i class="bi bi-info-circle-fill"></i> Descriptif
                    </h2>
                    <ul class="hero-info-list">
                        <li><strong>Nom complet :</strong> Emil Blonsky</li>
                        <li><strong>Profession(s) :</strong> Ancien professeur de littérature, ancien espion, criminel professionnel</li>
                        <li><strong>Famille :</strong> Nadia Dornova (première épouse, divorcée), Nadia (Blonsky) (seconde épouse, divorcée)</li>
                        <li><strong>Espèce :</strong> Humain altéré</li>
                        <li><strong>Pouvoir(s) :</strong> Attributs physiques surhumains, résistance surhumaine, facteur guérisseur</li>
                        <li><strong>Caractéristique(s) :</strong> Parle couramment le russe, le serbo-croate et l'anglais</li>
                        <li><strong>Affiliation(s) :</strong> Ancien membre de l'équipage du vaisseau spatial Andromède, ancien agent du Maître des Galaxies, du général Thaddeus Ross (<a href="#" class="hero-link">Red Hulk</a>) et de <a href="#" class="hero-link">Modok</a></li>
                        <li><strong>Ennemi(s) récurrent(s) :</strong> <a href="#" class="hero-link">Hulk</a>, le <a href="#" class="hero-link">Leader</a>, Red Hulk, <a href="#" class="hero-link">Hulkbuster</a></li>
                    </ul>
                </div>
            </div>

            <!-- Colonne droite: Histoire -->
            <div class="col-lg-7">
                <div class="hero-content-card hero-story-card">
                    <h2 class="hero-section-title">
                        <i class="bi bi-book-fill"></i> Histoire
                    </h2>
                    <div class="hero-story">
                        <p>
                            Emil Blonsky, était un agent du KGB (service de renseignement soviétique) qui a été chargé de traquer Hulk, le géant vert aux pouvoirs surhumains. Dans sa quête pour surpasser Hulk, Blonsky s'est exposé à une version expérimentale du sérum du Super-Soldat, similaire à celui qui a créé <a href="#" class="hero-link">Captain America</a>. Cependant, les effets du sérum combinés à une dose de rayons gamma ont transformé Blonsky en une créature monstrueuse connue sous le nom de l'Abomination.
                        </p>
                        <p>
                            En tant qu'Abomination, Blonsky possède une force, une endurance et une résistance surhumaines qui rivalisent avec celles de Hulk. Il a également une apparence reptilienne, avec une peau écailleuse et une taille démesurée. L'Abomination est devenu l'un des ennemis les plus puissants et récurrents de Hulk.
                        </p>
                        <p>
                            Au fil des années, l'Abomination a affronté Hulk à de nombreuses reprises, provoquant des combats dévastateurs et destructeurs. Il a également croisé le chemin d'autres héros Marvel tels que <a href="#" class="hero-link">Thor</a>, <a href="#" class="hero-link">Iron Man</a> et les <a href="#" class="hero-link">Avengers</a>. Dans certains récits, l'Abomination a cherché à s'emparer du pouvoir de Hulk pour devenir le monstre le plus puissant de l'univers.
                        </p>
                        <p>
                            L'histoire de l'Abomination est marquée par des moments de rédemption, de rivalité et de conflit intérieur. À plusieurs occasions, il a tenté de retrouver son humanité et de se racheter, mais ses impulsions violentes et son désir de surpasser Hulk l'ont souvent ramené à son état monstrueux.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<script src="{{ asset('js/script.js') }}"></script>
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