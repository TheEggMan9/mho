<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Adam Warlock</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>ADAM WARLOCK</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://www.mundodeportivo.com/alfabeta/hero/2023/05/uno-de-los-equipos-mas-poderosos-de-marvel-regresara-en-warlock-rebirth.jpg?width=768&aspect_ratio=16:9&format=nowebp" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Adam Warlock ;</li>
<li><strong>Profession(s) : </strong>Sauveur de mondes, messie ;</li>
<li><strong>Famille : </strong>L’Enclave (Jerome Hamilton (décédé), Maris Moriak, Wladyslav Shinski, Carlo Zota, ses créateurs), Ayesha (jumelle génétique), Stakarus Vaughn-Ogord (neveu dans un futur alternatif) ;</li>  
<li><strong>Espèce : </strong>Humain créé artificiellement ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Possède des attributs physiques surhumains, peut voler, manipuler et absorber l'énergie, manipuler la matière, expert en magie, télépathe, possède des facteurs guérisseurs, possède la gemme de l'Ame sur son front, utilise un bâton karmique qui lui permet de libérer des décharges issues de l'énergie de son âme contre ses ennemis ;</li> 
<li><strong>Caractéristique(s) : </strong>Combat à mains nues, philosophe autodidacte accompli, agile ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre des <a href="/heros/gardiensDeLaGalaxie" style="color: orange;">Gardiens de la Galaxie</a>, ancien chef de l’Infinity Watch ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/thanos" style="color: orange;">Thanos</a>, Magus (alter ego maléfique), <a href="/heros/ultron" style="color: orange;">Ultron</a>, les Universal Church of truth (secte intergalactique dirigée par le Magus).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Adam Warlock a été créé par un groupe de scientifiques connus sous le nom de "Enclave" dans le but de devenir l'être parfait et supérieur. Il est né sur Terre, dans un cocon, et a émergé en tant qu'individu doté d'une puissance cosmique immense. Dès le début, il était destiné à être un être surhumain et spirituellement avancé.<br><br>

Au fur et à mesure de son évolution, Warlock a acquis des pouvoirs divins et est devenu le gardien de la Gemme de l'Âme, l'une des six Pierres d'Infinité. Il a également pris le nom d'Adam Warlock, en référence à sa nature d'être supérieur.<br><br>

Warlock a été impliqué dans plusieurs aventures cosmiques aux côtés de héros comme les <a href="/heros/avengers" style="color: orange;">Avengers</a> et les Gardiens de la Galaxie. Il a également combattu des ennemis puissants tels que Thanos, le titan fou, qui convoitait les Pierres d'Infinité.<br><br>

L'un des moments marquants de l'histoire d'Adam Warlock est sa confrontation avec Magus, sa version maléfique issue d'un futur alternatif. Magus était un tyran et un conquérant, cherchant à utiliser le pouvoir des Pierres d'Infinité pour asservir l'univers. Warlock a dû faire face à son double maléfique dans une bataille épique entre le bien et le mal.<br><br>

Warlock a également eu des interactions avec des entités cosmiques telles que le <a href="/heros/livingTribunal" style="color: orange;">Living Tribunal</a> et Eternity, et a été impliqué dans des conflits entre les forces de l'Ordre et du Chaos.<br><br>

Au cours de son parcours, Warlock a été présenté comme un être complexe, oscillant entre la dualité du bien et du mal. Il a souvent été guidé par un sens profond de la destinée et de l'équilibre cosmique.<br><br>

L'histoire d'Adam Warlock a connu de nombreuses réinterprétations et rebondissements au fil des décennies. Ses quêtes spirituelles, ses combats cosmiques et sa recherche de l'harmonie ont fait de lui un personnage fascinant et emblématique de l'univers Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
