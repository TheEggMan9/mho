<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Devil Dinosaur</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DEVIL DINOSAUR</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://m.media-amazon.com/images/I/61j5zScYYyL.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Devil ;</li>
<li><strong>Profession(s) : </strong>Chasseur ;</li>
<li><strong>Famille : </strong>une mère non identifiée (décédée), deux membres de sa fratrie non identifiés (décédés), Moon Boy (frère par adoption) ;</li>  
<li><strong>Espèce : </strong>Dinosaure ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, insensible aux balles, resistant aux impacts et à la chaleur, vision nocturne ;</li> 
<li><strong>Caractéristique(s) : </strong>Maître tacticien, possède des griffes et une machoire puissante ;</li>
<li><strong>Affiliation(s) : </strong>Partenaire de Moon Boy, ancien membre des Egarés, du Cirque Tiboldt (ou Cirque infernal) ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Snowfang (créature surnaturelle, mi-loup, mi-yéti), the Thunder-horn (Triceratops mutant), Red Dinosaur (Tyrannosaurus rex rouge, qui a des<br> similitudes physiques avec Devil Dinosaur), le clan du feu (groupe de tribus humaines vivant dans la Terre sauvage, qui maîtrisent le feu et utilisent cette capacité pour attaquer Devil Dinosaur et Moon-Boy).</li>
<br>


<h2><u>Histoire</u></h2> 
<p class="centrer">
L'histoire de Devil Dinosaur commence dans la Terre sauvage, une région préhistorique isolée où coexistent des dinosaures, des créatures primitives et des tribus humaines. Devil Dinosaur est un Tyrannosaurus rex rouge vif, l'un des derniers de son espèce, doté d'une intelligence supérieure à celle des autres dinosaures.<br><br>

Dans cette contrée dangereuse, Devil Dinosaur rencontre Moon-Boy, un jeune membre de la tribu des "Hairy Hominids" (êtres ressemblant à des hommes des cavernes), qui devient son ami et compagnon. Ensemble, ils font équipe pour survivre et se défendre contre les nombreux dangers de la Terre sauvage.<br><br>

Au cours de leurs aventures, Devil Dinosaur et Moon-Boy doivent faire face à plusieurs ennemis récurrents tels que le Killer-Folk, une tribu hostile qui considère les deux héros comme des intrus à éliminer. Ils doivent également affronter des créatures redoutables, comme Snowfang, un loup-yéti surnaturel, et The Thunder-Horn, un Triceratops mutant.<br><br>

Leur histoire est marquée par des combats féroces, des poursuites palpitantes et des moments de solidarité entre Devil Dinosaur et Moon-Boy. Ils parviennent souvent à se sortir des situations périlleuses grâce à leur intelligence, leur force et leur détermination.<br><br>

Devil Dinosaur est bien plus qu'un simple dinosaure, il est un symbole de bravoure et de loyauté, protégeant Moon-Boy et les autres habitants de la Terre sauvage contre les menaces qui pèsent sur eux. Leur lien indéfectible et leur volonté de défendre les plus faibles font d'eux une équipe formidable, prête à affronter tous les défis qui se dressent sur leur chemin.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
