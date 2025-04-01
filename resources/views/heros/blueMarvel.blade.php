<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Blue Marvel</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>BLUE MARVEL</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://pm1.aminoapps.com/6730/40595e435c02c44617e930267aafc61bcd1418b4v2_00.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Adam Bernard Brashear ;</li>
<li><strong>Profession(s) : </strong> Professeur de physique, aventurier, ancien Marine;</li>
<li><strong>Famille : </strong>Marlene Frazier (Candace Brashear, Agent 314, épouse, décédée), Max Brashear (fils), Kevin Brashear (fils), Adrienne Brashear (fille) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, peut survivre dans le vide de l’espace ou au cœur d’une explosion nucléaire, vol, invulnérabilité quasi totale, concentre<br> une partie de son énergie sous la forme de décharges énergétiques ou expulse d’immenses quantités d’énergie au travers de puissantes explosions  ;</li> 
<li><strong>Caractéristique(s) : </strong>ingénieur doué, spécialisé dans les formes d’énergies rares, diplômé en physique théorique et en ingénierie électrique,  ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre des Ultimates, des Avengers, des Puissants Avengers des années 1970, du Corps des Marines des Etats-Unis ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Anti-Man(ancien allié), Brashear (son fils).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Adam Brashear était un scientifique exceptionnellement brillant et un athlète accompli. Pendant la Guerre froide, il a été choisi pour participer à un projet secret du gouvernement américain appelé le Projet Pegasus. Lors d'une expérience visant à créer une source d'énergie illimitée, Brashear a été exposé à une énergie anti-matière appelée l'énergie d'Uranie.<br><br>

Cette exposition lui a conféré des pouvoirs incroyables, y compris une force, une endurance et une vitesse surhumaines. Il a également acquis la capacité de manipuler les champs d'énergie, ce qui lui permet de voler et de générer des rayons d'énergie. Sous l'identité de Blue Marvel, il a commencé à combattre le crime et à défendre la justice.<br><br>

Blue Marvel est rapidement devenu l'un des héros les plus puissants de l'univers Marvel. Cependant, malgré ses succès, il a été contraint de prendre sa retraite après que son existence ait été révélée au grand public. Ses pouvoirs étaient considérés comme trop dangereux et potentiellement menaçants pour la sécurité nationale.<br><br>

Des années plus tard, Blue Marvel est rappelé à l'action lorsqu'une menace extraterrestre appelée Anti-Man menace la Terre. Il rejoint les Avengers et d'autres héros pour combattre cette menace. Au fil du temps, Blue Marvel est redevenu un membre actif de la communauté des super-héros et a participé à de nombreuses missions pour sauver le monde.<br><br>

Malgré ses pouvoirs impressionnants, Blue Marvel est confronté à des défis personnels et à des dilemmes moraux. Il doit concilier ses responsabilités en tant que super-héros avec sa vie personnelle et les conséquences de ses actions. Son histoire explore des thèmes tels que l'héritage, la discrimination et les sacrifices nécessaires pour protéger ceux qu'il aime.<br><br>

Blue Marvel est un personnage puissant, dont l'histoire continue de se développer et d'évoluer dans l'univers Marvel. Sa présence apporte une perspective unique sur les questions de pouvoir, de responsabilité et de justice.





</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
