<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Baron Mordo</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>BARON MORDO</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://comicvine.gamespot.com/a/uploads/original/0/3739/141122-154706-baron-mordo.JPG" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Karl Amadeus Mordo ;</li>
<li><strong>Profession(s) : </strong>Prétendu conquérant, ancien disciple mystique ;</li>
<li><strong>Famille : </strong>Nikolaï Mordo (père, décédé), Sara Krowler Mordo (mère, décédée), Heinrich Krowler (grand-père, décédé), Lilia (demi-sœur), Lilia (II) (nièce), Astrid Mordo (fille) ;</li>  
<li><strong>Espèce : </strong>Humain (Sorcier) ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Peut invoquer de puissantes entités ou d’objets mystiques, manipulee l’énergie magique ambiante de l’univers et de ses propres ressources psychique, projetter et la manipuler d’énergie, transformer la matière, l’animation des objets inanimés, se téléporter, projetter des illusions, projetter des pensées, peut faire des projections astrale, voyager vers d’autres dimensions ou d’autres époques, possession mentale ;</li> 
<li><strong>Caractéristique(s) : </strong>Puissant sorcier, maîtrise de la magie noire, connaissance approfondie des arts mystiques ;</li>
<li><strong>Affiliation(s) : </strong>Allié récurrent de <a href="/heros/dormammu" style="color: orange;">Dormammu</a>, ancien prince consort d’Umar, ancien disciple de l’<a href="/heros/ancien" style="color: orange;">Ancien</a>, ancien employeur des Laquais de Mordo, ancien membre des Agresseurs ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/doctorStrange" style="color: orange;">Doctor Strange</a>, les <a href="/heros/avengeurs" style="color: orange;">Avengeurs</a>, l'Ancien.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Le Baron Mordo, dont le vrai nom est Karl Amadeus Mordo, est un sorcier et un ennemi récurrent de Doctor Strange. Il a commencé son parcours en tant que disciple de l'Ancien, le mentor de Doctor Strange, avec qui il a étudié les arts mystiques. Cependant, Mordo a rapidement succombé à la tentation de la magie noire et a choisi de suivre un chemin sombre et corrompu.<br><br>

Mordo est devenu un rival féroce de Doctor Strange, cherchant à le surpasser et à obtenir le titre de Sorcier suprême. Il a tenté à maintes reprises de détruire Strange et de s'emparer de son pouvoir. Leur rivalité s'est intensifiée au fil des années, avec des affrontements épiques entre les deux sorciers.<br><br>

Dans ses quêtes de pouvoir, Mordo a également affronté d'autres héros tels que les Avengers, ainsi que les alliés de Doctor Strange, cherchant à éliminer tous ceux qui se dressent sur son chemin. Il a été confronté à des forces mystiques et démoniaques, s'attirant ainsi des ennemis tels que Dormammu et <a href="/heros/mephisto" style="color: orange;">Mephisto</a>.<br><br>

Malgré ses nombreux échecs, Mordo reste un adversaire redoutable, utilisant sa maîtrise de la magie noire pour manipuler les énergies mystiques et pour comploter des plans machiavéliques. Il est souvent décrit comme un individu manipulateur, rusé et prêt à tout pour parvenir à ses fins.<br><br>

Cependant, il y a eu des occasions où Mordo a été forcé de s'allier à Doctor Strange et à d'autres héros pour affronter des menaces communes plus grandes. Ces alliances sont souvent instables et de courte durée, car Mordo ne fait que poursuivre ses propres intérêts.<br><br>

L'histoire du Baron Mordo dans les comics est caractérisée par sa quête incessante de pouvoir, sa rivalité avec Doctor Strange et sa volonté de manipuler les forces mystiques à son avantage. Il reste l'un des ennemis les plus emblématiques et dangereux de l'univers Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
