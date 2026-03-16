@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="hero-detail-container">
        <div class="row g-4">

            <!-- Colonne gauche: Image + Descriptif -->
            <div class="col-lg-5">
                <div class="hero-image-card">
                    <img src="{{ asset('img/heros/adamWarlock.jpg') }}" class="img-fluid" alt="Adam Warlock">
                    <div class="hero-name-badge">
                        <h1>ADAM WARLOCK</h1>
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
                        <li><strong>Nom complet :</strong> Adam Warlock</li>
                        <li><strong>Profession(s) :</strong> Sauveur de mondes, messie</li>
                        <li><strong>Famille :</strong> L’Enclave (Jerome Hamilton, Maris Moriak, Wladyslav Shinski, Carlo Zota), Ayesha (jumelle génétique), Stakarus Vaughn-Ogord (neveu futur alternatif)</li>
                        <li><strong>Espèce :</strong> Humain créé artificiellement</li>
                        <li><strong>Pouvoir(s)/Arme(s)/Équipement(s) :</strong> Attributs physiques surhumains, vol, manipulation et absorption de l’énergie, manipulation de la matière, magie, télépathie, facteur guérisseur, Gemme de l'Âme, bâton karmique</li>
                        <li><strong>Caractéristique(s) :</strong> Combat à mains nues, philosophe autodidacte, agile</li>
                        <li><strong>Affiliation(s) :</strong> Ancien membre des <a href="/heros/gardiensDeLaGalaxie" class="hero-link-hero">Gardiens de la Galaxie</a>, ancien chef de l’Infinity Watch</li>
                        <li><strong>Ennemi(s) récurrent(s) :</strong> <a href="/heros/thanos" class="hero-link-hero">Thanos</a>, <a href="/heros/magus" class="hero-link-hero">Magus</a>, <a href="/heros/ultron" class="hero-link-hero">Ultron</a>, Universal Church of Truth</li>
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
                        <p>
                            Adam Warlock a été créé par l'Enclave pour devenir l'être parfait et supérieur. Né sur Terre dans un cocon, il a émergé doté d'une puissance cosmique immense, destiné à être spirituellement avancé.
                        </p>
                        <p>
                            Au fil de son évolution, il devient gardien de la Gemme de l’Âme et prend le nom d’Adam Warlock. Il collabore avec les <a href="/heros/avengers" class="hero-link-hero">Avengers</a> et les Gardiens de la Galaxie, et affronte des ennemis puissants comme Thanos.
                        </p>
                        <p>
                            Un moment clé est sa confrontation avec Magus, son double maléfique d’un futur alternatif. Warlock interagit aussi avec des entités cosmiques comme le <a href="/heros/livingTribunal" class="hero-link-hero">Living Tribunal</a> et Eternity, et joue un rôle dans les conflits entre Ordre et Chaos.
                        </p>
                        <p>
                            Son histoire est marquée par la dualité bien/mal, la quête de l’équilibre cosmique et sa volonté de guider l’univers vers la justice. Ses aventures, combats et quêtes spirituelles font de lui un personnage emblématique de l’univers Marvel.
                        </p>
                    </div>
                </div>
            </div>

            @include('partials.comment', ['fiche' => $fiche])

        </div>
    </div>
</div>

@endsection
