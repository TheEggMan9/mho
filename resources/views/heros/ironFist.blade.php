<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Iron Fist</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>IRON FIST</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/564x/92/1c/d7/921cd752450bb6f11d87778b70898359.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Daniel Thomas Rand’K’Ai ;</li>
<li><strong>Profession(s) : </strong>Aventurier, co-propriétaire de Rand & Meachum Inc., instructeur dans un dojo, ancien garde du corps, homme d’affaires, ancien détective privé, assistant de recherches, guerrier ;</li>
<li><strong>Famille : </strong>Wendell Rand (père, décédé), Heather Duncan Rand (Silver Dragon, mère, décédée), Miranda Rand (Deathsting, demi-sœur), Lord Tuan (Yu-Ti, grand-père paternel par adoption, décédé), Lord Nu-An (Yu-Ti, oncle paternel par adoption), Lady Ming (grand-mère paternelle par adoption, décédée), Thomas Duncan (grand-père maternel), Pei (pupille), Danielle Cage (filleule)... ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Capable de concentrer son énergie spirituelle, appelée chi, dans son poing et peut par la suite frapper avec une force surhumaine et délivrer des coups puissants, possède des sens aiguisés et améliorer (réflexe et anticipation des coups ennemis), possède le livre du "Poing de Fer" (ancien ouvrage mystique qui renferme les connaissances et les techniques de l'art martial sacré de l'Iron Fist) ;</li> 
<li><strong>Caractéristique(s) : </strong>Maître des arts martiaux et des armes (nunchakus, bâtons, épées, shurikens...), contrôle aussi l’ensemble de son système nerveux (pouvant ainsi être insensible à la douleur) ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Defenders (de Manhattan), des Armes immortelles, des Fils de Minuit, partenaire de Luke Cage, PDG de la Rand Corporation, ancien membre de la Force de frappe de Jotunheim, des Defenders (du Dr Strange du Dr Druide, « d’un jour »), des Avengers, des New Avengers, des Secret Avengers, des Héros à Louer (de Knight et d’Oracle Inc.), des Thunderbolts d’Osborn (sous contrôle mental), de l’équipe de l’Iron-Man du futur, des Puissants, ancien partenaire de Power-Man (Victor Alvarez), associé régulier des Filles du Dragon ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Davos (moine de K'un-Lun), Mme. Gao (puissante chef de la pègre et une maîtresse des arts martiaux), la Main.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Danny Rand est le fils de Wendell Rand, un entrepreneur américain, et de Heather Duncan, une archéologue. Alors qu'ils sont en expédition dans les montagnes de l'Himalaya, la famille Rand est attaquée par des loups. Seuls Danny survécu et a finalement découverts par les habitants la cité mystique de K'un-Lun.<br><br>

Danny est adopté par le peuple de K'un-Lun et élevé par Lei Kung, le Thunderer, un maître des arts martiaux. Pendant des années, Danny s'entraîne intensivement, apprenant les techniques du Kung Fu et de l'art martial sacré de l'Iron Fist. Son entraînement inclut l'ouverture du Livre du Poing de Fer, un ouvrage mystique qui contient les enseignements de l'Iron Fist.<br><br>

Après des années d'entraînement, Danny Rand défie le dragon mystique Shou-Lao l'Immortel et triomphe de lui. Il plonge ses poings dans le cœur du dragon et en absorbe le pouvoir, devenant ainsi l'Iron Fist. Cette transformation lui confère la capacité de canaliser son énergie spirituelle, appelée "chi", pour délivrer des coups surhumains.<br><br>

De retour à New York, Danny Rand utilise ses compétences en arts martiaux et son pouvoir de l'Iron Fist pour combattre le crime et défendre les innocents. Il se lie d'amitié avec Luke Cage, formant le duo Heroes for Hire.<br><br>

Iron Fist a été membre des Defenders, un groupe de super-héros composé de héros marginaux, aux côtés de héros tels que Doctor Strange, Hulk et Daredevil. Il a également joué un rôle dans des événements majeurs de l'univers Marvel, notamment dans la lutte contre des menaces cosmiques et la protection de la cité de K'un-Lun.<br><br>

L'histoire d'Iron Fist met souvent l'accent sur sa dualité en tant qu'homme d'affaires milliardaire et héros combattant. Il est confronté à des adversaires tels que Davos, le Serpent d'acier, et Madame Gao, tout en explorant sa propre identité et en approfondissant sa maîtrise des arts martiaux et de l'Iron Fist.<br><br>

L'histoire d'Iron Fist est celle d'un voyage personnel de découverte, de lutte contre l'injustice et de dépassement de soi. Il incarne le rôle du protecteur des faibles et des opprimés, utilisant ses compétences en arts martiaux et sa puissance de l'Iron Fist pour apporter la justice là où elle est nécessaire.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
