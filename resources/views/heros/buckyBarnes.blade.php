<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Bucky Barnes</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>BUCKY BARNES</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/474x/28/88/b4/2888b48a3f536685bddf957a7e43fc5c.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>	James Buchanan (Bucky) Barnes ;</li>
<li><strong>Profession(s) : </strong>Aventurier, ancien tueur du KGB, ancienne mascotte de l’armée américaine ;</li>
<li><strong>Famille : </strong>George M. Barnes (père, décédé), Winnifred C. Barnes (mère, décédée), Ida Barnes (tante, probablement décédée), « Gramma » Hubbard (grand-mère maternelle, décédée), Rebecca P. Barnes Proctor (sœur), Mr Proctor (prénom inconnu, beau-frère), une nièce et un neveu non identifiés, Scott Proctor (petit-neveu), Kimberly Proctor (petite-nièce) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Bras gauche cybernétique, uniforme en kevlar, tout types d'armes blanches et d'armes à feu ;</li> 
<li><strong>Caractéristique(s) : </strong>Atlhlète, acrobate, techniques de commandos, maniement des armes à feu/des grenades/des armes blanches, tireur d'élite, redoutable combattant à mains nues, maîtrise des arts martiaux, parle couramment l'anglais/le russe/le japonnais/l'allemand ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre de la Strikeforce, des Avengers de guerre, des Thunderbolts, des New Avengers, du Kid Commando, de la Légion de la Liberté, des Envahisseurs, des Jeunes Alliés, des Sentinelles de la Liberté, de l’armée américaine, de la Légion des Morts-Vivants (à confirmer), du Captain America Corps, du<br> KGB, ancien partenaire de Captain América (Steve Rogers), de Black Widow (Natalia Romanoff), du Faucon (Sam Wilson), ancien allié de Namor, de l’Underground, ancien agent du Département X ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Red Skull, Crossbones, Baron Zemo, Black Widow, des super-soldats soviétiques.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Bucky Barnes a fait ses débuts dans les comics dans les années 1940 en tant que jeune acrobate et assistant de Captain America. Lors de sa première mission avec Captain America, Bucky est capturé et présumé mort dans une explosion. Cependant, il a été retrouvé par l'organisation soviétique connue sous le nom de HYDRA et a été ramené à la vie en tant qu'assassin d'élite, le Soldat de l'Hiver.<br><br>

Pendant des décennies, Bucky Barnes a été utilisé par le HYDRA pour mener des missions clandestines et assassiner des cibles stratégiques. Sous l'influence du HYDRA, il était programmé pour obéir aux ordres sans poser de questions et pour conserver peu de souvenirs de sa vie antérieure.<br><br>

À un moment donné, il est devenu le "White Wolf", un nom qui lui a été donné lorsqu'il a été adopté et élevé par la tribu Wakandaise de la nation fictive de Wakanda.<br><br>

Dans les années 2000, l'histoire de Bucky Barnes a connu un tournant majeur. Après la chute du HYDRA, il a été découvert et libéré de son lavage de cerveau par le super-héros Captain America, qui était surpris de découvrir que son ancien partenaire était en vie et était devenu un assassin redoutable.<br><br>

Bucky Barnes a ensuite entrepris un voyage de rédemption, cherchant à se racheter pour ses actions passées en utilisant ses compétences et son expérience pour lutter contre le crime et protéger le monde en tant que Winter Soldier. Il a travaillé en étroite collaboration avec Captain America et d'autres héros Marvel, combattant des ennemis tels que le HYDRA, l'AIM et divers super-vilains.<br><br>

Au fil du temps, Bucky Barnes a également assumé le manteau de Captain America lorsqu'un événement tragique a conduit à la disparition de Steve Rogers. Sous le nom de Captain America, Bucky a continué à défendre la justice et les valeurs que représente le bouclier étoilé.<br><br>

L'histoire de Bucky Barnes est marquée par des thèmes de traumatisme, de rédemption, de loyauté et d'amitié. Il a été confronté à ses démons intérieurs et a lutté pour se reconstruire en tant qu'individu tout en portant le poids de son passé sombre.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
