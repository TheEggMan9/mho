<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Doctor Strange</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DOCTOR STRANGE</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://www.chroniquedisney.fr/imgPerso/marvel/1963-drstrange-02.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Stephen Vincent Strange ;</li>
<li><strong>Profession(s) : </strong>Sorcier suprême de la dimension terrestre, mystique, aventurier, consultant en sciences occultes, ancien shérif de Battleworld, ancien neurochirurgien, médecin ;</li>
<li><strong>Famille : </strong>Eugene Strange (père, décédé), Beverly Strange (mère, décédée), Victor Strange (le Baron rouge/Khiron, frère, décédé), Donna Strange (sœur, décédée), Eunice Strange (arrière-grand-mère, décédée), Cléa (épouse, séparée), Umar (belle-mère), Orini (beau-père), Dormammu (oncle par alliance), Mr Misery (création) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Manipule la magie (canalise et manipule les énergies magiques pour divers effets, tels que la projection d'énergie, la téléportation, la création de boucliers magiques et la guérison), vayage astral (capable de projeter son esprit hors de son corps physique et d'explorer d'autres plans d'existence, cela lui permet donc de voyager dans des dimensions alternatives, de communiquer avec d'autres êtres et d'obtenir des informations précieuses), projection astral (Cela lui permet de voyager dans des dimensions alternatives, de communiquer avec d'autres êtres et d'obtenir des informations précieuses et ces formes astrales lui permettent de se battre et de mener des actions même lorsque son corps physique est immobile ou vulnérable), invoque et manipule des forces mystiques (peut invoquer des entités mystiques, utiliser des sorts de divination, de téléportation, de transformation...), <br>sortilèges de protection (capable de créer des boucliers magiques puissants qui le protègent contre les attaques physiques, énergétiques et mystiques), contrôle du temps (peut manipuler le temps dans une certaine mesure et lui permet de ralentir, d'accélérer ou d'inverser le cours du temps) ;</li> 
<li><strong>Caractéristique(s) : </strong>Maîtrise des arts mystique et des arts martiaux, excellent stratège,  ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre du Haut Conseil de Battleworld, des Prêtres noirs, des Avengers, des Illuminati, des Défenseurs, de l'Ordre, des Fils de Minuits, des Défenseurs secrets, ancien disciple de l'Ancien, ancien mentor de Casey Kinmont/Jack Holyoak/Topaze/Augustyne Phyffe/Kyllian Kell (Wildpride)/Rintrah/Cléa ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Dormammu, Baron Mordo, Shuma-Gorath (entité maléfique et démoniaque qui est liée aux forces primordiales du chaos), Méphisto, Nightmare (seigneur des cauchemars et une entité surnaturelle qui tire son pouvoir des peurs et des terreurs des mortels).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">

Doctor Strange, de son vrai nom Stephen Strange, était autrefois un brillant neurochirurgien renommé. Cependant, après un accident de voiture qui a gravement endommagé ses mains, il a perdu sa dextérité chirurgicale, mettant fin à sa carrière prometteuse. Désespéré de retrouver l'usage de ses mains, Strange a entrepris un voyage à la recherche d'une guérison.<br><br>

Ce voyage l'a conduit à Kamar-Taj, une enclave secrète de sorciers dirigée par l'Ancien, le Sorcier suprême de l'époque. L'Ancien a reconnu le potentiel de Strange et a accepté de l'entraîner aux arts mystiques. Au fil du temps, Strange a appris les secrets de la magie, développant ses compétences et sa maîtrise des pouvoirs mystiques.<br><br>

Une fois formé, Strange est devenu le Sorcier suprême, le protecteur de la réalité contre les menaces surnaturelles et les forces maléfiques. Il a utilisé ses pouvoirs pour combattre des adversaires tels que Dormammu, Baron Mordo, Shuma-Gorath et bien d'autres.<br><br>

Au cours de ses aventures, Doctor Strange a exploré diverses dimensions et planètes, nouant des alliances avec d'autres héros magiques et cosmiques. Il est également devenu membre des Avengers, contribuant à défendre la Terre contre les dangers qui la menacent.<br><br>

Au-delà de ses exploits en tant que super-héros, Doctor Strange est un gardien de la connaissance et de la sagesse mystique. Il a étudié de nombreux livres anciens et grimoires magiques, accumulant une compréhension approfondie des forces mystiques de l'univers.<br><br>

L'histoire de Doctor Strange est celle d'une transformation, passant d'un chirurgien arrogant et égocentrique à un protecteur de la réalité et des mystères de l'univers. Il continue à protéger le monde contre les menaces surnaturelles tout en explorant les limites de la magie et en se confrontant à des défis complexes et cosmiques.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
