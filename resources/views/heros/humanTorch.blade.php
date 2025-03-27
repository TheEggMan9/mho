<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Human Torch</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>HUMAN TORCH</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/236x/8f/94/b4/8f94b4bc85fb5619807834f4e8219c89--marvel-vs-marvel-heroes.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Jonathan (Johnny) Lowell Spencer Storm ;</li>
<li><strong>Profession(s) : </strong> Aventurier, ancien responsable financier des Fantastic Four, acteur, mécanicien, pilote de course, pompier, artiste de cirque, souverain provisoire de la Zone négative ;</li>
<li><strong>Famille : </strong>Lyja Laserfist (Alicia Masters, ex-épouse), Franklin Storm (père, décédé), Mary Storm (mère, décédée), Sue Storm Richards (Invisible-Woman, sœur), Reed Richards (Mr Fantastic, beau-frère), Franklin Richards (neveu), Valeria Richards (nièce), Marygay Jewel Dinkins (tante), Bones (cousin) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Pyrokinésiste (créer et contrôle le feu, génére des flammes de différentes tailles et formes, les manipule à volonté et les projeter sous forme de boules de feu ou de rafales, peut également envelopper son corps de flammes, ce qui le protège des dommages), capable de voler (peut s'élever dans les airs et voler à des vitesses élevées, peut manœuvrer avec agilité et se déplacer rapidement sur de longues distances grâce à ses pouvoirs de flamme), porte un uniforme fait de molécules instables (permettent à ses tenues de ne pas brûler quand il s’enflamme), facteur guérisseur, peut crée un champ de force thermique (permet de le protéger des attaques physiques et des températures extrêmes) ;</li> 
<li><strong>Caractéristique(s) : </strong>Combat à mains nues, pilote de course, expert dans la mécanique automobile ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Avengers, ancien membre des Fantastic Four, de la Fondation du Futur, de Fantastic Four Incorporated, des Secret Avengers, de la Fantastic Force, des Hérauts de Galactus, du Torride Duo, ancien allié de la Brigade légère ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Doctor Doom, Annihilus, Super Skrull, le sorcier (super-vilain doté de pouvoirs magiques et scientifiques), Blastarr ( être provenant de la Zone Négative et est doté d'une force surhumaine, d'une endurance accrue et d'une résistance aux dommages).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">

L'histoire de la Torche humaine, alias Johnny Storm, est étroitement liée à celle des Quatre Fantastiques, l'une des équipes de super-héros les plus emblématiques de l'univers Marvel.<br><br>

Johnny Storm est le jeune frère de Sue Storm, également connue sous le nom de Invisible Woman. Lors d'une mission spatiale avec leur ami Reed Richards (Mister Fantastic) et le pilote Ben Grimm (The Thing), le groupe est exposé à une intense radiation cosmique.<br><br>

Cette exposition aux rayons cosmiques altère leur ADN et leur confère des capacités surhumaines. Pour Johnny Storm, cela déclenche ses pouvoirs de flamme et de vol. Il devient la Torche humaine, capable de s'enflammer à volonté et de projeter des flammes contrôlées. Il peut également voler en s'entourant de flammes.<br><br>

En tant que membre des Fantastic Four, Johnny Storm participe à de nombreuses aventures aux côtés de ses coéquipiers. Ensemble, ils affrontent des menaces cosmiques, des super-vilains et défendent la Terre contre divers dangers.<br><br>

Johnny Storm est souvent représenté comme un jeune homme impulsif et plein d'enthousiasme, qui aime l'action et l'adrénaline. Il entretient une relation complexe avec son ami Ben Grimm, The Thing, qui est souvent taquiné par Johnny pour son apparence rocheuse.<br><br>

Au fil des années, la Torche humaine a évolué en tant que personnage, explorant différentes facettes de sa personnalité et affrontant de nouveaux défis. Il est devenu un membre respecté des Fantastic Four et a également participé à d'autres équipes de super-héros de l'univers Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
