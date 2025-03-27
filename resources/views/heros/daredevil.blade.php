<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Daredevil</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DAREDEVIL</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://static.tvtropes.org/pmwiki/pub/images/daredevil_1.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Matthew (Matt) Michael Murdock ;</li>
<li><strong>Profession(s) : </strong>Avocat, justicier ;</li>
<li><strong>Famille : </strong>Jonathan (Battling Jack) Murdock (père, décédé), Grace Murdock (mère, décédée), Milla Donovan (épouse, séparée) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Lasso-canne, sens surhumains ;</li> 
<li><strong>Caractéristique(s) : </strong>Athlète, attributs physiques surhumains, acrobate, Maîtrise tout types de sports de combat (boxe, arts martiaux...), avocat expérimenté ;</li>
<li><strong>Affiliation(s) : </strong>Les Avengers, Marvel Knights, ancien membre de la Main, ancien associé des Défenseurs, ancien partenaire de Black Widow ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Kingpin, Punisher, Gladiator (Criminel qui fabrique des armures et des gadgets sur mesure pour d'autres super-vilains), Bullseye (assassin<br> redoutable et un tireur d'élite expert), Elektra.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Matt Murdock a perdu la vue dans un accident alors qu'il était enfant. Cependant, cet événement tragique a amplifié ses autres sens, lui donnant des capacités sensorielles surhumaines. Il a développé une ouïe, un odorat, un toucher et un goût extrêmement développés, lui permettant de percevoir le monde de manière unique.<br><br>

En grandissant à Hell's Kitchen, un quartier de New York, Matt a été inspiré par son père, un boxeur nommé Jack Murdock, qui lui a enseigné la discipline et le combat. Après la mort de son père, Matt a décidé d'utiliser ses dons et ses compétences pour lutter contre le crime et protéger les innocents.<br><br>

Adoptant le nom de Daredevil, Matt a commencé à patrouiller dans les rues de Hell's Kitchen, combattant les criminels et faisant régner la justice. Il est devenu un expert en arts martiaux et a perfectionné ses compétences en utilisant ses sens améliorés pour traquer les malfrats.<br><br>

Daredevil s'est vite retrouvé face à une galerie d'ennemis redoutables, tels que le Kingpin, un puissant criminel qui contrôle le monde souterrain de New York, Bullseye, un assassin aux talents de lanceur d'objets infaillibles, et Elektra, une tueuse à gages avec qui Daredevil entretient une relation complexe.<br><br>

Au fil des années, Daredevil a été impliqué dans de nombreuses aventures, tant en solo qu'en tant que membre des Avengers et des Defenders. Il a connu des hauts et des bas dans sa vie personnelle et sa carrière de justicier, faisant face à des tragédies, des dilemmes moraux et des épreuves qui ont testé sa résilience.<br><br>

L'histoire de Daredevil explore des thèmes tels que la justice, la rédemption, la dualité et la persévérance. Matt Murdock est souvent présenté comme un avocat talentueux le jour, utilisant la loi pour aider les démunis, et comme un protecteur de la nuit, prêt à tout pour défendre les innocents.<br><br>

Daredevil est l'un des héros les plus populaires de l'univers Marvel, reconnu pour son sens de la justice, son acrobatie impressionnante et sa capacité à se battre malgré son handicap. Son histoire continue de captiver les lecteurs et de le placer parmi les grands défenseurs de l'univers Marvel.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
