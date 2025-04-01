<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Destroyer</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DESTROYER</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://comicvine.gamespot.com/a/uploads/scale_medium/11/117763/3284507-1860788-mightythor006cover_col.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Destroyeur ;</li>
<li><strong>Profession(s) : </strong>Destructeur, arme d’Odin, ancien héraut de Galactus ;</li>
<li><strong>Famille : </strong>Odin (créateur), les Nains de Nidavellir (créateurs), le Grand Aréopage (créateur) ;</li>  
<li><strong>Espèce : </strong>Entité asgardienne ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, peut émettre des rayons d'énergie destructeurs à partir de ses yeux et de ses mains, vol, facteur guérrisseur, capable d'influencer les esprits des autres et de les manipuler à sa volonté ;</li> 
<li><strong>Caractéristique(s) : </strong>Le Destroyer est programmé pour détruire ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre des Hérauts de Galactus ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Le Destroyer est souvent confronté aux adversaires de Thor et d'Asgard.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Le Destroyer est une puissante armure mystique créée par Odin, le roi d'Asgard, en utilisant une magie ancestrale et des connaissances mystiques. L'armure est faite d'un métal indestructible et possède des pouvoirs et des capacités extraordinaires. L'armure a été conçue dans le but de servir d'arme de dernier recours pour protéger Asgard et ses habitants contre les menaces les plus redoutables.<br><br>

Le Destroyer n'est pas une entité vivante, mais plutôt une armure inanimée qui doit être animée par une énergie vitale. L'essence vitale d'un individu peut être transférée dans l'armure, lui donnant ainsi une conscience et une volonté propres. Cependant, celui dont l'essence vitale est utilisée se retrouve dans un état catatonique ou contrôlé par la programmation de destruction du Destroyer.<br><br>

Le rôle du Destroyer est de protéger Asgard des menaces. Il est souvent utilisé dans les moments de grande crise, lorsque les forces conventionnelles ne suffisent pas à repousser les ennemis. Le Destroyer est connu pour sa force surhumaine, son endurance et sa durabilité, sa capacité à projeter des rayons d'énergie destructeurs, ainsi que sa capacité de vol.<br><br>

Bien que le Destroyer ne possède pas d'ennemis récurrents spécifiques qui lui sont exclusivement liés, il est souvent confronté aux ennemis de Thor et d'Asgard, tels que Loki et d'autres forces maléfiques qui menacent la paix et la sécurité du royaume.<br><br>

Le Destroyer est un symbole de pouvoir et de protection, utilisé lorsque les circonstances l'exigent. Son rôle et son apparence peuvent varier en fonction des histoires et des scénarios, mais il reste un élément emblématique de l'univers de Thor et d'Asgard.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
