@extends('layouts.app')

@section('title', 'Créer un compte')
@section('background-class', 'bg-image')
@section('no-searchbar') @endsection

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh; padding:2rem 0;">
  <div class="form-container">
    <div class="form-card">

      <div class="form-header text-center">
        <h2><i class="bi bi-person-plus-fill"></i> Créer un compte</h2>
        <p>Créez votre compte pour accéder à l'application</p>
      </div>

      {{-- Affichage des erreurs --}}
      @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="bi bi-exclamation-triangle-fill"></i>
          <strong>Erreur :</strong>
          <ul class="mb-0 mt-2">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      @endif

      <form action="{{ route('register') }}" method="POST" class="needs-validation" novalidate>
        @csrf

        <!-- Nom -->
        <div class="mb-3">
          <label for="nom" class="form-label"><i class="bi bi-person-fill"></i> Nom</label>
          <input type="text" name="nom" id="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}" placeholder="Votre nom" required>
          <div class="invalid-feedback">Nom requis</div>
        </div>

        <!-- Prénom -->
        <div class="mb-3">
          <label for="prenom" class="form-label"><i class="bi bi-person-fill"></i> Prénom</label>
          <input type="text" name="prenom" id="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}" placeholder="Votre prénom" required>
          <div class="invalid-feedback">Prénom requis</div>
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label"><i class="bi bi-envelope-fill"></i> Email</label>
          <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="votre@email.com" required>
          <div class="invalid-feedback">Email requis</div>
        </div>

<!-- Mot de passe -->
<div class="mb-3">
  <label for="password" class="form-label">
    <i class="bi bi-lock-fill"></i> Mot de passe
  </label>
  <div class="input-group">
    <input type="password" 
           name="mdp" 
           id="password" 
           class="form-control @error('mdp') is-invalid @enderror" 
           required>
    <button type="button" 
            class="btn btn-outline-secondary toggle-password-btn" 
            data-target="password">
      <i class="bi bi-eye"></i>
    </button>
  </div>
  <small class="text-muted d-block mt-1">
    8 caractères minimum, avec majuscule, minuscule, chiffre et caractère spécial
  </small>
</div>

<!-- Confirmation mot de passe -->
<div class="mb-3">
  <label for="password_confirmation" class="form-label">
    <i class="bi bi-lock-fill"></i> Confirmer le mot de passe
  </label>
  <div class="input-group">
    <input type="password" 
           name="mdp_confirmation" 
           id="password_confirmation" 
           class="form-control" 
           required>
    <button type="button" 
            class="btn btn-outline-secondary toggle-password-btn" 
            data-target="password_confirmation">
      <i class="bi bi-eye"></i>
    </button>
  </div>
</div>


        <!-- Bouton submit -->
        <button class="btn btn-primary w-100 mb-3" type="submit">
          <i class="bi bi-person-plus-fill me-2"></i>Créer mon compte
        </button>

        <div class="text-center mt-4">
          <p class="text-muted">Vous avez déjà un compte ? <a href="{{ url('/onglet/seConnecter') }}" class="text-primary fw-bold">Connectez-vous</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection

