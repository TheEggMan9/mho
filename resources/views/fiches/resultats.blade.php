<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Résultats de recherche - Marvel's Heroes Origins</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('css/style3.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/fiches-animation.css') }}" rel="stylesheet" type="text/css" />
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
                    @foreach(App\Models\Espece::all() as $esp)
                        <option value="{{ $esp->id }}" {{ request('espece_id') == $esp->id ? 'selected' : '' }}>
                            {{ $esp->nomEspece }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <select id="orgFilter" class="form-select">
                    <option value="">Toutes les organisations</option>
                    @foreach(App\Models\Organisation::all() as $org)
                        <option value="{{ $org->id }}" {{ request('organisation_id') == $org->id ? 'selected' : '' }}>
                            {{ $org->nomOrganisation }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <ul class="list list-group"></ul>
    </form>
</div>

<!-- Contenu principal avec card en arrière-plan -->
<div class="container py-4">
    <div class="card shadow-lg">
        <div class="card-body p-4">
            <h2 class="mb-4"><i class="bi bi-search"></i> Résultats de la recherche</h2>

            <!-- Affichage des filtres appliqués -->
            @if(request('espece_id') || request('organisation_id'))
                <div class="alert alert-info">
                    <strong><i class="bi bi-filter"></i> Filtres appliqués :</strong>
                    @if(request('espece_id'))
                        @php
                            $espece = App\Models\Espece::find(request('espece_id'));
                        @endphp
                        @if($espece)
                            <span class="badge bg-primary">Espèce : {{ $espece->nomEspece }}</span>
                        @endif
                    @endif
                    @if(request('organisation_id'))
                        @php
                            $organisation = App\Models\Organisation::find(request('organisation_id'));
                        @endphp
                        @if($organisation)
                            <span class="badge bg-success">Organisation : {{ $organisation->nomOrganisation }}</span>
                        @endif
                    @endif
                </div>
            @endif

            @if(isset($fiches) && $fiches->count() > 0)
                <p class="text-muted mb-3">
                    <i class="bi bi-check-circle"></i> 
                    <span class="count-animation">{{ $fiches->count() }}</span> héros trouvé(s)
                </p>
                <div class="row mt-3">
                    @foreach($fiches as $fiche)
                        <div class="col-md-4 mb-3 fiche-card">
                            <div class="card h-100">
                                <!-- IMAGE DU HÉROS -->
                                @if($fiche->image)
                                    <img src="{{ asset('img/heros/' . $fiche->image) }}" 
                                         class="card-img-top" 
                                         alt="{{ $fiche->nomFiche }}"
                                         style="height: 250px; object-fit: cover;">
                                @else
                                    <img src="{{ asset('img/default-hero.png') }}" 
                                         class="card-img-top" 
                                         alt="Image par défaut"
                                         style="height: 250px; object-fit: cover;">
                                @endif
                                
                                <div class="card-body">
                                    <h5 class="card-title">{{ $fiche->nomFiche }}</h5>
                                    
                                    @if($fiche->espece)
                                        <p><strong>Espèce :</strong> <span class="badge bg-primary">{{ $fiche->espece->nomEspece }}</span></p>
                                    @endif
                                    
                                    @if($fiche->organisation)
                                        <p><strong>Organisation :</strong> <span class="badge bg-success">{{ $fiche->organisation->nomOrganisation }}</span></p>
                                    @endif
                                    
                                    <a href="{{ url('heros/'.$fiche->slug) }}" class="btn btn-primary">
                                        <i class="bi bi-eye"></i> Voir la fiche
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-warning">
                    <i class="bi bi-exclamation-triangle-fill"></i> Aucun héros ne correspond aux filtres.
                </div>
            @endif

            <div class="mt-4">
                <a href="{{ url('/') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Retour à l'accueil
                </a>
            </div>
        </div>
    </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/barreRecherche.js') }}"></script>
</body>
</html>