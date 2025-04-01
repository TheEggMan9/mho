<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Howard The Duck</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>HOWARD THE DUCK</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://static.tvtropes.org/pmwiki/pub/images/02a8b33805ca9aee1f88826b821f1368.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Howard Duckson ;</li>
<li><strong>Profession(s) : </strong>Aventurier, ancien agent fédéral, chauffeur de taxi occasionnel, sauveur régulier (et réticent) du monde, ancien responsable d’un vidéo club, vendeur d’ordinateurs, acteur, préposé dans une maison de repos, baby-sitter, directeur de spectacles comiques, mannequin (involontaire) pour Duckitis, plongeur dans un restaurant, candidat à la présidence des Etats-Unis, catcheur amateur, huissier, ouvrier du bâtiment, poète, chanteur de musique folk ;</li>
<li><strong>Famille : </strong>Dave (père), Dottie (mère), Thérésa (sœur, décédée), Orville (frère, décédé) ;</li>  
<li><strong>Espèce : </strong>Canard humanoïde ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Utilise des objets magiques (ocasionellement) ;</li> 
<li><strong>Caractéristique(s) : </strong>Maîtrise le Quack-Fu (art martial), posède une intelligence humaine, doté d'un sens de l'humour sarcastique ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre des Quatre Terreurs, des Douze Canards, de l’ARMOR, des Daydreamers, de la compagnie de taxi « To Hack and Back », du Cirque infernal, allié régulier de Dakimh, Jennifer Kale, Korrek et The Thing, ancien associé occasionnel des defenders ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Le Bébé (un bébé sorcier maléfique avec des pouvoirs mystiques), le Dr Bong (personnage excentrique, qui est équipé d'un gong magique qu'il utilise pour créer divers effets et attaquer ses adversaires), Pro-Rata (personnage interdimensionnel qui prétend être le chef mathématique de l'univers), kingpin, Kidney Lady (femme mystérieuse, bizarre et grotesque, qui poursuit Howard the Duck pour récupérer l'un de ses reins).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
L'histoire de Howard the Duck se déroule principalement sur Terre, où il a été accidentellement transporté depuis sa planète d'origine, Duckworld. Sur Terre, Howard se retrouve confronté à de nombreuses situations absurdes et comiques, tout en naviguant à travers les éléments les plus étranges de la société humaine.<br><br>

Howard est souvent représenté comme un détective privé sarcastique et malchanceux, essayant de trouver sa place dans un monde qui lui est étranger. Il se retrouve impliqué dans diverses aventures, souvent aux côtés d'autres personnages de l'univers Marvel tels que Beverly Switzler, une chanteuse de rock, et le Man-Thing, une créature surnaturelle.<br><br>

Au fil des ans, Howard the Duck est devenu un personnage culte et emblématique de Marvel, avec sa série de bandes dessinées devenue une œuvre de référence dans le genre de la comédie satirique. Il est également apparu dans d'autres médias, notamment un long métrage en 1986 et des apparitions dans des dessins animés et des jeux vidéo.<br><br>

L'histoire de Howard the Duck est souvent un mélange d'humour, de satire sociale et de parodie, explorant les absurdités de la société contemporaine à travers les yeux d'un canard parlant. Son statut en tant qu'outsider bizarre et sarcastique lui permet de commenter et de critiquer de manière satirique divers aspects de la culture populaire et de la société.





</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
