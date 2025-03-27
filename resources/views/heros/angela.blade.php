<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Angela</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>ANGELA</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://alchetron.com/cdn/angela-comics-3f5796c1-4cd3-4d89-974d-033e967b67f-resize-750.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Angéla ;</li>
<li><strong>Profession(s) : </strong>Guerrière, tueuse ;</li>
<li><strong>Famille : </strong>Présumé (dans certains comics) fille d'<a href="/heros/odin" style="color: orange;">Odin</a> et de Frigga, demi-soeur de <a href="/heros/thor" style="color: orange;">Thor</a> et de <a href="/heros/loki" style="color: orange;">Loki</a> ;</li>  
<li><strong>Espèce : </strong>Asgardienne ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Immortelle, possède une force surhumaine, peut voler, posède une épee et une hache à doubles lames ;</li> 
<li><strong>Caractéristique(s) : </strong>Combattante redoutable, manie les armes blanches ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Anges/des <a href="/heros/gardiensDeLaGalaxie." style="color: orange;">Gardiens de la Galaxie</a> et des Asgardiens de la Galaxie ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/malekith" style="color: orange;">Malekith</a>, <a href="/heros/hela" style="color: orange;">Hela</a>, <a href="/heros/sutur" style="color: orange;">Surtur</a>.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Dans l'univers Marvel, Angela est révélée être une guerrière asgardienne, la fille d'Odin et une demi-sœur de Thor et Loki. Elle fait ses débuts dans l'événement crossover "Age of Ultron", où elle se retrouve mêlée à une bataille contre <a href="/heros/ultron" style="color: orange;">Ultron</a>.<br><br>

Par la suite, Angela devient un personnage important de l'univers cosmique de Marvel. Elle rejoint les Gardiens de la Galaxie et les Asgardiens de la Galaxie, où elle participe à des missions pour protéger l'univers contre des menaces intergalactiques.<br><br>

Au fil de son parcours, Angela développe des relations avec d'autres personnages, notamment avec <a href="/heros/gamora" style="color: orange;">Gamora</a> et <a href="/heros/nebula" style="color: orange;">Nebula</a> des Gardiens de la Galaxie. Elle se retrouve également confrontée à des ennemis puissants tels que Malekith, Hela et Surtur.<br><br>

Angela a également été impliquée dans des événements majeurs de l'univers Marvel, comme la saga "War of the Realms", où elle joue un rôle essentiel dans la défense d'Asgard contre les forces de Malekith.<br><br>

En plus de ses aventures dans l'espace, Angela a également eu des interactions avec d'autres héros Marvel, notamment lors de rencontres avec des <a href="/heros/xmen" style="color: orange;">X-Men</a> et des <a href="/heros/avengers" style="color: orange;">Avengers</a>.<br><br>

Il est à noter que l'histoire d'Angela continue d'évoluer et de se développer au fil des nouvelles parutions de comics, avec de nouvelles révélations, alliances et confrontations qui ajoutent de la complexité à son parcours en tant que guerrière asgardienne.
</p> <!--histoire-->  
</p>    
  </div>
</div>
</body>
</html>
