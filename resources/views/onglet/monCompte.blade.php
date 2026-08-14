@extends('layouts.app')

@section('title', "Mon compte - Marvel's Heroes Origins")
@section('background-class', 'bg-image')
@section('no-searchbar')
@endsection

@section('content')

<div class="container py-5">
  <div class="account-container">

    @if(Auth::check())

      @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
      @endif

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

      <!-- Carte modification du mot de passe -->
      <div class="account-info-card">
        <div class="account-details">
          <h3><i class="bi bi-key-fill"></i> Modifier mon mot de passe</h3>

          @if ($errors->has('current_password') || $errors->has('password'))
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('password.change') }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="current_password" class="form-label">
                <i class="bi bi-lock-fill"></i> Mot de passe actuel
              </label>
              <div class="input-group">
                <input type="password" id="current_password" name="current_password" class="form-control" required>
                <button class="btn btn-outline-secondary toggle-password-btn" type="button" data-target="current_password">
                  <i class="bi bi-eye"></i>
                </button>
              </div>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">
                <i class="bi bi-key"></i> Nouveau mot de passe
              </label>
              <div class="input-group">
                <input type="password" id="password" name="password" class="form-control" required>
                <button class="btn btn-outline-secondary toggle-password-btn" type="button" data-target="password">
                  <i class="bi bi-eye"></i>
                </button>
              </div>
            </div>

            <div class="mb-3">
              <label for="password_confirmation" class="form-label">
                <i class="bi bi-key"></i> Confirmer le nouveau mot de passe
              </label>
              <div class="input-group">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                <button class="btn btn-outline-secondary toggle-password-btn" type="button" data-target="password_confirmation">
                  <i class="bi bi-eye"></i>
                </button>
              </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">
              <i class="bi bi-check-circle-fill"></i> Mettre à jour le mot de passe
            </button>
          </form>
        </div>
      </div>

      <!-- Carte suppression -->
      <div class="account-danger-card">

        <p class="danger-description">
          La suppression de votre compte est définitive et irréversible.
        </p>

        @if ($errors->has('password') && !$errors->has('current_password'))
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
            <label for="delete_password" class="form-label">
              <i class="bi bi-lock-fill"></i> Confirmez avec votre mot de passe
            </label>

            <div class="input-group">
              <input type="password" id="delete_password" name="password" class="form-control" required>
              <button class="btn btn-outline-secondary toggle-password-btn" type="button" data-target="delete_password">
                <i class="bi bi-eye"></i>
              </button>
            </div>
          </div>

          <button type="button" class="btn btn-danger w-100" onclick="confirmDelete()">
            <i class="bi bi-trash-fill"></i> Supprimer définitivement mon compte
          </button>
        </form>
      </div>

    @else

      <div class="account-not-connected text-center">
        <i class="bi bi-person-x-fill fs-1"></i>
        <h2>Vous n'êtes pas connecté</h2>
        <a href="{{ route('seConnecter') }}" class="btn btn-primary mt-3">Se connecter</a>
      </div>

    @endif

  </div>
</div>

@endsection

@section('scripts')
<script>
function confirmDelete() {
    const password = document.getElementById('delete_password').value;

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