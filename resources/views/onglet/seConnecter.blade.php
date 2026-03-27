@extends('layouts.app')

@section('title', 'Se connecter')
@section('background-class', 'bg-image')

{{-- On n'affiche pas la searchbar sur cette page --}}
@section('no-searchbar')
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-center" 
     style="min-height: 70vh; padding-top: 2rem; padding-bottom: 2rem;">

  <div class="form-container">
    <div class="form-card">

      <div class="form-header text-center">
        <h2><i class="bi bi-person-fill"></i> Connexion Utilisateur</h2>
        <p>Accédez à votre espace personnel</p>
      </div>

      @if($errors->has('login_error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="bi bi-exclamation-triangle-fill"></i> 
          <strong>{{ $errors->first('login_error') }}</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <form action="{{ route('loginUtilisateur') }}" method="POST" class="needs-validation" novalidate>
        @csrf 

        <div class="mb-3">
          <label for="email" class="form-label">
            <i class="bi bi-envelope-fill"></i> Email
          </label>
          <input type="email" 
                 name="email" 
                 id="email" 
                 class="form-control @error('email') is-invalid @enderror" 
                 placeholder="Votre adresse email" 
                 value="{{ old('email') }}" 
                 autocomplete="email"
                 required>
          @error('email')
            <div class="invalid-feedback d-block">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">
            <i class="bi bi-lock-fill"></i> Mot de passe
          </label>
          <div class="input-group">
            <input type="password" 
                   name="password" 
                   id="password" 
                   class="form-control @error('password') is-invalid @enderror" 
                   placeholder="Votre mot de passe" 
                   autocomplete="current-password"
                   required>
            <button class="btn btn-outline-secondary toggle-password-btn"
                  type="button" 
                  data-target="password">
              <i class="bi bi-eye"></i>
            </button>
            @error('password')
              <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="remember" name="remember" value="1">
          <label class="form-check-label" for="remember">Se souvenir de moi</label>
        </div>

        <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary btn-lg">
            <i class="bi bi-box-arrow-in-right"></i> Se connecter
          </button>
          <a href="{{ url('/') }}" class="btn btn-outline-secondary">
            <i class="bi bi-x-circle"></i> Annuler
          </a>
        </div>

        <div class="text-center mt-3">
          <p class="text-muted">Pas encore inscrit ? 
            <a href="{{ url('/onglet/creerCompte') }}" class="text-primary fw-bold">Créer un compte</a>
          </p>
        </div>

      </form>
    </div>
  </div>

</div>

@endsection
