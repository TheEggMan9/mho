@extends('layouts.app')
@use('Illuminate\Support\Facades\Storage')
@section('content')
<div class="container py-5">
    <div class="hero-detail-container">
        <div class="row g-4">

            <!-- Colonne gauche: Image + Descriptif -->
            <div class="col-lg-5">
                <div class="hero-image-card">
                  <img src="{{ Storage::url($fiche->image) }}" class="img-fluid" alt="{{ $fiche->nomFiche }}">
                    <div class="hero-name-badge">
                        <h1>{{ strtoupper($fiche->nomFiche) }}</h1>
                    </div>

                    @include('partials.like-button', ['fiche' => $fiche])
                </div>

                <div class="hero-content-card mt-4">
                    <h2 class="hero-section-title">
                        <i class="bi bi-info-circle-fill"></i> Descriptif
                    </h2>

                    <ul class="hero-info-list">
                        @if($fiche->nom_complet)
                            <li><strong>Nom complet :</strong> {{ $fiche->nom_complet }}</li>
                        @endif

                        @if($fiche->profession)
                            <li><strong>Profession(s) :</strong> {{ $fiche->profession }}</li>
                        @endif

                        @if($fiche->famille)
                            <li><strong>Famille :</strong> {{ $fiche->famille }}</li>
                        @endif

                        @if($fiche->espece)
                            <li><strong>Espèce :</strong> {{ $fiche->espece->nomEspece }}</li>
                        @endif

                        @if($fiche->pouvoirs)
                            <li><strong>Pouvoir(s)/Arme(s)/Équipement(s) :</strong> {{ $fiche->pouvoirs }}</li>
                        @endif

                        @if($fiche->caracteristiques)
                            <li><strong>Caractéristique(s) :</strong> {{ $fiche->caracteristiques }}</li>
                        @endif

                        @if($fiche->affiliations)
                            <li><strong>Affiliation(s) :</strong> {{ $fiche->affiliations }}</li>
                        @endif

                        @if($fiche->ennemis)
                            <li><strong>Ennemi(s) récurrent(s) :</strong> {{ $fiche->ennemis }}</li>
                        @endif
                    </ul>
                </div>
            </div>

            <!-- Colonne droite: Histoire -->
            <div class="col-lg-7">
                <div class="hero-content-card hero-story-card">
                    <h2 class="hero-section-title">
                        <i class="bi bi-book-fill"></i> Histoire
                    </h2>

                    <div class="hero-story">
                        @if($fiche->histoire)
                            @foreach(explode("\n", $fiche->histoire) as $paragraphe)
                                @if(trim($paragraphe))
                                    <p>{{ $paragraphe }}</p>
                                @endif
                            @endforeach
                        @else
                            <p>Aucune histoire disponible pour le moment.</p>
                        @endif
                    </div>
                </div>
            </div>

            @include('partials.comment', ['fiche' => $fiche])

        </div>
    </div>
</div>
@endsection