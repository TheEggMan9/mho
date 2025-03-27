<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Angel</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>ANGEL</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://upload.wikimedia.org/wikipedia/en/1/1b/X-men_angel_archangel.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Warren Kenneth Worthington III ;</li>
<li><strong>Profession(s) : </strong>Professeur, président et principal actionnaire de Worthington Industries, ancien terroriste, vigilant ;</li>
<li><strong>Famille : </strong>Warren Kenneth Worthington Jr (père, décédé), Kathryn Worthington (mère, décédée), Kenneth Worthington Sr (grand-père, décédé), Burtram (Burt) Worthington (oncle), Miriam (tante), un cousin non identifié, Elizabeth Shaw-Worthington (ancêtre à un degré inconnu, décédée) par le biais de cette dernière, il est possible que Warren Worthington III soit apparenté par un cousinage éloigné à la famille de Sebastian Shaw ;</li>  
<li><strong>Espèce : </strong>Mutant ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Capable de voler, possède des facteurs guérisseurs, utilise l'épée d’âme de l’Exilée Magik et un revolver (balles creuses remplies de gaz étourdissant) ;</li> 
<li><strong>Caractéristique(s) : </strong>Possède une double personnalité (Archangel), combat (aérien) à main nues, homme d'affaires ;</li>
<li><strong>Affiliation(s) : </strong>Membre des <a href="/heros/xmen" style="color: orange;">X-Men</a>/des Cherayafim/du Club des Damnés, ancien membre d’X-Force/des Renégats/des Mutants Sans Frontière/des Defenders/de Facteur X (et des X-Terminateurs)/des Cavaliers d’<a href="/heros/apocalypse" style="color: orange;">Apocalypse</a>, des Champions ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Apocalypse, La Confrérie des Mutants Maléfiques (groupe opposé aux idéaux des X-Men en faveur de la cohabitation pacifique entre les mutants et les humains), The helfire Club (société secrète composée de personnes influentes et riches qui manipulent les affaires mondiales), The Marauder (groupe de mercenaires mutants dirigés par <a href="/heros/misterSinister" style="color: orange;">Mister Sinister</a>), The Purifiers (groupe anti-mutant).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Warren Worthington III est né dans une famille aisée et est doté dès sa naissance de grandes ailes blanches lui permettant de voler. Il décide d'utiliser ses capacités pour le bien et devient Angel, un super-héros volant qui se bat pour la justice.<br><br>

Angel est recruté par le Professeur Charles Xavier (<a href="/heros/professorX" style="color: orange;">Professor X</a>) pour rejoindre les X-Men, une équipe de mutants qui lutte pour la coexistence pacifique entre les mutants et les humains. En tant que membre des X-Men, Angel participe à de nombreuses missions pour protéger le monde contre des menaces mutantes et humaines.<br><br>

Au fil du temps, Angel subit une transformation majeure lorsqu'il est capturé et manipulé par Apocalypse, un puissant mutant immortel. Sous l'influence d'Apocalypse, Angel est transformé en Archangel, un être doté d'ailes métalliques et d'une personnalité plus sombre et violente. En tant qu'Archangel, il lutte contre les X-Men et se débat avec sa propre dualité.<br><br>

Plus tard, Angel parvient à retrouver son état d'origine et rejoint les X-Men sous sa forme régulière. Il continue à jouer un rôle actif dans l'équipe, utilisant ses ailes et son agilité en combat aérien.<br><br>

Au cours de son parcours, Angel développe des relations amoureuses avec plusieurs personnages, notamment <a href="/heros/jeanGrey" style="color: orange;">Jean Grey</a> et <a href="/heros/psylocke" style="color: orange;">Psylocke</a>. Ces relations apportent une dimension supplémentaire à son développement en tant que personnage.<br><br>

Angel a également été impliqué dans divers événements majeurs de l'univers Marvel, tels que la saga "Dark Angel Saga" et la "Death of X", où il est confronté à des défis et à des choix difficiles.<br><br>

Au fil des années, Angel a évolué en tant que personnage, explorant des thèmes tels que l'acceptation de soi, le pouvoir de la résilience et le dépassement des épreuves personnelles. Son histoire est une partie importante de l'univers X-Men et il reste un membre respecté de l'équipe, apportant ses compétences aériennes et sa sagesse aux combats contre le mal.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
