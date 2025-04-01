<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Hit-Monkey</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>HIT-MONKEY</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://www.superherodb.com/pictures2/portraits/10/100/14778.jpg?v=1541251345" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Aucun ;</li>
<li><strong>Profession(s) : </strong>Tueur à gages ;</li>
<li><strong>Famille : </strong>Un clan de macaques ;</li>  
<li><strong>Espèce : </strong>Macaque japonnais (singe des neiges);</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Utilise tout types d'armes à feu et d'armes blanches ;</li> 
<li><strong>Caractéristique(s) : </strong>Supporte les climats froids, possède une dextérité podale lui permettant d’utiliser ses pieds de la même manière que ses mains, capable de copier des styles de combat et l’emploi des armes après avoir observé un être humain le faire, combat à mains/pieds nus, manie une grande variété d’armes ainsi que les arts martiaux, maîtrise les technique de survie et l’emploi d’herbes médicinales de sa région natale ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre des Pros à Payer, des Howling Commandos du SHIELD, d’un clan de macaques ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Ghost, Bullets (chef de gang et tueur à gages), Scorpion, les Yakuzas (organisation criminelle japonaise).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Hit-Monkey est un singe macaque japonais qui est devenu un tueur à gages après avoir été témoin de l'assassinat de son clan de macaques par des assassins humains.<br><br>

Après cette tragédie, le singe macaque, entraîné par les souvenirs de son clan massacré, se lance dans une quête de vengeance impitoyable contre les assassins. Utilisant ses instincts naturels et sa grande agilité, il se transforme en un assassin redoutable, maîtrisant les arts martiaux et l'utilisation des armes à feu et d'armes blanches.<br><br>

Au cours de ses aventures, Hit-Monkey croise la route de différents héros Marvel tels que Deadpool, Spider-Man et les Avengers. Il a également affronté des ennemis tels que le Ghost et Bullets, des criminels redoutables.<br><br>

Malgré sa nature animale, Hit-Monkey possède une conscience et une intelligence développées, lui permettant de prendre des décisions réfléchies et de choisir ses cibles avec soin. Il est souvent dépeint comme un personnage solitaire et silencieux, se frayant un chemin à travers le monde du crime sans relâche.<br><br>

L'histoire de Hit-Monkey met en lumière des thèmes tels que la vengeance, la survie et la nature de l'identité. Son parcours est marqué par sa quête de justice pour son clan, ainsi que par sa lutte pour trouver sa place dans un monde humain.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
