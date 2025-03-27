<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Bishop</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>BISHOP</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://mbd-world.de/wp-content/uploads/2017/05/Bishop2.png" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Lucas Bishop ;</li>
<li><strong>Profession(s) : </strong>Exterminateur, auteur de génocides, ancien officier de police et officier de la Xavier Security Enforcers ;</li>
<li><strong>Famille : </strong>Gateway (arrière-grand-père), une grand-mère non identifiée (probablement prénommée Aliyah), Shard (sœur, décédée) ; Aliya Bishop (fille, dans un futur alternatif) ;</li>  
<li><strong>Espèce : </strong>Mutant ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Possède un bras cybernétique (alimenté par l’énergie nucléaire et comporte de nombreux armements comme un revolvers (ou tout types d'armes à feu), un système de voyage temporel, peut canaliser l’énergie émise par Bishop et lui confère une force et une résistance surhumaines) ;</li> 
<li><strong>Caractéristique(s) : </strong>Combat armées et à mains nues, excellent tireur (armes à feu), excellent ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre de l’Ordre, ancien partenaire de Stryfe, ancien membre du Département de Police de New York, du F.B.I., de l’O.N.E., des <a href="/heros/xmen" style="color: orange;">X-Men</a>, de l’X-Treme Sanctions Executive, des X-Treme X-Men, des Douze, des Xavier Security Enforcers ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Trevor Fitzroy (mutant doté de pouvoirs liés au voyage temporel et à la manipulation de l'énergi), Stryfe, <a href="/heros/omegaRed" style="color: orange;">Omega Red</a>, Deathbird ( extraterrestre Shi'ar, capacités physiques améliorées propres à sa race, notamment une force, une endurance et une agilité supérieures à celles des humains), Fiztroy Chronal Raiders (goupe de crminels mutants voyageurs temporels).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Bishop, de son vrai nom Lucas Bishop, est un mutant originaire d'un futur alternatif où les mutants sont persécutés et opprimés. Il a été envoyé dans le passé pour prévenir un futur désastreux et changer le cours des événements. Bishop est doté de pouvoirs de manipulation de l'énergie, ce qui lui permet de créer et de contrôler des boules d'énergie explosives.<br><br>

Arrivant à l'époque actuelle, Bishop rejoint les X-Men et devient un membre actif de l'équipe. Il est souvent présenté comme un personnage robuste, stoïque et déterminé, prêt à tout pour préserver le futur et protéger les mutants.<br><br>

Au cours de son parcours, Bishop s'est retrouvé impliqué dans de nombreux événements majeurs de l'univers Marvel, notamment l'histoire de "Days of Future Past" où il a joué un rôle crucial dans la prévention d'un avenir sombre pour les mutants. Il a également été impliqué dans des conflits avec des ennemis tels que Trevor Fitzroy, Stryfe et Omega Red.<br><br>

En tant que voyageur temporel, Bishop a souvent été confronté à des dilemmes moraux et a dû faire face à des choix difficiles pour préserver l'intégrité de la chronologie et protéger les mutants. Son passé tragique et son lien étroit avec son futur lui ont conféré une détermination inébranlable.<br><br>

Bishop a également été membre des X-Force et des Uncanny X-Force, travaillant avec d'autres mutants pour faire face à des menaces importantes. Son rôle en tant que gardien du temps et protecteur des mutants a été essentiel dans de nombreuses batailles et missions.<br><br>

Au fil des années, Bishop a développé des liens étroits avec plusieurs membres des X-Men, en particulier Cable, qui est également un voyageur temporel. Leur relation a été à la fois amicale et conflictuelle, mais ils ont souvent travaillé ensemble pour prévenir des catastrophes imminentes.<br><br>

L'histoire de Bishop est marquée par son désir de justice et de préservation du futur, ainsi que par ses luttes personnelles avec son passé et sa quête de rédemption. Son rôle en tant que mutant voyageur temporel en a fait un personnage unique et important dans l'univers des X-Men.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
