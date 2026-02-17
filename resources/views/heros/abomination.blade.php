@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="hero-detail-container">
        <div class="row g-4">

            <!-- Colonne gauche: Image + Descriptif -->
            <div class="col-lg-5">
                <div class="hero-image-card">
                    <img src="{{ asset('img/heros/abomination.jpg') }}"
                         class="img-fluid"
                         alt="Abomination">
                    <div class="hero-name-badge">
                        <h1>ABOMINATION</h1>
                    </div>

                    <!-- Bouton Like sous le nom -->
                    <div class="like-container text-center mt-3">
                        @auth
                            <button
                                class="btn-like {{ $fiche->isLikedBy(Auth::id()) ? 'liked' : '' }}"
                                data-fiche-id="{{ $fiche->id }}"
                                onclick="toggleLike({{ $fiche->id }}, '{{ route('like.toggle', $fiche->id) }}')"
                            >
                                <i class="bi {{ $fiche->isLikedBy(Auth::id()) ? 'bi-heart-fill' : 'bi-heart' }}"></i>
                                <span class="like-count">{{ $fiche->likesCount() }}</span>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn-like">
                                <i class="bi bi-heart"></i>
                                <span class="like-count">{{ $fiche->likesCount() }}</span>
                            </a>
                            <small class="text-muted d-block mt-1">
                                Connectez-vous pour liker
                            </small>
                        @endauth
                    </div>
                </div>

                <div class="hero-content-card mt-4">
                    <h2 class="hero-section-title">
                        <i class="bi bi-info-circle-fill"></i> Descriptif
                    </h2>

                    <ul class="hero-info-list">
                        <li><strong>Nom complet :</strong> Emil Blonsky</li>
                        <li><strong>Profession(s) :</strong> Ancien professeur de littérature, ancien espion, criminel professionnel</li>
                        <li><strong>Famille :</strong> Nadia Dornova (première épouse, divorcée), Nadia (Blonsky) (seconde épouse, divorcée)</li>
                        <li><strong>Espèce :</strong> Humain altéré</li>
                        <li><strong>Pouvoir(s) :</strong> Attributs physiques surhumains, résistance surhumaine, facteur guérisseur</li>
                        <li><strong>Caractéristique(s) :</strong> Parle couramment le russe, le serbo-croate et l'anglais</li>
                        <li><strong>Affiliation(s) :</strong> Ancien membre de l'équipage du vaisseau spatial Andromède, ancien agent du Maître des Galaxies, du général Thaddeus Ross (<a href="#" class="hero-link-hero">Red Hulk</a>) et de <a href="#" class="hero-link-hero">Modok</a></li>
                        <li><strong>Ennemi(s) récurrent(s) :</strong> <a href="#" class="hero-link-hero">Hulk</a>, le <a href="#" class="hero-link-hero">Leader</a>, Red Hulk, <a href="#" class="hero-link-hero">Hulkbuster</a></li>
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
                        <p>Emil Blonsky, était un agent du KGB (service de renseignement soviétique) qui a été chargé de traquer Hulk, le géant vert aux pouvoirs surhumains. Dans sa quête pour surpasser Hulk, Blonsky s'est exposé à une version expérimentale du sérum du Super-Soldat, similaire à celui qui a créé <a href="#" class="hero-link-hero">Captain America</a>. Cependant, les effets du sérum combinés à une dose de rayons gamma ont transformé Blonsky en une créature monstrueuse connue sous le nom de l'Abomination.</p>
                        <p>En tant qu'Abomination, Blonsky possède une force, une endurance et une résistance surhumaines qui rivalisent avec celles de Hulk. Il a également une apparence reptilienne, avec une peau écailleuse et une taille démesurée. L'Abomination est devenu l'un des ennemis les plus puissants et récurrents de Hulk.</p>
                        <p>Au fil des années, l'Abomination a affronté Hulk à de nombreuses reprises, provoquant des combats dévastateurs et destructeurs. Il a également croisé le chemin d'autres héros Marvel tels que <a href="#" class="hero-link-hero">Thor</a>, <a href="#" class="hero-link-hero">Iron Man</a> et les <a href="#" class="hero-link-hero">Avengers</a>. Dans certains récits, l'Abomination a cherché à s'emparer du pouvoir de Hulk pour devenir le monstre le plus puissant de l'univers.</p>
                        <p>L'histoire de l'Abomination est marquée par des moments de rédemption, de rivalité et de conflit intérieur. À plusieurs occasions, il a tenté de retrouver son humanité et de se racheter, mais ses impulsions violentes et son désir de surpasser Hulk l'ont souvent ramené à son état monstrueux.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection