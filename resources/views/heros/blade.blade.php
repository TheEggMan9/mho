<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Blade</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>BLADE</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://images.comicbooktreasury.com/wp-content/uploads/2022/04/Blade-Reading-Order-705x470.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Eric Brooks ;</li>
<li><strong>Profession(s) : </strong>Chasseur de vampires ;</li>
<li><strong>Famille : </strong>Tara Cross (mère, décédée), Lucas Cross (père), Zukajaa (progéniture avec Cilla) ;</li>  
<li><strong>Espèce : </strong>Vampire ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Utilise des armes à feu automatiques ou semi-automatiques, une épée et autres lames en titane, une armure de combat en kevlar, possède des attributs physiques surhumains, des facteurs guérisseurs, immunisé contre les morsures de vampire, veillissement ralenti ;</li> 
<li><strong>Caractéristique(s) : </strong>maître en arts martiaux et en armement ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre des <a href="/heros/avengers" style="color: orange;">Avengers</a>, du MI-13, du Vanguard, du <a href="/heros/shield" style="color: orange;"></a>S.H.I.E.L.D, des Howling Commandos du S.H.I.E.L.D, des chasseurs de vampires de Noah van Helsing, de Quincy Harker, d’Orji Jones, de Silvereye, des Nightstalkers/Borderline Investigations, des <a href="/heros/midnightSons" style="color: orange;">Midnight Sons</a> , des Neuf, du trio King, Drake & Blade, du gang des Bloodshadows ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Deacon Frost (vampire), <a href="/heros/dracula" style="color: orange;"></a>Dracula, Marcus Van Sciver (vampire aristocratique), Varnae (présenté comme le tout premier vampire de l'univers Marvel), Baron Blood (aristocrate britannique transformé en vampire).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Eric Brooks est né à Londres, en Angleterre, en 1929. Sa mère a été mordue par un vampire (Deacon Frost) peu de temps avant sa naissance, ce qui lui a transmis des propriétés spéciales. À la suite de cette morsure, Eric est né avec des capacités améliorées et une immunité partielle à la morsure de vampire.<br><br>

Élevé dans les quartiers difficiles de Londres, Eric a été formé par le chasseur de vampires Jamal Afari à devenir un chasseur de vampires lui-même. Il a appris à maîtriser les arts martiaux, les armes blanches et les techniques de combat spécifiques aux vampires.<br><br>

En tant que chasseur de vampires, Blade est déterminé à éliminer les vampires et à protéger l'humanité des créatures de la nuit. Il est motivé par la vengeance contre Deacon Frost, le vampire responsable de la mort de sa mère.<br><br>

Blade a parcouru le monde, combattant les vampires et d'autres créatures surnaturelles. Il a rejoint des équipes de super-héros tels que les Avengers et les Midnight Sons, collaborant avec d'autres héros pour lutter contre les forces du mal.<br><br>

L'une des caractéristiques les plus emblématiques de Blade est sa maîtrise de l'épée et son utilisation d'armes spécialisées pour combattre les vampires. Son arsenal comprend des épées en argent et des gadgets technologiques conçus pour affaiblir les créatures surnaturelles.<br><br>

Au fil des années, Blade est devenu une figure respectée et crainte parmi les vampires, qui connaissent sa réputation de tueur impitoyable. Il a également dû faire face à des défis personnels, tels que sa propre lutte pour retenir sa soif de sang et maintenir son humanité.<br><br>

L'histoire de Blade est marquée par ses combats acharnés contre les vampires, sa recherche de justice et son désir de protéger les innocents contre les forces obscures. Il incarne un héros sombre et implacable, prêt à tout sacrifier pour éliminer le mal surnaturel.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
