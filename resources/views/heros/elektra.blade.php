<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elektra</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>ELEKTRA</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://pm1.aminoapps.com/6281/bf0a95403d9880ca4d1423e35df79e179aba8b0d_00.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Elektra Natchios ;</li>
<li><strong>Profession(s) : </strong>Mercenaire, tueuse à gages, ancienne étudiante et danseuse ;</li>
<li><strong>Famille : </strong>Hugo Kostas Natchios (père, décédé), Christina Natchios (mère, décédée), Orestez Natchios (frère, décédé), Demetrios Natchios (oncle), Alexia Natchios (tante par alliance) ;</li>  
<li><strong>Espèce : </strong>Humaine ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Possède une paire de saï (deux longues dagues) ;</li> 
<li><strong>Caractéristique(s) : </strong>Athlète, gymnaste, rapide, rapide, souple, endurante, combat à mains nues, maîtrise des arts martiaux, maniament de tout types d'armes utilisées dans les arts martiaux orientaux (katana, bâton, shuriken...), maîtrise son flux sanguin (réduire voire stopper totalement les saignements induits par des blessures), capable de supporter les chaleurs et froid extrêmes, se dissimule dans les ombres et se déplace en toute discrétion, aussi bien de jour que de nuit ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Thunderbolts, ancien membre des Héros à Louer, de Code Rouge, de la Main, des Chastes ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Bullseye (assassin et tireur d'élite), la Main (organisation criminelle secrète composée de ninjas), Kirigi  (guerrier ninja et un maître en arts martiaux), Typhoid Mary, Lady Bullseye (combattante d'élite et disciple de la Main).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Elektra est née en Grèce et a étudié les arts martiaux depuis son plus jeune âge. Elle est devenue une combattante experte, maîtrisant les arts du meurtre et de l'assassinat.<br><br>

Dans ses débuts, Elektra est devenue l'amante de Matt Murdock, alias Daredevil. Cependant, leur relation s'est compliquée en raison des circonstances de la vie d'Elektra. Elle a été recrutée par La Main, une organisation criminelle de ninjas, et a travaillé en tant qu'assassin pour eux.<br><br>

Éventuellement, Elektra s'est séparée de Daredevil et a poursuivi sa propre voie en tant qu'assassin indépendante. Elle est devenue célèbre pour son habileté au combat et sa maîtrise des armes blanches, en particulier le sai, sa signature. Elle a également développé une réputation de tueuse impitoyable.<br><br>

Au fil du temps, Elektra a croisé la route de nombreux ennemis, notamment Bullseye, un tueur à gages redoutable qui est devenu son ennemi juré. Leur rivalité a souvent conduit à des affrontements violents et intenses. Elektra a également eu des conflits avec la Main, qui cherchait à la manipuler en raison de ses compétences exceptionnelles.<br><br>

Tragiquement, l'histoire d'Elektra a connu une fin tragique. Dans une histoire marquante, elle a été assassinée par Bullseye, qui l'a poignardée avec son propre saï. Sa mort a eu un impact profond sur Daredevil et a été un moment clé de son histoire.<br><br>

Cependant, comme beaucoup de personnages de bandes dessinées, Elektra est revenue à la vie par la suite. Elle est réapparue dans différents récits, parfois en tant que justicière solitaire, parfois en tant qu'alliée ou ennemie de Daredevil. Son caractère difficile, sa maîtrise martiale et sa dualité entre tueuse impitoyable et héroïne tourmentée continuent de faire d'elle un personnage fascinant de l'univers Marvel.  
</p> <!--histoire-->
</p>    
  </div>
</div>²
</body>
</html>
