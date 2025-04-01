<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Green Goblin</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>GREEN GOBLIN</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://upload.wikimedia.org/wikipedia/en/6/6c/Green_Goblin_Comic_Art_by_Luke_Ross.webp" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Norman Virgil Osborn ;</li>
<li><strong>Profession(s) : </strong>Ancien directeur du HAMMER, de l’Initiative des 50 Etats, industriel, homme d’affaires, scientifique, responsable de projet fédéral, cerveau criminel ;</li>
<li><strong>Famille : </strong>Emily Osborn (Emily Lyman, épouse), Harold (Harry) Osborn (le Bouffon vert, fils), Liz Allan-Osborn (ex-belle-fille), Norman Osborn Jr (petit-fils), Stanley Osborn (petit-fils), Gabriel Stacy (le Bouffon gris, fils, décédé), Sarah Stacy (fille), Ambrose Osborn (père, décédé), une mère non identifiée (décédée), Alton Osborn Sr (le baron voleur, arrière-grand-père paternel, décédé), Alton Osborn Jr (grand-père paternel, décédé) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, facteur guérisseur, utilise des bombes incendiaires en forme de citrouilles (capable de faire fondre de l’acieret d'autres bombes contenant du gaz ou de la fumée), des boomerangs tranchants en forme de chauve-souris, se déplace sur un planeur en forme de chauve-souris (doté de missiles à têtes chercheuses, ainsi que de mitraillettes et de lames tranchantes), porte une cotte de mailles à l’épreuve des balles, un masque qui est équipé d’un filtre pour les gaz et autres substances toxiques pouvant être inhalées, qui le protège, entre autres, de ses propres armes à gaz ;</li> 
<li><strong>Caractéristique(s) : </strong>Persévérant, extrêmement intelligent, doué en mathématique et en Chimie, stratège et tacticien hors pair ;</li>
<li><strong>Affiliation(s) : </strong>Membre de l’Elite, du Club des Damnés, allié de JANUS, directeur de l’Institut Ravencroft, ancien membre de l’Armée du Bouffon, du Culte de Knull, de la Nation Bouffon, des Dark Avengers, de la Cabale, des Sinister Six, ancien chef de la Cabale des Scriers/l’Ordre du Bouffon, ancien président d’Oscorp Industries/Alchemax, ancien directeur du HAMMER, de l’Initiative, des Thunderbolts, membre associé de la Commission aux Activités Surhumaines, fondateur et ancien chef des Sinister Twelve, des Dark X-Men, ancien employeur des Enforcers, ancien propriétaire du Daily Bugle, ancien partenaire de Mendel Stromm, du premier Maître du crime, du Dr Octopus ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Spider-Man, Spider-Woman, les Avengers, les X-Men.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
 Norman Osborn est le fondateur et le dirigeant de la société Oscorp, une entreprise spécialisée dans la recherche scientifique et technologique.<br><br>

Au fil des années, Norman Osborn développe une obsession envers Spider-Man et décide de devenir un super-vilain pour le combattre. Utilisant des substances chimiques expérimentales, il se transforme en une version améliorée de lui-même, connue sous le nom de Bouffon Vert. Revêtu d'un costume vert distinctif, équipé de gadgets et pilotant un planeur, le Bouffon Vert se lance dans une série de crimes et de complots visant à détruire Spider-Man et à assouvir son désir de pouvoir.<br><br>
  
Le Bouffon Vert utilise ses capacités surhumaines, sa force accrue, son agilité, sa résistance et son intelligence supérieure pour se battre contre Spider-Man. Il utilise également des armes spéciales, telles que des bombes citrouilles explosives et des gantelets à griffes tranchantes.<br><br>

Au cours de ses confrontations avec Spider-Man, le Bouffon Vert a un impact significatif sur la vie de Peter Parker (Spider-Man). Il découvre l'identité secrète de Peter et menace sa famille et ses proches. Leur rivalité atteint des sommets dramatiques lorsque le Bouffon Vert tue la petite amie de Peter, Gwen Stacy, provoquant un tournant majeur dans l'histoire de Spider-Man.<br><br>

L'histoire du Bouffon Vert est marquée par des moments de folie, de manipulation et de tragédie, dépeignant Norman Osborn comme un ennemi coriace. Son influence s'étend également au-delà de Spider-Man, puisqu'il est souvent impliqué dans des conflits avec d'autres super-héros de l'univers Marvel.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
