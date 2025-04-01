<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Invisible Woman</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>INVISIBLE WOMAN</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/originals/47/b6/b6/47b6b62ee036cffb8f6c067a9ea7a6a7.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Susan (Sue) Storm-Richards ;</li>
<li><strong>Profession(s) : </strong>Aventurière, mère de famille, femme d’affaires, actrice ;</li>
<li><strong>Famille : </strong>Reed Richards (Mr Fantastic, mari), Franklin Richards (Psi-Lord, Fanfaron, fils), Valeria Richards (Marvel-Girl, fille), Johnny Storm (Human Torch, frère), Franklin Storm (père, décédé), Mary Storm (mère, décédée), Nathaniel Richards (beau-père), Evelyn Richards (belle-mère, décédée), Marygay (tante) ;</li>  
<li><strong>Espèce : </strong>Humaine altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Invisibilité (rendre son corps et les objets qu'elle touche invisibles à volonté) capable de générer des champs de force (créer des champs de force solides, invisibles et résistants, qu'elle peut utiliser pour protéger ses alliés ou bloquer les attaques ennemies ainsi que de lancer des rafales ou des projectiles de force depuis ses mains) ;</li> 
<li><strong>Caractéristique(s) : </strong>Combat à mains nues, actrice talentueuse, experte en camouflage ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Fantastic Four, de la Fondation du Futur, ancien membre des Avengers, des Libératrices ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Doctor Doom, Super Skrull, Namor, Frightful (groupe de super-vilains), Psycho-Man (être maléfique qui utilise la technologie de manipulation de l'esprit pour semer la peur et le chaos).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Sue Storm est une jeune femme intelligente et talentueuse qui, aux côtés de son frère Johnny Storm (Human Torch), son fiancé Reed Richards (Mister Fantastic) et leur ami Ben Grimm (The Thing), participe à une mission spatiale expérimentale. Lors de cette mission, l'équipe est exposée à une intense radiation cosmique.<br><br>

Cette exposition aux rayons cosmiques altère leur ADN, leur conférant des pouvoirs surhumains. Pour Sue Storm, cela déclenche ses pouvoirs d'invisibilité et de manipulation des champs de force. Elle devient Invisible Woman, capable de rendre son corps et les objets qu'elle touche invisibles, ainsi que de générer des champs de force solides et protecteurs.<br><br>

En tant que membre des Fantastic Four, Sue participe à de nombreuses aventures, défendant la Terre contre des menaces cosmiques, des super-vilains et des dangers émergents. Elle utilise ses pouvoirs d'invisibilité et de champs de force pour protéger ses coéquipiers et se défendre contre les attaques ennemies.<br><br>

Au fil des années, Sue Storm développe ses compétences et maîtrise davantage ses pouvoirs. Elle devient une combattante polyvalente et une experte en tactique, utilisant son invisibilité pour mener des missions d'infiltration et de reconnaissance. Ses champs de force solides sont un atout essentiel pour la défense de l'équipe.<br><br>

En dehors des aventures des Fantastic Four, Sue a également participé à des événements majeurs de l'univers Marvel, faisant équipe avec d'autres super-héros et défendant la cause des mutants. Elle a été reconnue pour sa force de caractère, son intelligence et son leadership au sein de l'équipe.<br><br>

L'histoire de la Invisible Woman est celle d'une super-héroïne puissante et polyvalente, qui a évolué en tant que membre clé des Fantastic Four et a contribué à façonner l'univers Marvel grâce à son courage et à ses talents uniques.





</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
