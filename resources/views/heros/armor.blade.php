<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Armor</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>ARMOR</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://upload.wikimedia.org/wikipedia/en/d/d3/ArmorX-Men.png" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Hisako Ichiki ;</li>
<li><strong>Profession(s) : </strong>Aventurière, étudiante, membre du Conseil d'administration de Worthington Industries ;</li>
<li><strong>Famille : </strong>M. Ichiki (père), Mme Ichiki (mère, décédée), un frère non nommé (décédé), un oncle non nommé (décédé) ;</li>  
<li><strong>Espèce : </strong>Mutante ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Génére un exo-squelette d’énergie psionique autour d’elle qui lui confère force et résistance surhumaine ;</li> 
<li><strong>Caractéristique(s) : </strong>Parle couramment le japonnais et l'anglais ;</li>
<li><strong>Affiliation(s) : </strong>Etudiant de l'Ecole <a href="/heros/jeanGrey" style="color: orange;">Jean Grey</a> pour Jeunes Surdoués, autrefois membre des <a href="/heros/xmen" style="color: orange;">X-Men</a>, des Etudiant de l'Institut Xavier ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/magneto" style="color: orange;">Magnéto</a>, la Confrérie des Mutants (groupe d'individus mutants qui croient en la suprématie mutante et cherchent à renverser l'ordre établi par les humains), les <a href="/heros/sentinelle" style="color: orange;">Sentinelles</a>.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Hisako Ichiki, mieux connue sous le nom de Armor, est une mutante japonaise qui a rejoint les X-Men. Son histoire débute lorsqu'elle est découverte par les X-Men alors qu'elle étudiait à l'Institut Xavier. Hisako possède la capacité de générer un champ de force psionique solide autour de son corps, lui offrant une protection et une force accrues.<br><br>

Après avoir été recrutée par les X-Men, Hisako a subi un entraînement intensif pour maîtriser ses pouvoirs et devenir une super-héroïne. Elle est devenue membre des X-Men de la génération dite "Nouveau X-Men" dirigée par <a href="/heros/cyclops" style="color: orange;">Cyclops</a>.

Hisako a fait ses débuts sur le terrain lors d'une mission pour sauver les mutants emprisonnés sur l'île de Genosha. Depuis lors, elle a participé à de nombreuses aventures avec les X-Men, combattant aux côtés de ses coéquipiers contre divers ennemis, tels que Magnéto, la Confrérie des Mutants et les Sentinelles.<br><br>

En plus de ses exploits en tant que super-héroïne, Hisako a également dû faire face à des défis personnels. Elle a été confrontée à des doutes et à des craintes quant à sa place au sein des X-Men, ainsi qu'à des problèmes familiaux liés à son statut de mutante.<br><br>

Hisako est connue pour son sens du devoir, son courage et sa détermination. Elle a développé des liens étroits avec ses camarades X-Men, en particulier avec sa mentore, <a href="/heros/kittyPride" style="color: orange;">Kitty Pryde</a>. Son champ de force psionique lui confère une protection solide en combat, lui permettant de résister à des attaques puissantes et de protéger ses alliés.<br><br>

Au fil du temps, Hisako a gagné en confiance et en expérience en tant que membre des X-Men, et elle a continué à se développer en tant que super-héroïne. Son histoire est celle d'une jeune mutante qui a trouvé sa place parmi les X-Men, défendant les idéaux de paix et de coexistence pacifique entre mutants et humains.
  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
