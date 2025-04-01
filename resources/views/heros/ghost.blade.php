<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ghost</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>GHOST</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://comicvine.gamespot.com/a/uploads/original/0/5586/135798-139170-ghost.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>John Morley ;</li>
<li><strong>Profession(s) : </strong>Saboteur industriel indépendant, ancien homme d’affaires ;</li>
<li><strong>Famille : </strong>Inconnue ;</li>  
<li><strong>Espèce : </strong>Humain ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Porte un uniforme de combat qui lui permet de devenir invisible ou intangible ,possède un taser/des revolvers/des explosifs et des drones ;</li> 
<li><strong>Caractéristique(s) : </strong>Inventeur doué, expert en ingénierie et en informatique ;</li>
<li><strong>Affiliation(s) : </strong> Ancien membre du gang de Black Cat, des Thunderbolts ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Iron Man, Ant Man, Hawkeye, Black Widow, les Avengeurs.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Le passé de John Morley est généralement peu exploré, mais il est connu pour être un expert en ingénierie et en informatique. Utilisant ses compétences techniques avancées, il est devenu un redoutable hacker et un manipulateur de la technologie. Il a adopté l'identité du Fantôme, un individu masqué et insaisissable, pour commettre des crimes et perturber les entreprises et les organisations puissantes.<br><br>

Le Fantôme est connu pour sa capacité à devenir intangible, lui permettant de traverser les objets solides, et à devenir invisible. Il utilise ces capacités pour échapper à la capture et à la détection, et pour causer des ravages parmi ses ennemis. Il est également un expert en technologie de pointe, capable de pirater des systèmes informatiques complexes et de manipuler des appareils électroniques.<br><br>

Le Fantôme est souvent présenté comme un antagoniste impitoyable et déterminé, cherchant à défier les entreprises corrompues et à déstabiliser les figures de pouvoir. Ses motivations peuvent varier, allant de la vengeance personnelle à la lutte pour la justice selon les interprétations des différentes histoires.<br><br>

Il est apparu pour la première fois dans les pages d'Iron Man et a affronté à plusieurs reprises le héros milliardaire. Au fil des années, le Fantôme est devenu un adversaire récurrent dans les histoires liées à Iron Man et a également croisé le chemin d'autres super-héros de l'univers Marvel.<br><br>

L'histoire du Fantôme se concentre souvent sur ses capacités technologiques avancées et son statut d'énigme complexe. Les détails de son passé et de sa famille sont généralement laissés volontairement flous, ce qui ajoute à son mystère et à son aura de super-vilain insaisissable.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
