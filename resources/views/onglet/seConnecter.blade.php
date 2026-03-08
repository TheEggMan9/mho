@extends('layouts.app')

@section('title', 'Se connecter')

@section('background-class', 'bg-image')

{{-- On enlève la searchbar ici --}}
@section('no-searchbar')
@endsection

@section('content')

<div class="container d-flex justify-content-center align-items-center" 
     style="min-height: 70vh; padding-top: 2rem; padding-bottom: 2rem;">

  <div class="login-type-container">
    <div class="login-type-card">

      <div class="login-type-header text-center">
        <h2>
          <i class="bi bi-people-fill"></i> Choisir votre type de compte
        </h2>
        <p>Sélectionnez comment vous souhaitez vous connecter</p>
      </div>

      <div class="login-type-grid">

        <a href="{{ url('/onglet/typeConnexion/utilisateurs/seConnecter') }}" 
           class="login-type-btn user-btn">
          <div class="login-type-icon">
            <i class="bi bi-person-fill"></i>
          </div>
          <h3>Utilisateur</h3>
          <p>Accès standard pour les fans Marvel</p>
        </a>

        <a href="{{ url('/onglet/typeConnexion/moderateurs/seConnecterModerateur') }}" 
           class="login-type-btn moderator-btn">
          <div class="login-type-icon">
            <i class="bi bi-shield-fill-check"></i>
          </div>
          <h3>Modérateur</h3>
          <p>Accès privilégié avec droits d'administration</p>
        </a>

      </div>

      <div class="text-center mt-4">
        <p class="text-muted">
          Pas encore de compte ?
          <a href="{{ url('/onglet/creerCompte') }}" class="text-primary fw-bold">
            S'inscrire maintenant
          </a>
        </p>
      </div>

    </div>
  </div>

</div>

@endsection
