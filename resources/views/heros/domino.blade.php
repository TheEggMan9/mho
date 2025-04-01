<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Domino</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple">

  <h1>DOMINO</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.ebayimg.com/images/g/9tgAAOSwYVZfNpel/s-l400.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Neena Thurman ;</li>
<li><strong>Profession(s) : </strong>Aventurière, mercenaire, ancienne garde du corps ;</li>
<li><strong>Famille : </strong>Béatrice (mère), Lazarus (frère cadet), Milo Thurman (mari, décédé) ;</li>  
<li><strong>Espèce : </strong>Mutante ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Génère psioniquement un champ invisible autour d’elle (qui est permet d’altérer les probabilités et de générer des choses improbables (mais pas impossibles). Ces altérations provoque généralement la chance pour elle et la malchance pour ses ennemis, comme une malfonction dans l’équipement ou l’arme d’un adversaire) et ses pouvoirs se déclenchent lorsqu’elle est dans une situation de stress intense, possède des armes à feu/des explosifs/des armes blanches ;</li> 
<li><strong>Caractéristique(s) : </strong>Ecxellente tireuse, maniement des armes à feu/des explosifs/des armes blanches, excellente nageuse, combat au corps à corps, maîtrise des arts martiaux, experte en infiltration, parle couramment plusieurs langues ;</li>
<li><strong>Affiliation(s) : </strong>Actuellement membre des Mercs for money ; Autrefois membre de l’A.I.M, de X-Force (Hope et Cable), des X-Men , de X-Force (de Cyclope), du Six Pack, des 198, de la Résistance, de l'X-Corporation (Hong-Kong), de la NSA ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>CLady Deathstrike, Black Tom assidy (mutant irlandais avec la capacité de manipuler la végétation), Cable.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Domino, dont le véritable nom est Neena Thurman, est une mutante, dont son histoire d'origine est liée à un programme secret appelé "Project Armageddon", où elle a été créée comme une arme vivante.<br><br>

Domino possède le pouvoir de la "Chance Provoquée", ce qui lui permet de manipuler les probabilités en sa faveur. Cela se traduit par une capacité à avoir de la chance et à réussir dans des situations dangereuses. Elle est également une tireuse d'élite et une combattante experte.<br><br>

En tant que mercenaire, Domino a travaillé avec différentes équipes de super-héros et de mutants, notamment X-Force, X-Men et Deadpool. Elle est souvent représentée comme une femme forte et indépendante, utilisant ses compétences et son pouvoir pour lutter contre le crime et protéger les innocents.<br><br>

Au fil des ans, Domino a été impliquée dans de nombreuses aventures et a affronté divers ennemis. Elle a combattu des adversaires tels que Lady Deathstrike, Black Tom Cassidy et d'autres mutants criminels. Sa relation avec le mutant Cable, à la fois en tant qu'allié et rival, a également été un aspect important de son histoire.<br><br>

Malgré son passé trouble en tant qu'arme créée par le Project Armageddon, Domino a trouvé une certaine rédemption en combattant aux côtés de héros et en cherchant à faire le bien. Son histoire est marquée par son rôle en tant que mercenaire et son développement en tant que personnage avec une moralité complexe.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
