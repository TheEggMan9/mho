@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="hero-detail-container">
        <div class="row g-4">

            <!-- Colonne gauche: Image + Descriptif -->
            <div class="col-lg-5">
                <div class="hero-image-card">
                    <img src="{{ asset('img/heros/absorbingMan.jpeg') }}" class="img-fluid" alt="Absorbing Man">
                    <div class="hero-name-badge">
                        <h1>ABSORBING MAN</h1>
                    </div>
                    
                    @include('partials.like-button', ['fiche' => $fiche])
                </div>

                <div class="hero-content-card mt-4">
                    <h2 class="hero-section-title">
                        <i class="bi bi-info-circle-fill"></i> Descriptif
                    </h2>

                    <ul class="hero-info-list">
                        <li><strong>Nom complet :</strong> Carl (Crusher) Creel</li>
                        <li><strong>Profession(s) :</strong> Criminel professionnel, ancien boxeur</li>
                        <li><strong>Famille :</strong> Mary Mac Pherran (<a href="{{ url('/heros/titania') }}" class="hero-link-hero">Titania</a>, épouse), Rockwell Davis (Hi-Lite, cousin), Jerry Sledge (Muraille, fils)</li>
                        <li><strong>Espèce :</strong> Humain altéré</li>
                        <li><strong>Pouvoir(s)/Arme(s)/Équipement(s) :</strong> Possède une force surhumaine, absorbe la matière, mimétisme, changement de taille, peut contrôler l'esprit d'une personne à distance, boulet en acier relié à une chaîne</li>
                        <li><strong>Caractéristique(s) :</strong> Combat à mains nues, cambrioleur expérimenté</li>
                        <li><strong>Affiliation(s) :</strong> Ancien membre des Dignes/de la Légion fatale/des Maîtres du Mal, partenaire de Titania</li>
                        <li><strong>Ennemi(s) récurrent(s) :</strong> <a href="{{ url('/heros/thor') }}" class="hero-link-hero">Thor</a>, <a href="{{ url('/heros/hulk') }}" class="hero-link-hero">Hulk</a>, les <a href="{{ url('/heros/avengers') }}" class="hero-link-hero">Avengers</a>, <a href="{{ url('/heros/daredevil') }}" class="hero-link-hero">Daredevil</a>, <a href="{{ url('/heros/spiderMan') }}" class="hero-link-hero">Spider-Man</a></li>
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
                            Crusher Creel, née à New York, était un criminel de bas niveau qui a participé à une expérience scientifique lui conférant la capacité d'absorber les propriétés de tout matériau par simple contact. 
                        </p>
                        <p>
                            Devenu l'Absorbing Man, il utilise ses pouvoirs pour commettre des délits et se confronter à des héros tels que Thor, Hulk, Daredevil et Spider-Man. Il a parfois tenté de trouver un équilibre entre sa vie criminelle et sa quête de rédemption.
                        </p>
                        <p>
                            Sa relation avec Mary Mac Pherran (Titania) ajoute une dimension supplémentaire à son histoire. Au fil des ans, il a évolué dans différents arcs narratifs Marvel, restant un adversaire redoutable grâce à sa capacité d’absorption.
                        </p>
                    </div>
                </div>
            </div>

            @include('partials.comment', ['fiche' => $fiche])

        </div>
    </div>
</div>

@endsection
