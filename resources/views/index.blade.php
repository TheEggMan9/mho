@extends('layouts.app')

@section('background-class', 'bg-image')

@section('content')

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

@endsection
