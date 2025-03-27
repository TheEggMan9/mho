<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dracula</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DRACULA</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://townsquare.media/site/622/files/2010/07/fakedracula.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Vlad III Tepes Dracula ;</li>
<li><strong>Profession(s) : </strong>Seigneur des Vampires, ancien Prince (Voïvode) de Transylvanie et de Valachie (Roumanie contemporaine) ;</li>
<li><strong>Famille : </strong>Vlad II Dracul (Vlad l’Ancien, père, décédé) ; Mircéa, Radu le Bel (frères, décédés) ; le Prince Basarab Ier le Grand (ancêtre, décédé), le Prince Mircea l’Ancien (grand-père, décédé), Stephen Bathory (cousin, décédé), Zofia, Maria (épouses, décédées) ; Domini (épouse, séparée) ; Vlad Tépulus (fils, décédé), Janus (fils), Lilith (fille), Frank Drake (descendant via Vlad Tépulus) ;</li>  
<li><strong>Espèce : </strong>Vampire ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, reflexes surhumains, immunisé contre le vieillissement/les maladies classiques et la plupart des formes de blessures, peut contrôler les autres d’un simple regard ou après avoir bu leur sang, contrôler les animaux tels que les rats/les chauve-souris et les loups, commander les autres vampires, peut se transformer lui-même en chauve-souris/en loup ou en brume, peut provoquer des orages,  ;</li> 
<li><strong>Caractéristique(s) : </strong>Redoutable combattant, escrimeur doué, spécialisé dans la stratégie et les arts de la guerre du quinzième siècle, doit boire régulièrement le sang d’humains vivants afin de survivre, vulnérable à l’argent/à l’ail/à la lumière du solei/à un pieu en bois perçant son cœur et aux symboles religieux, ne jette aucun reflet sur les miroirs, ne peut pas entrer dans une maison sans y avoir été invité et dans toutes les circonstances où il fut apparemment détruit, Dracula a réussit à revenir à la vie d’une manière ou d’une autre ;</li>
<li><strong>Affiliation(s) : </strong>Seigneur des Vampires, ancien membre de la Légion des Morts-vivants, Dracula a employé de nombreux humains et vampires comme agents (les Enfants de la nuit, les Epouses de Dracula, les Darkholders, la Légion des Damnés, la Légion du Destin, l’Ordre du Dragon...) ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Abraham Van Helsing (célèbre chasseur de vampires), Blade, Frank Drake (descendant de Dracula qui s'est tourné vers la chasse aux vampires), Rachel Van Helsing (descendante d'Abraham Van Helsing et poursuit la tradition familiale en combattant les vampires), Lilith (puissante vampire et une des filles de Dracula).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
L'histoire de Vlad Dracula, mieux connu sous le nom de Dracula dans les bandes dessinées Marvel, est celle d'un puissant seigneur vampire d'origine transylvanienne. Son histoire remonte à des siècles, remontant à l'époque médiévale.<br><br>

Dracula était autrefois un noble guerrier et chef de guerre. Après la mort de sa femme, il s'est tourné vers les forces des ténèbres et est devenu un vampire immortel assoiffé de sang. Au fil des siècles, Dracula a acquis de nombreux pouvoirs surnaturels, notamment une force surhumaine, une régénération rapide et la capacité de se transformer en chauve-souris, en brume et en loup.<br><br>

En tant que seigneur vampire, Dracula a bâti son empire en Transylvanie, régnant sur une horde de créatures de la nuit. Il est devenu l'un des vampires les plus redoutés et respectés du monde des comics Marvel.<br><br>

Au cours de son existence, Dracula a été confronté à de nombreux adversaires, dont certains sont devenus des ennemis récurrents. Des chasseurs de vampires tels qu'Abraham Van Helsing, Blade, Frank Drake et Rachel Van Helsing ont tous tenté de le détruire et de mettre fin à son règne de terreur.<br><br>

L'histoire de Dracula dans les bandes dessinées Marvel a été explorée dans des séries telles que "Tomb of Dracula" et d'autres titres liés aux vampires. Ses batailles contre les chasseurs de vampires, sa quête de pouvoir et son désir de survie ont été des éléments centraux de son histoire.<br><br>

Dracula a également eu des interactions avec d'autres personnages Marvel, notamment les X-Men, Spider-Man et les Avengers. Son influence et sa présence sinistre se sont étendues au-delà de la Transylvanie, et il a continué à semer la terreur dans le monde entier.<br><br>

L'histoire de Dracula dans les bandes dessinées Marvel est celle d'un vampire puissant, cherchant à étendre son pouvoir et à satisfaire sa soif de sang, tout en étant confronté à des adversaires déterminés à l'arrêter.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
