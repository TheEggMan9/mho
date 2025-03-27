<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Apocalypse</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>APOCALYPSE</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://static.tvtropes.org/pmwiki/pub/images/0f3df968_ee0b_45fc_a272_b7d6b238b7e1.jpeg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>En Sabah Nur ;</li>
<li><strong>Profession(s) : </strong>Ancien membre du Conseil secret de Krakoa, ancien ambassadeur, ancien défenseur de la suprématie des mutants, ancien aventurier, ancien seigneur de la guerre, autrefois adoré comme un dieu par certaines anciennes civilisations ;</li>
<li><strong>Famille : </strong>William Rolfson (Génocide, fils, décédé), Baal (père adoptif, décédé), Génésis (épouse), Mort (fils), Famine (fils), Pestilence (fille), Guerre (fille), Isca (belle-sœur), l’Invocateur (petit-fils, décédé), Génésis/Kid Apocalypse (Evan Sabah Nur, clone), d’innombrables descendants au sein du Clan Akkaba dont Kahar Brashir, Clarice Ferguson (Blink), Frederick Slade, Hamilton Slade, Margaret Slade, Jack Starsmore, Jonothon Starsmore (Chamber)... ;</li>  
<li><strong>Espèce : </strong>Mutant ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Contrôle auto-moléculaire, Attributs physiques surhumains, manipule la matière et l'énergie, manipulation moléculaire, peut voler, est immortel, possède des facteurs guérisseurs, est métamorphe, à l'accès aux plans astraux, télékinésiste, télépathe, peut se téléporter, technopathie, peut augmenter les pouvoirs de d'autres mutants, transfert de la conscience vers un autre être, possède une épée (Scarabée) et une bio-armure (s’adapte à ses manipulations moléculaires et lui permet de contenir sa puissance) ;</li> 
<li><strong>Caractéristique(s) : </strong>Génie intellectuel (scientifique, dans la technologie et la génétique), vastes connaissances, combat à mains nues ou avec armes blanches ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Externels, ancien membre du Conseil secret de Krakoa/d’Excalibur/du Clan Akkaba/de la Confrérie du Bouclier, fondateur et chef des X-Traits, fondateur et ancien chef des Cavaliers d’Apocalypse, des Cavaliers de la nuit (ou Cavaliers de l’orage), de l’Alliance du mal, ancien membre des Tempêtes du Sable ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/xmen" style="color: orange;">X-Men</a>, X-Factor, <a href="/heros/cable" style="color: orange;">Cable</a>, <a href="/heros/misterSinister" style="color: orange;">Mister Sinister</a>.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Apocalypse est l'un des mutants les plus anciens et les plus puissants de l'univers Marvel. Selon son origine, il a été né en Égypte ancienne il y a des milliers d'années, où il était vénéré comme un dieu. Il a été exposé à la technologie extraterrestre appelée la Technologie Céleste, qui a augmenté ses pouvoirs et l'a rendu immortel.<br><br>

Au fil des siècles, Apocalypse a cherché à dominer le monde et à façonner la société selon ses propres idéaux de la "loi du plus fort". Il est obsédé par le concept de l'évolution et cherche à faire émerger les plus forts parmi les mutants.<br><br>

Apocalypse est connu pour avoir formé un groupe de disciples appelés les Quatre Cavaliers de l'Apocalypse. Chaque Cavalier représente une facette différente du chaos et de la destruction : Guerre, Famine, Pestilence et Mort. Les Quatre Cavaliers sont souvent envoyés pour accomplir les plans d'Apocalypse et combattre les héros Marvel.<br><br>

Apocalypse est un ennemi récurrent des X-Men et a croisé leur chemin à de nombreuses reprises. Il cherche à éradiquer l'humanité non mutante et à établir un nouvel ordre mutant sur la Terre. Son immense pouvoir et son intelligence stratégique en font un adversaire redoutable pour les héros mutants.<br><br>

Au fil des ans, Apocalypse a été impliqué dans de nombreux événements majeurs de l'univers Marvel, tels que "L'Ère d'Apocalypse", une réalité alternative dans laquelle Apocalypse a pris le contrôle du monde, et "Apocalypse Solution", une série centrée sur les tentatives de divers héros de l'arrêter.<br><br>

Ses motivations sont souvent entrelacées avec des éléments mythologiques, génétiques et cosmiques. Il est considéré comme l'un des super-vilains les plus puissants de l'univers Marvel et ses actions ont eu des conséquences durables sur le monde mutant et les héros qui s'y opposent.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
