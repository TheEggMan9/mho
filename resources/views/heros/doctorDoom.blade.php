<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Doctor Doom</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DOCTOR DOOM</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://www.atomcomics.pl/environment/cache/images/500_500_productGfx_189306/9781302934200.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Victor von Fatalis (Doom) ;</li>
<li><strong>Profession(s) : </strong>Monarque de Latvérie, conquérant ;</li>
<li><strong>Famille : </strong>Werner von Fatalis (père, décédé), Cynthia von Fatalis (mère, décédée), Kristoff Vernardt (alias le Dr Fatalis II, pupille) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Peut échanger son esprit avec celui d'un autre individu (intervertissant ainsi leurs corps), possède des capacités mystiques (comme la possibilité de lancer des décharges d'énergie eldritch ou en invoquant diverses entités mystiques pour obtenir des pouvoirs supplémentaires), porte une armure de combat sophistiquéeen titane et alimenté par de l'énergie nucléaire (cette armure lui confère une force surhumaine, comporte deux jets dorsaux qui lui permettent de voler, possède un champ de force personnel, et la capacité de libérer des décharges de force pure) ;</li> 
<li><strong>Caractéristique(s) : </strong>Génie dans la physique/la cybernétique/la génétique/les technologies de l'armement/la biochimie et le voyage temporel, maîtrise les arts mystiques, leader<br> né, stratège, manipulateur,  ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre (illusoire) des Chevaliers de la Table Atomique, de l’Intelligencia, de la Cabale, ancien conspirateur des Actes de Vengeance, ancien partenaire<br> de Namor, ancien employeur du Terrible Trio ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Les Quatres Fantastiques, Spider-Man, les Avengers, Black Panther, Namor.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Victor Von Doom est né en Latvérie, une petite nation européenne. Doté d'un génie scientifique exceptionnel, il est également fasciné par la sorcellerie. Pendant ses études à l'université, il rencontre Reed Richards (Mister Fantastic), un futur membre des Quatre Fantastiques, avec qui il développe une rivalité et une animosité durable.<br><br>

Doom mène de nombreux projets scientifiques ambitieux, mais une expérience pour sauver l'âme de sa mère se solde par un échec désastreux. Son visage est défiguré, le poussant à porter un masque métallique permanent. Cette expérience ratée alimente sa haine envers Richards et le motive à rechercher le pouvoir et la domination.<br><br>

Doom devient le souverain absolu de la Latvérie et se forge une réputation en tant que super-vilain impitoyable. Il utilise sa maîtrise de la technologie avancée, de la science et de la sorcellerie pour tenter de conquérir le monde et assouvir ses ambitions.<br><br>

Au fil des ans, Docteur Doom se retrouve en conflit avec de nombreux héros Marvel, notamment les Quatre Fantastiques, Spider-Man, les Avengers et Black Panther. Ses plans machiavéliques et sa quête de pouvoir le mettent régulièrement en opposition avec ces super-héros.<br><br>

Malgré sa nature malveillante, il a montré des moments de lucidité et de compassion, ainsi que des aspirations à la rédemption. Son intelligence et ses compétences lui confèrent un statut de super-vilain redoutable et intrigant, et il reste l'un des antagonistes les plus persistants et influents de l'univers Marvel.<br><br>

En résumé, Docteur Doom est un génie scientifique et sorcier qui cherche à conquérir le monde pour assouvir ses ambitions de pouvoir. Sa rivalité avec Reed Richards et son désir de vengeance sont des éléments centraux de son histoire, faisant de lui un antagoniste mémorable dans l'univers Marvel.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
