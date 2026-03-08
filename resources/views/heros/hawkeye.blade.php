@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="hero-detail-container">
        <div class="row g-4">

            <!-- Colonne gauche: Image + Descriptif -->
            <div class="col-lg-5">
                <div class="hero-image-card">
                    <img src="https://i.pinimg.com/474x/b2/49/18/b249185df7dc79d5ce741121c3a471bd.jpg" class="img-fluid" alt="Hawkeye">
                    <div class="hero-name-badge">
                        <h1>HAWKEYE</h1>
                    </div>

                    @include('partials.like-button', ['fiche' => $fiche])
                </div>

                <div class="hero-content-card mt-4">
                    <h2 class="hero-section-title"><i class="bi bi-info-circle-fill"></i> Descriptif</h2>
                    <ul class="hero-info-list">
                        <li><strong>Nom complet :</strong> Clinton (Clint) Francis Barton</li>
                        <li><strong>Profession(s) :</strong> Aventurier, ancien hors-la-loi, ancien espion, ancien détenu fédéral, ancien agent non officiel du SHIELD, ancien révolutionnaire, ancien chef de la sécurité de Cross Technological Enterprises, ancien rancher, ancien professeur de tir à l’arc, ancien criminel professionnel, ancien artiste de cirque, ancien apprenti en boucherie</li>
                        <li><strong>Famille :</strong> Harold Barton (père, décédé), Edith Barton (mère, décédée), Charles Bernard (Barney Barton / Trickshot, frère), Barbara (Bobbi) Morse (Mockingbird, ex-épouse), un fils non identifié (mort avant sa naissance), Brett Barton (ancêtre, décédé), Mack Barton (ancêtre, décédé), Susan Morse (ex-belle-mère), Ben Morse (ex-beau-frère)</li>
                        <li><strong>Espèce :</strong> Humain</li>
                        <li><strong>Pouvoir(s)/Arme(s)/Équipement(s) :</strong> Arc de haute technologie (flèches soniques, explosives, incendiaires, éclairantes, électriques, fumigènes, adhésives, boomerangs…), sabres, nunchakus, shurikens, armure, masque</li>
                        <li><strong>Caractéristique(s) :</strong> Maître archer, tireur d'élite, expert tacticien, acrobate, combat corps à corps, maîtrise armes orientales</li>
                        <li><strong>Affiliation(s) :</strong> New Avengers, Avengers, Secret Avengers, Académie des Avengers, ancien membre du WCA, Thunderbolts, Ombres, Défenseurs, Avengers des Grands Lacs, Vengeance royale, Cross Technological Enterprises, SHIELD, Silver Sable Inc., Cirque Carson, Cirque Tiboldt ; ancien partenaire de Kate Bishop, Mockingbird, Pistoléro, Black Widow, Trickshot (Buck Chisholm), Swordsman</li>
                        <li><strong>Ennemi(s) récurrents :</strong> Trickshot, Swordsman, clown, Maîtres du Mal</li>
                    </ul>
                </div>
            </div>

            <!-- Colonne droite: Histoire -->
            <div class="col-lg-7">
                <div class="hero-content-card hero-story-card">
                    <h2 class="hero-section-title"><i class="bi bi-book-fill"></i> Histoire</h2>
                    <div class="hero-story">
                        <p>
                            Clint Barton, alias Hawkeye, est né le 7 août 1968 dans le Midwest des États-Unis. Jeune acrobate de cirque, il s’inspire des Avengers et devient héros grâce à ses talents de tir à l’arc.<br><br>

                            Hawkeye commence en tant qu’antagoniste face à Iron Man avant de rejoindre les Avengers, où il devient un membre clé. Il affronte de nombreux ennemis, dont son frère Barney Barton (Trickshot) et Swordsman.<br><br>

                            En solo et avec les Avengers, il participe à des événements majeurs comme la Guerre Kree-Skrull, la Guerre civile des super-héros et Avengers Disassembled. Il a également été Ronin, adoptant une identité secrète pour combattre le crime lorsque les Avengers étaient dissous.<br><br>

                            L’histoire de Hawkeye illustre son agilité, son habileté au tir à l’arc, sa ténacité et son humour, faisant de lui un héros respecté de l’univers Marvel.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
