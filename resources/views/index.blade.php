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
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <form autocomplete="off" class="search-form" id="searchForm" data-baseurl="{{ url('heros') }}">
        <div class="search-wrapper">
          <div class="input-group">
            <span class="input-group-text bg-white border-end-0">
              <i class="bi bi-search"></i>
            </span>
            <input
              type="text"
              class="form-control border-start-0 ps-0"
              id="input"
              placeholder="Rechercher un personnage Marvel..."
            />
          </div>
          <ul class="list list-group"></ul>
        </div>
      </form>
    </div>
  </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById("input");
    const list = document.querySelector(".list");
    const form = document.getElementById("searchForm");
    const baseURL = form.dataset.baseurl;

    let results = []; // stocke les résultats venant de la DB

    function removeElements() {
        list.innerHTML = "";
    }

    // AUTOCOMPLETE
    input.addEventListener("keyup", function () {
        const value = input.value.trim();

        removeElements();
        if (!value) return;

        fetch(`{{ url('/search') }}?q=${encodeURIComponent(value)}`)
            .then(res => res.json())
            .then(data => {
                results = data;

                data.forEach(item => {
                    if (
                        item.nomFiche.toLowerCase().startsWith(value.toLowerCase())
                    ) {
                        let listItem = document.createElement("li");
                        listItem.classList.add("list-group-item");
                        listItem.style.cursor = "pointer";

                        // STYLE
                        listItem.style.backgroundColor = "#f8f9fa";
                        listItem.style.color = "#343a40";

                        listItem.onmouseover = function () {
                            this.style.backgroundColor = "#007bff";
                            this.style.color = "white";
                        };
                        listItem.onmouseout = function () {
                            this.style.backgroundColor = "#f8f9fa";
                            this.style.color = "#343a40";
                        };

                        // Texte avec partie en gras
                        let word = "<b>" + item.nomFiche.substr(0, value.length) + "</b>";
                        word += item.nomFiche.substr(value.length);
                        listItem.innerHTML = word;

                        // REDIRECTION AU CLIC
                        listItem.addEventListener("click", function () {
                            window.location.href = `${baseURL}/${item.slug}`;
                        });

                        list.appendChild(listItem);
                    }
                });
            });
    });

    // ENTRÉE
    form.addEventListener("submit", function (e) {
        e.preventDefault();

        if (results.length > 0) {
            window.location.href = `${baseURL}/${results[0].slug}`;
        } else {
            alert("Héros non trouvé dans la base !");
        }
    });
});
</script>


















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
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>