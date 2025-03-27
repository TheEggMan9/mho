<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Aero</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>AERO</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/474x/5d/b6/ce/5db6ce49aa08230cba9d487ebfbd1b71.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Lei Ling ;</li>
<li><strong>Profession(s) : </strong>Architecte, agent gouvernemental ;</li>
<li><strong>Famille : </strong>Une mère non identifiée ;</li>  
<li><strong>Espèce : </strong>Humaine altérée ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>aérokinésie (produit et contrôle les vents et les courants aériens);</li> 
<li><strong>Caractéristique : </strong>Sens aiguisés, maîtrise le QI (permet d'améliorer ses capacités physiques et ses mouvements) ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Nouveaux Agents d’Atlas, du Cabinet de l’Arbre sacré ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Warping Wind (possède des pouvoirs similaires à ceux d'Aero), Masters of the Elements (groupe est composé de quatre individus, chacun représentant l'un des quatre éléments classiques : Terre, Feu, Air et Eau).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Lei Ling était une ingénieure aéronautique vivant à Shanghai. Un jour, alors qu'elle assistait à une conférence scientifique, elle fut exposée à une énergie mystique appelée le Qi du Ciel et de la Terre. Cela lui conféra des pouvoirs aérodynamiques, lui permettant de manipuler l'air et de voler. Inspirée par ses nouveaux pouvoirs, Lei Ling décida de devenir une super-héroïne pour protéger Shanghai et ses habitants.<br><br>

Rebaptisée Aero, elle rejoignit les Avengers de Shanghai, une équipe de héros chinois formée pour défendre la ville contre les menaces superpuissantes. Aux côtés de ses coéquipiers tels que <a href="/heros/wave" style="color: orange;">Wave</a>, <a href="/heros/swordMaster" style="color: orange;">Sword Master</a> et White Fox, Aero s'engagea dans des combats contre des ennemis puissants et protégea sa ville des dangers.<br><br>

Au fil de ses aventures, Aero a dû affronter des ennemis tels que la Jade Claw, une super-vilaine chinoise, ainsi que d'autres adversaires liés à des menaces internationales ou extraterrestres. Grâce à ses pouvoirs aérodynamiques et à sa maîtrise du Qi, Aero a prouvé sa valeur en tant que membre des <a href="/heros/avengers" style="color: orange;">Avengers</a> de Shanghai et est devenue une défenseuse respectée de sa ville.<br><br>

L'histoire d'Aero est toujours en évolution, et de nouveaux chapitres de son parcours continuent d'être écrits dans les comics Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
