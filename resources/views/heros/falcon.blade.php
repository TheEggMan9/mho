<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Falcon</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>FALCON</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/originals/7a/34/b8/7a34b8f30a08ff20ae11901c45643fb0.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Samuel Sam Thomas Wilson ;</li>
<li><strong>Profession(s) : </strong>Aventurier, travailleur social, planificateur urbain, ancien criminel ;</li>
<li><strong>Famille : </strong>Paul Wilson (père, décédé), Darlene Wilson (mère, décédée), Sarah Wilson Casper (sœur), un grand-père non identifié, Gideon Wilson (Monsieur Gideon, beau-frère), Jody Casper (neveu), Jim Wilson (neveu, décédé), Doug Stone (filleul) ;</li>  
<li><strong>Espèce : </strong>Humain ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Wingsuit (harnais d'ailes en Kevlar), Redwing (oiseau robotique équipé de caméras et de capteurs, ce qui permet à Falcon d'obtenir des informations en temps réel sur son environnement. Redwing peut également attaquer les ennemis ou servir de soutien lors des missions), des lunnetes (dotées de différentes fonctionnalités, notamment la vision infrarouge, la vision télescopique et un scanner visuel qui l'aide à repérer les ennemis et à analyser les situations), ;</li> 
<li><strong>Caractéristique(s) : </strong>excellent dresseur d’oiseaux sauvages, possède des techniques de combats à mains nues, gymnaste, acrobate ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Avengers, ancien membre des Puissants Avengers, Héros à louer, des Defenders, du Peuple de la Nuit, de la Vengeance royale, des Super-Agents du SHIELD, partenaire du Faucon (Joaquin Torres), de Démolition-Man et de Misty Knight, ancien partenaire de Captain América ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Vultur, le Baron Zemo, Red Skull, Diamondback, Serpent Society (groupe de super-vilains reptiliens).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">

Sam Wilson, plus connu sous le nom de Falcon, est un personnage emblématique de l'univers Marvel Comics. Originaire de Harlem, New York, Sam Wilson était un ancien militaire américain et expert en vol d'oiseaux.<br><br>

Lors d'une mission, Sam a rencontré Captain America et s'est rapidement lié d'amitié avec lui. Ils ont commencé à travailler en équipe, utilisant les compétences de vol de Sam pour aider à combattre le crime et l'injustice.<br><br>

Sam Wilson a ensuite reçu une technologie avancée du gouvernement américain, notamment un harnais d'ailes mécaniques et d'autres équipements spéciaux. Ces ailes lui permettent de voler à grande vitesse, de manœuvrer avec agilité et de combattre les ennemis avec efficacité.<br><br>

En tant que Falcon, Sam Wilson est devenu un allié précieux de Captain America. Ensemble, ils ont affronté de nombreux ennemis, dont des super-vilains notoires tels que le Baron Zemo, Red Skull et d'autres menaces mondiales.<br><br>

Falcon a également joué un rôle clé dans des équipes de super-héros tels que les Avengers et les Champions, mettant ses compétences et son équipement au service de la défense de la justice et de la protection de l'humanité.<br><br>

Une étape significative de l'histoire de Falcon est survenue lorsque Sam Wilson a assumé le rôle de Captain America lui-même, lorsque Steve Rogers était indisponible. En tant que premier Captain America afro-américain, Sam a apporté un nouveau dynamisme à l'héritage du personnage, tout en défendant les valeurs de liberté, de justice et d'égalité.<br><br>

Au-delà de ses aventures en tant que super-héros, Sam Wilson a également été un leader communautaire, travaillant pour améliorer les conditions de vie dans son quartier d'origine, Harlem, et utilisant sa notoriété pour soutenir des causes justes et lutter contre les inégalités.<br><br>

L'histoire de Falcon est celle d'un individu déterminé et courageux qui a utilisé ses compétences exceptionnelles, son équipement de pointe et son sens profond de la justice pour se battre contre le mal et défendre les opprimés. Sa loyauté envers ses amis, sa ténacité et son dévouement en font un personnage apprécié et respecté au sein de l'univers Marvel. 
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
