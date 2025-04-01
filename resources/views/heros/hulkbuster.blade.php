<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Hulkbuster</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>HULKBUSTER</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://media.comicbook.com/wp-content/uploads/2013/02/hulkbuster-armor.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Type d'utilisation : </strong>Équipe ou une unité spéciale formée pour faire face à la menace de Hulk ;</li>
<li><strong>Créateur(s) : </strong>Tony Stark (alias Iron Man);</li>
<li><strong>Armement(s)/Équipement(s) : </strong>Possède une armure spéciale (conçues pour améliorer leur force, leur résistance et leurs capacités de combat. Ces armures peuvent être adaptées aux besoins spécifiques de chaque membre, offrant une protection accrue contre les attaques de Hulk), des armes énergétiques (peut inclure des fusils à énergie, des lanceurs de missiles, des canons laser ou d'autres armes à feu améliorées qui peuvent infliger des dommages importants à Hulk), un dispositif de confinement (capable de capturer et de contenir Hulk), une technologie de traque (utilise des dispositifs de suivi et de traque sophistiqués pour localiser et suivre les déplacements de Hulk. Cela peut inclure des scanners, des radars et d'autres instruments qui leur permettent de surveiller et d'anticiper les mouvements de Hulk) ;</li> 
<li><strong>Affiliation(s) : </strong>Le S.H.I.E.L.D ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Hulk, l'Abomination, le Leader, Red Hulk.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
L'origine des Hulkbusters remonte généralement au général Thaddeus "Thunderbolt" Ross, qui est le père de Betty Ross. En tant que haut gradé de l'armée et souvent obsédé par la capture et la neutralisation de Hulk,le général Ross a formé les Hulkbusters pour accomplir cette tâche.<br><br>

Les Hulkbusters sont équipés d'armures spéciales, d'armes énergétiques et de technologies avancées pour affronter le Hulk. Leur objectif principal est de contenir, capturer ou éliminer Hulk lorsque cela est jugé nécessaire pour la sécurité publique.<br><br>

Les affrontements entre les Hulkbusters et Hulk sont souvent intenses et violents. Hulk, avec sa force surhumaine et sa résistance, représente un défi de taille pour les Hulkbusters. Les combats entre les deux camps peuvent entraîner des destructions massives et des conséquences dramatiques.<br><br>

Cependant, au fil des années, certaines versions des comics ont montré une évolution dans la relation entre Hulk et les Hulkbusters. Certains membres des Hulkbusters, tels que Betty Ross ou le général Ross lui-même, ont développé des liens plus complexes avec Hulk, passant parfois de l'antagonisme à l'alliance ou à une compréhension mutuelle.<br><br>

L'histoire des Hulkbusters a été explorée dans de nombreuses séries et histoires mettant en vedette Hulk et les héros qui les affrontent. Leur rôle et leurs interactions peuvent varier en fonction des différentes versions et des époques spécifiques des comics Marvel, mais ils restent un élément important du lore entourant le personnage de Hulk.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
