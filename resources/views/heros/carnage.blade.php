<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Carnage</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>CARNAGE</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://www.excalibur-comics.fr/15673-large_default/carnage-tome-1.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Cletus Kasady ;</li>
<li><strong>Profession(s) : </strong>Ancien tueur en série, patient du Ravencroft Institute, prisonnier ;</li>
<li><strong>Famille : </strong>Parents non identifiés (décédés), une grand-mère non identifiée (décédée), Venom (Eddie Brock, père symbiotique), Toxin (Pat Mulligan, fils symbiotique) ; Hybride, Scream et divers symbiotes non identifiés portés par Trevor Cole, Leslie Gesneria, Ramon Hernandez, Carl Mach (frères et sœurs symbiotique) ;</li>  
<li><strong>Espèce : </strong> Symbiote;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, facteur guérisseur, créer des lassos qui lui permettent d’attraper et entraver ses adversaires, doté<br> de griffes longues et extrêmement tranchantes, projete ces créations en forme de lames/de haches/d’épées ou autres, absorbe les impacts des balles des armes à feu conventionnelles, peut imiter l’apparence de n’importe quel vêtement afin de se camoufler dans un environnement, faculté de voir par toutes les parties de son corps ;</li> 
<li><strong>Caractéristique(s) : </strong>Vulnérable aux attaques soniques et aux flammes ;</li>
<li><strong>Affiliation(s) : </strong>Ancien chef de la Famille Carnage ;</li>
<li><strong>Ennemi(s) rerécurrent(s) : </strong>Spider-Man, Venom.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
L'histoire de Carnage commence avec Cletus Kasady, un dangereux meurtrier en série. Alors qu'il était incarcéré dans la même prison que Eddie Brock, l'hôte de Venom, un morceau du symbiote Venom s'est séparé et a fusionné avec Cletus, donnant naissance à Carnage.<br><br>

Carnage est un symbiote encore plus puissant et instable que Venom. Il possède une force surhumaine, une agilité et une vitesse accrues, ainsi que la capacité de se régénérer rapidement. De plus, Carnage a la particularité de pouvoir étendre son symbiote sous forme d'armes tranchantes, ce qui en fait un adversaire redoutable.<br><br>

Dès le début, Carnage s'est lancé dans une série de meurtres et de massacres, semant le chaos partout où il allait. Son objectif principal est de répandre le carnage et la destruction, sans aucun remords ni limite. Il n'a aucune valeur pour la vie humaine et prend plaisir à voir les autres souffrir.<br><br>

Spider-Man est l'un des premiers à se confronter à Carnage. Ils ont eu de nombreux affrontements brutaux, avec Spider-Man tentant désespérément d'arrêter les actes de violence de Carnage. Venom, qui a une histoire liée à Carnage, est également devenu un ennemi récurrent de ce symbiote meurtrier, cherchant à l'arrêter à tout prix.<br><br>

Au fil des ans, Carnage a également croisé le chemin de nombreux autres héros Marvel, tels que Deadpool, Wolverine et les membres des Avengers, qui ont tous tenté de mettre fin à sa folie meurtrière.<br><br>

L'histoire de Carnage est marquée par des moments de destruction, de violence et de chaos. Il représente une véritable menace pour l'humanité et est considéré comme l'un des adversaires les plus redoutables de l'univers Marvel. Son histoire est une lutte constante entre les héros qui cherchent à l'arrêter et la sauvagerie dévastatrice de Carnage lui-même.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
