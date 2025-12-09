<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Marvel's Heroes Origins</title>
  <link href="{{ asset('css/style3.css') }}" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<div class="bg-image">

	 <!-- <div class="lineaire-simple">  -->

  <header class="bg-dark text-white text-center py-4">
    <h1>Marvel's Heroes Origins</h1>
  </header>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
          <a class="nav-link" href="{{ url('/moderateurs/commentaires') }}">Commentaires</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
        </ul>
      </div>
    </div>
  </nav>
  
  @if(session('success'))
    <div class="alert alert-success " role="alert">
        {{ session('success') }}
    </div>
  @endif
  @if(session('deco'))
    <div class="alert alert-dark " role="alert">
        {{ session('deco') }}
    </div>
  @endif
  @if(session('delete'))
    <div class="alert alert-sucess " role="alert">
        {{ session('deco') }}
    </div>
  @endif

 <div class="container text-center py-5">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <form autocomplete="off" class="search-form">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="input" placeholder="Rechercher un personnage" />
        </div>
        <ul class="list list-group"></ul>
      </form>
    </div>
  </div>
</div>

<div class="container d-flex justify-content-center align-items-start" style="height: 70vh;">
  <div class="text-center mb-4">
    <img src="{{ asset('img/groot.gif') }}" alt="Gif" class="img-fluid" style="max-width: 300px; height: auto;">
  </div>

  <fieldset class="bg-primary text-white p-4 rounded w-50">
    <p>Bienvenue en tant que modérateur !</p>
  </fieldset>
</div>



<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>