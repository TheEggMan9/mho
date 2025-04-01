<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Hawkeye</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>HAWKEYE</h1> <!--NOM HEROS -->
        <form autocomplete="off">
      <div>
        <input type="text" id="input" placeholder="Rechercher un personnage" />
      </div>
      <ul class="list"></ul>
    </form>
    <!--Script-->
    <script src="{{ asset('js/script.js') }}"></script>
 </form>
  <div class="container">
  <label class="toggle-icon" onclick="toggleAdditionalFields()">☰</label>

  <ul class="additional-fields">
    <th><a href="/" style="color: white;">Accueil</a></th>
    <th><a href="/onglet/sommaire" style="color: white;">Sommaire</a></th>
    <th><a href="/onglet/monCompte" style="color: white;">Mon compte</a></th> 
    <th><a href="/onglet/mesReseaux" style="color: white;">Réseaux sociaux</a></th> 
    <th><a href="/onglet/seConnecter" style="color: white;">Se connecter</a></th>
	<th><a href="/onglet/creerCompte" style="color: white;">Créer un compte</a></th>
<th><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: white;">
    Se déconnecter
</a></th>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
  </ul>
</div>

  <script src="{{ asset('js/script2.js') }}"></script>
</style><p class="float-content"><img src="https://i.pinimg.com/474x/b2/49/18/b249185df7dc79d5ce741121c3a471bd.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Clinton (Clint) Francis Barton ;</li>
<li><strong>Profession(s) : </strong>Aventurier, ancien hors-la-loi, ancien espion, ancien détenu fédéral, ancien agent non officiel du SHIELD, ancien révoltuionnaire, ancien chef de la sécurité de Cross Technological Enterprises, ancien rancher, ancien professeur de tir à l’arc, ancien criminel professionnel, ancien artiste de cirque, ancien apprenti en boucherie ;</li>
<li><strong>Famille : </strong>Harold Barton (père, décédé), Edith Barton (mère, décédée), Charles Bernard (Barney Barton) (Trickshot, frère), Barbara (Bobbi) Morse (Mockingird, ex-épouse), un fils non identifié (mort avant sa naissance), Brett Barton (ancêtre, décédé), Mack Barton (ancêtre, décédé), Susan Morse (ex-belle-mère), Ben Morse (ex-beau-frère) ;</li>  
<li><strong>Espèce : </strong>Humain ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Arc de haute technologie (flèches soniques, explosives, incendiaires, éclairantes, à décharge électrique, à nuage de fumée, à nuage de gaz, à projection d’acide, à projection de mastic ou d’un autre adhésif puissant, à ventouse, dotées d’un câble, dotées d’un filet, flèches boomerangs, flèches fusées), sabres, nunchakus, shurikens, armure de combat, masque ;</li> 
<li><strong>Caratéristique(s) : </strong>Maitre archer, tireur d'élite, expert tacticien, acrobate, combattant au corps à corps, maitrise de toute arme orientale ;</li>
<li><strong>Affiliation(s) : </strong>Membre des New Avengers, des Avengers, des Secret Avengers, de l’Académie des Avengers, ancien membre du WCA (World Counterterrorism Agency), des Thunderbolts, des Ombres, des Défenseurs, des Enchaînés, des Avengers des Grands Lacs, de la Vengeance royale, de la Cross Technological Enterprises, du SHIELD, de Silver Sable Inc., du Cirque Carson, du Cirque Tiboldt, ancien partenaire de Kate Bishop, de Mockingbird, du Pistoléro, de Black Widow, de Trickshot (Buck Chisholm), du Swordsman ;</li>
<li><strong>Ennemi(s) récurrents(s): </strong>Trikshot, Swordsman, clown, les Maîtres du Mal.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Clint Barton, alias Hawkeye, est née le 7 août 1968 le Midwest des États-Unis. Avant de devenir un super-héros, Clint était un jeune acrobate de cirque talentueux. Inspiré par les exploits des Avengers, il a décidé d'utiliser ses compétences en tir à l'arc pour devenir un héros.<br><br>

Hawkeye a commencé en tant qu'antagoniste, s'affrontant avec Iron Man avant de réaliser son erreur et de rejoindre les Avengers. Depuis lors, il est devenu un membre clé<br> de l'équipe et a joué un rôle important dans de nombreuses histoires.<br><br>

Tout au long de son parcours, Hawkeye a affronté de nombreux ennemis, y compris son propre frère, Barney Barton, alias Trickshot, qui est devenu un adversaire récurrent. Hawkeye a également eu des conflits avec Swordsman, qui a été à la fois son mentor et son ennemi.<br><br>

En plus de ses aventures avec les Avengers, Hawkeye a eu des histoires en solo qui ont exploré son passé et ses motivations. Il est souvent décrit comme un héros déterminé, doté d'un fort sens de la justice, mais avec un penchant pour la bravade et l'humour.<br><br>

Au fil des années, Clint Barton a été impliqué dans des événements majeurs de l'univers Marvel, tels que la Guerre Kree-Skrull, la Guerre civile des super-héros et l'Avengers Disassembled. Il a également eu des moments de partenariat et de romance avec Natasha Romanoff, alias la Veuve Noire.<br><br>

Une des périodes les plus marquantes de l'histoire d'Hawkeye est son rôle en tant que Ronin, où il a pris une identité secrète pour continuer à combattre le crime lorsque les Avengers ont été dissous. Cette phase a permis d'explorer une facette plus sombre et introspective du personnage.<br><br>


Dans l'ensemble, l'histoire d'Hawkeye dans les comics est celle d'un héros agile et habile au tir à l'arc, qui a surmonté des défis personnels et s'est élevé pour devenir un membre respecté des Avengers. Son sens de la justice, son humour et sa ténacité en font un personnage apprécié des fans de Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
