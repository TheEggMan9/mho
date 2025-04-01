<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Cyclops</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>CYCLOPS</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/474x/99/98/4d/99984d5b09c80bd5f6304d20078572a4--marvel-cyclops-x-men-marvel.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Scott Summers ;</li>
<li><strong>Profession(s) : </strong>Combattant des droits des mutants, ancien responsable d’Utopia, ancien co-directeur du Xavier Institute for Higher Learning, aventurier, ancien étudiant, ancien animateur de radio, ancien marin ;</li>
<li><strong>Famille : </strong>Philip Summers (grand-père paternel), Deborah Summers (grand-mère paternelle), Christopher Summers (Corsaire, père, décédé), Katherine Ann Summers (mère, décédée), Alexander (Alex) Summers (Havok, frère), Gabriel Summers (Vulcain, frère), Jack Winters (le Diamant vivant, ancien père adoptif), Madelyne Pryor-Summers (Reine-Démon, première épouse, décédée), Jean Grey-Summers (Phénix, seconde épouse, décédée), Nathan Christopher Summers (Cable, fils), Aliya Jenskot (belle-fille, décédée), Tyler Dayspring (Génésis, petit-fils, décédé), Stryfe (clone de son fils, décédé), John Grey (beau-père, décédé), Elaine Grey (belle-mère, décédée), Sara Grey-Bailey (belle-sœur, décédée), Joey Bailey (neveu, décédé), Galen Bailey (nièce, décédée) ;</li>  
<li><strong>Espèce : </strong>Mutant ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Projette un rayon d'énergie rouge de ses yeux, masque (empêche de décharger aléatoirement son rayon optique),  ;</li> 
<li><strong>Caractéristique(s) : </strong>Excellent chef, stratège et tacticien hors pair, pilote d'avion expérimenté, combat à mains nues (judo rt aikido) ;</li>
<li><strong>Affiliation(s) : </strong>Membre de son propre groupe de mutants, ancien membre des X-Men, des Cinq Phénix, de Facteur-X, des X-Terminateurs, des Douze, ancien<br> professeur référent des Corsaires ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Magnéto, Mister Sinister, Apocalipse, Mystique, White Queen.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Scott Summers est le fils aîné de Christopher Summers, alias Corsair, et Katherine Summers. Alors qu'il était enfant, Scott et sa famille ont été impliqués dans un accident d'avion spatial. Pour sauver Scott et son frère Alex, Christopher les a mis dans une seule capsule de sauvetage et les a éjectés de l'avion.<br> Malheureusement, Christopher et Katherine ont été capturés par des extraterrestres Shi'ar, laissant les deux frères orphelins.<br><br>

Scott a atterri en sécurité, mais l'expérience a endommagé ses yeux et il a développé une mutation qui lui donnait des rayons optiques destructeurs. Incapable de contrôler ses pouvoirs, il a été recueilli par le professeur Charles Xavier, qui a fondé l'Institut Xavier pour l'éducation et la formation des <br><br>

Sous la tutelle du Professeur X, Scott est devenu le premier élève des X-Men et a adopté le nom de code "Cyclops". Il est devenu le leader emblématique de l'équipe, guidant les X-Men avec discipline et détermination.<br><br>

Au fil des années, Cyclops a été impliqué dans de nombreuses aventures des X-Men, luttant contre les préjugés anti-mutants et affrontant une variété d'ennemis puissants tels que Magnéto, Apocalypse et Mister Sinister.<br><br>

Dans ses relations amoureuses, Cyclops a été attiré par Jean Grey, une autre membre des X-Men, et leur relation a évolué vers une romance profonde. Cependant, leur amour a été compliqué par la résurrection de Jean en tant que Phénix, une entité cosmique aux pouvoirs immenses. Cyclops a été déchiré entre son amour pour Jean et ses responsabilités en tant que leader des X-Men.<br><br>

Au fil du temps, Cyclops est devenu plus complexe et controversé, adoptant des positions plus radicales pour la protection des mutants. Il a dirigé une branche des X-Men appelée X-Force, qui utilisait des méthodes plus agressives pour protéger les mutants. Ces choix ont créé des tensions au sein de la communauté mutante et ont conduit à des divergences d'opinions avec d'autres membres des X-Men, notamment Wolverine.<br><br>

Plus tard, Cyclops est devenu le leader de la nation souveraine des mutants, Utopia, et a joué un rôle clé dans les événements majeurs tels que "Avengers vs X-Men" et "Schism". Il a également été impliqué dans les sagas "Death of X" et "Inhumans vs X-Men".<br><br>

Cependant, son parcours a été marqué par des tragédies, notamment la mort présumée de Jean Grey et la perte de nombreux proches et alliés. Cyclops a été vu comme un symbole de la résistance mutante et de l'optimisme malgré les difficultés.<br><br>

L'histoire de Cyclops dans les comics Marvel est vaste et complexe, avec de nombreuses évolutions et retournements de situation. Sa personnalité déterminée, son leadership et sa lutte pour les droits des mutants en ont fait l'un des personnages les plus emblématiques et importants de l'univers des X-Men et de Marvel Comics dans son ensemble.<br> Son histoire est marquée par des moments de triomphe, de tragédie et de croissance personnelle, ce qui a contribué à faire de Cyclops l'un des mutants les plus appréciés de l'univers Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
