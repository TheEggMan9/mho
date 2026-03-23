@extends('layouts.app')

@section('title', "Mon compte - Marvel's Heroes Origins")

@section('background-class', 'bg-image')

@section('no-searchbar')
@endsection

@section('content')

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
              <span class="info-label"><i class="bi bi-person"></i> Pseudo</span>
              <span class="info-value">{{ Auth::user()->pseudo }}</span>
            </div>
            <div class="info-item">
              <span class="info-label"><i class="bi bi-at"></i> Email</span>
              <span class="info-value">{{ Auth::user()->email }}</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Carte suppression -->
      <div class="account-danger-card">

        <p class="danger-description">
          La suppression de votre compte est définitive et irréversible.
        </p>

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
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
              <input type="password" id="password" name="password" class="form-control" required>
              <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                <i class="bi bi-eye" id="eyeIcon"></i>
              </button>
            </div>
          </div>

          <button type="button" class="btn btn-danger w-100" onclick="confirmDelete()">
            <i class="bi bi-trash-fill"></i> Supprimer définitivement mon compte
          </button>
        </form>
      </div>

    @else

      <!-- Non connecté -->
      <div class="account-not-connected text-center">
        <i class="bi bi-person-x-fill fs-1"></i>
        <h2>Vous n'êtes pas connecté</h2>
        <a href="{{ route('seConnecter') }}" class="btn btn-primary mt-3">
          Se connecter
        </a>
      </div>

    @endif

  </div>
</div>

@endsection


{{-- JS spécifique à cette page --}}
@section('scripts')
<script>
document.getElementById('togglePassword')?.addEventListener('click', function () {
    const passwordField = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        eyeIcon.classList.replace('bi-eye', 'bi-eye-slash');
    } else {
        passwordField.type = 'password';
        eyeIcon.classList.replace('bi-eye-slash', 'bi-eye');
    }
});

function confirmDelete() {
    const password = document.getElementById('password').value;

    if (!password) {
        alert('Veuillez saisir votre mot de passe.');
        return;
    }

    if (confirm("⚠️ Cette action est irréversible. Confirmer ?")) {
        document.getElementById('deleteForm').submit();
    }
}
</script>
@endsection
