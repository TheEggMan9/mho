<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Heimdall</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>HEIMDALL</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/474x/59/3f/3d/593f3dce7e3cbe5f1ec78860707976b3.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Heimdall ;</li>
<li><strong>Profession(s) : </strong>Gardien et sentinelle d’Asgard et d’Asgardia ;</li>
<li><strong>Famille : </strong>Lady Sif (sœur) ;</li>  
<li><strong>Espèce : </strong>Asgardiens ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, sens extrêmement aiguisés (supérieurs à ceux des humains et des Asgardiens), capable d'observer des événements qui se déroulent à des kilomètres de distance, possède une épée ;</li> 
<li><strong>Caractéristique(s) : </strong>Guerrier expérimenté, redoutable combattant à mains nues, manie une grande variété d’armes (épées, lances, haches...) ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Asgardiens ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Loki, Surtur, Malekith.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Heimdall est l'un des Asgardiens, une race de dieux nordiques qui réside à Asgard. Il est connu comme le gardien vigilant de Bifrost, le pont arc-en-ciel qui relie Asgard aux autres royaumes. Heimdall possède des sens surhumains qui lui permettent de voir et d'entendre à des distances extrêmes, rendant impossible la traversée du Bifrost sans qu'il ne le remarque.<br><br>

Au sein des Comics, Heimdall est un allié fidèle de Thor et des autres Asgardiens, jouant un rôle essentiel dans la protection d'Asgard et la défense des Neuf Royaumes contre les menaces. Sa position de gardien du Bifrost lui confère une grande importance et une connaissance étendue des événements se déroulant dans l'univers.<br><br>

Heimdall a souvent été impliqué dans des batailles épiques contre des ennemis puissants tels que Loki, Surtur, Malekith et d'autres adversaires cosmiques. Son rôle est généralement celui d'un protecteur vigilant, utilisant ses sens aiguisés et ses talents martiaux pour défendre Asgard et ses habitants.<br><br>

Au fil des ans, Heimdall a été représenté comme un personnage loyal, courageux et honorable, prêt à tout pour protéger son royaume et ses alliés. Il a également été impliqué dans des événements majeurs de l'univers Marvel, tels que l'invasion des Dark Elves et les conflits cosmiques impliquant les Avengers.<br><br>

En résumé, Heimdall est le gardien d'Asgard, possédant des sens surhumains et jouant un rôle crucial dans la protection du Bifrost et d'Asgard. Il est un allié fidèle de Thor et des Asgardiens, et il a affronté de nombreux ennemis puissants tout en défendant les Neuf Royaumes. Sa loyauté, son courage et sa vigilance en font un personnage emblématique de l'univers Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
