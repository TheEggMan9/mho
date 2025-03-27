<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Groot</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>GROOT</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://www.g-mart.com/static/f141521.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Groot ;</li>
<li><strong>Profession(s) : </strong>Aventurier, agent gouvernemental, chercheur ;</li>
<li><strong>Famille : </strong>Inconnue ;</li>  
<li><strong>Espèce : </strong>Flora colosssus (Colosse Floral) ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Capable d’absorber le bois et d’autres végétaux (afin de soigner ses blessures, de se régénérer entièrement ou accroître sa force), contrôle les arbres pour attaquer ses ennemis, résiste au feu, peut accroître sa taille et sa masse en poussant ;</li> 
<li><strong>Caractéristique(s) : </strong>Loyal, bienveillant, sens du sacrifice, communique principalement en disant "Je suis Groot" ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre des Gardiens de la Galaxie, ancien membre du commando de Starlord, ancien membre des Howling Commandos du SHIELD, du zoo du Collectionneur ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Thanos, Ronan l'Acusateur, Nebula, les Ravageurs, la Fraternité Universelle (organisation criminelle intergalactique).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Dans sa forme moderne, Groot est un Flora colossus, une espèce d'arbre humanoïde originaire de la planète X (ou Flora). Il communique principalement en disant "Je suis Groot", bien que cette phrase puisse transmettre une variété de significations en fonction du contexte.<br><br>

Groot a rejoint les Gardiens de la Galaxie, un groupe de héros interstellaires, pour lutter contre les menaces qui pèsent sur l'univers. Il est souvent représenté aux côtés d'autres membres tels que Star-Lord, Gamora, Drax le Destructeur et Rocket Raccoon.<br><br>

Au cours de leurs aventures, Groot a participé à de nombreuses missions périlleuses, combattant des ennemis redoutables tels que Thanos, Ronan l'Accusateur et les Badoon (race extraterrestre conquérante). Son incroyable force physique, sa capacité de régénération et sa connexion avec la nature en font un atout précieux pour l'équipe.<br><br>

Groot est également connu pour son amitié étroite avec Rocket Raccoon, un raton laveur génétiquement modifié et expert en armes. Les deux forment un duo insolite mais solide, avec Groot jouant souvent le rôle protecteur et bienveillant envers Rocket.<br><br>

L'histoire de Groot a été marquée par des moments dramatiques, notamment sa mort héroïque lors de l'événement "Annihilation" en 2006, où il s'est sacrifié pour sauver ses coéquipiers. Cependant, grâce à sa capacité de régénération, il est revenu sous une nouvelle forme, plus jeune et plus petit, connue sous le nom de "Baby Groot".<br><br>

Groot continue de faire partie intégrante des aventures cosmiques des Comics, en explorant de nouveaux mondes, en défendant l'univers et en inspirant les autres par sa loyauté, sa sagesse et son altruisme.





</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
