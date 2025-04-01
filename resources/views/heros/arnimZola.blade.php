<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Arnim Zola</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>ARNIM ZOLA</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://upload.wikimedia.org/wikipedia/fi/thumb/e/ef/ArnimZola.jpg/250px-ArnimZola.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Arnim Zola ;</li>
<li><strong>Profession(s) : </strong>Criminel professionnel, scientifique, généticien, biochimiste ;</li>
<li><strong>Famille : </strong>des ancêtres non identifiés (décédés), Ian Zola (fils), Jet Zola (Jet Black, fille) ;</li>  
<li><strong>Espèce : </strong>Humain dont l'esprit a été transféré dans un corps artificiel ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>équipé d’une boîte de perception extrasensorielle qui convertit les informations télépathiques en informations sensorielles lui permettant de voir et d’entendre normalement ;</li> 
<li><strong>Caractéristique(s) : </strong>Brillant généticien ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre du Haut Conseil d’Hydra/du parti nazi allemand, allié régulier de <a href="/heros/redSkull" style="color: orange;">Red Skull</a>, allié d’<a href="/heros/hydra" style="color: orange;">Hydra</a>, chef et fondateur du Corps des Cadavres, ancien employeur de Primus/de Doughboy/des Rats ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/captainAmerica" style="color: orange;">Captain America</a>, <a href="/heros/shield" style="color: orange;">S.H.I.E.L.D</a>, <a href="/heros/avengers" style="color: orange;">Avengers</a>.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
L'histoire d'Arnim Zola remonte à l'époque de la Seconde Guerre mondiale, où il travaillait pour l'organisation terroriste Hydra, dirigée par le Baron Strucker (leader d'Hydra). Zola a utilisé ses compétences en bio-ingénierie pour créer des êtres synthétiques connus sous le nom de "Zola-bots". Ces créatures étaient dotées de l'intelligence et des traits physiques de différents individus.<br><br>

Après la guerre, Zola s'est réfugié en Suisse et a continué ses expériences sur la création de la vie artificielle. Il a développé une technologie qui lui permettait de transférer son esprit dans un clone, ce qui lui conférait une sorte d'immortalité.<br><br>

Au fil des années, Arnim Zola est devenu un ennemi récurrent de Captain America et des Avengers. Il a régulièrement utilisé ses connaissances en génétique pour tenter de conquérir le monde et d'éliminer les héros Marvel. Il a également été impliqué dans des complots et des plans machiavéliques aux côtés d'autres super-vilains, notamment Red Skull.<br><br>

Zola est connu pour sa base secrète, appelée la Citadelle de Zola, qui est un complexe souterrain rempli de laboratoires et de machines futuristes. C'est de là qu'il mène ses expériences et lance ses attaques contre les héros.<br><br>

Au fil du temps, Arnim Zola a évolué en tant que personnage, devenant une menace technologique redoutable. Il est souvent représenté avec une apparence grotesque, son esprit étant logé dans un écran sur sa poitrine, avec des bras mécaniques et un visage déformé.<br><br>

L'histoire d'Arnim Zola dans les comics est marquée par ses tentatives de transcender les limites de l'humanité en utilisant la science et la génétique. Il représente la facette sombre et dépravée de la quête du pouvoir et de la manipulation de la vie elle-même.
</p> 
</p>
  </div>
</div>
</body>
</html>
