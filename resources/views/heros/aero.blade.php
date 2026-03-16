@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="hero-detail-container">
        <div class="row g-4">

            <!-- Colonne gauche: Image + Descriptif -->
            <div class="col-lg-5">
                <div class="hero-image-card">
                    <img src="{{ asset('img/heros/aero.jpg') }}" class="img-fluid" alt="Aero">
                    <div class="hero-name-badge">
                        <h1>AERO</h1>
                    </div>

                    @include('partials.like-button', ['fiche' => $fiche])
                </div>

                <div class="hero-content-card mt-4">
                    <h2 class="hero-section-title">
                        <i class="bi bi-info-circle-fill"></i> Descriptif
                    </h2>

                    <ul class="hero-info-list">
                        <li><strong>Nom complet :</strong> Lei Ling</li>
                        <li><strong>Profession(s) :</strong> Architecte, agent gouvernemental</li>
                        <li><strong>Famille :</strong> Une mère non identifiée</li>
                        <li><strong>Espèce :</strong> Humaine altérée</li>
                        <li><strong>Pouvoir(s)/Arme(s)/Équipement(s) :</strong> Aérokinésie (produit et contrôle les vents et courants aériens)</li>
                        <li><strong>Caractéristique(s) :</strong> Sens aiguisés, maîtrise du Qi (améliore capacités physiques et mouvements)</li>
                        <li><strong>Affiliation(s) :</strong> Membre des Nouveaux Agents d’Atlas, du Cabinet de l’Arbre sacré</li>
                        <li><strong>Ennemi(s) récurrent(s) :</strong> Warping Wind, Masters of the Elements</li>
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
                            Lei Ling était une ingénieure aéronautique vivant à Shanghai. Exposée au Qi du Ciel et de la Terre, elle obtient des pouvoirs aérodynamiques lui permettant de manipuler l’air et de voler. Inspirée par ses nouveaux pouvoirs, elle devient la super-héroïne Aero.
                        </p>
                        <p>
                            Elle rejoint les Avengers de Shanghai, aux côtés de Wave, Sword Master et White Fox, pour protéger la ville contre des menaces surpuissantes. Elle combat des ennemis comme Jade Claw et d'autres menaces locales et internationales.
                        </p>
                        <p>
                            Grâce à ses pouvoirs aérodynamiques et sa maîtrise du Qi, Aero s’affirme comme une défenseuse respectée de Shanghai. Son parcours continue de s’écrire dans l’univers Marvel, avec de nouvelles aventures et défis.
                        </p>
                    </div>
                </div>
            </div>

            @include('partials.comment', ['fiche' => $fiche])

        </div>
    </div>
</div>

@endsection
