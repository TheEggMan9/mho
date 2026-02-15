<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}">
            <i class="bi bi-house-fill"></i> Accueil
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/sommaire') }}">
            <i class="bi bi-list-ul"></i> Sommaire
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/quizzMarvel') }}">
            <i class="bi bi-patch-question-fill"></i> Quizz
          </a>
        </li>

        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/monCompte') }}">
            <i class="bi bi-person-circle"></i> Mon compte
          </a>
        </li>
        @endauth

        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/seConnecter') }}">
            <i class="bi bi-box-arrow-in-right"></i> Se connecter
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/creerCompte') }}">
            <i class="bi bi-person-plus-fill"></i> Créer un compte
          </a>
        </li>
        @endguest

        @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"
             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-right"></i> Se déconnecter
          </a>
        </li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
            @csrf
        </form>
        @endauth

      </ul>
    </div>
  </div>
</nav>
