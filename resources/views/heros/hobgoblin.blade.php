<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Hobgoblin</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>HOBGOBLIN</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/236x/70/9e/8c/709e8c738fa8eb65b31607a81bf1f4b5--marvel-villains-marvel-characters.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Roderick Kingsley ;</li>
<li><strong>Profession(s) : </strong>PDG et criminel professionnel, ancien grand couturier  ;</li>
<li><strong>Famille : </strong>Daniel Kingsley (frère, décédé) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, utilise des grenades incendiaires et des bombes libérant de la fumée et des gaz, se déplace sur un planeur en forme de chauve-souris (doté de lames tranchantes), possède des gants permettant de liberer des décharges électriques ;</li> 
<li><strong>Caractéristique(s) : </strong>Possède de vastes connaissances en chimie/en biologie/en hypnose, ;</li>
<li><strong>Affiliation(s) : </strong>Ancien allié de la Rose (Richard Fisk, fils du Kingpin), employeur de nombreux hommes de mains ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Spider-Man, Green Goblin, Spider-Girl (fille de Peter Parker, alias Spider-Man), Black Cat, Jack O'Lantern (super-vilains possédant une version modifiée du costume et du matériel du Bouffon Vert).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Kingsley était un homme d'affaires prospère et un criminel manipulateur. Il découvrit un repaire abandonné du Green Goblin, où il trouva des gadgets, des formules chimiques et un journal contenant les secrets du Bouffon Vert. Utilisant ces connaissances, Kingsley créa son propre alter ego criminel le "Hobgoblin".<br><br>

En tant que Hobgoblin, Kingsley devint un ennemi redoutable de Spider-Man. Il utilisait des gadgets, des armes et une planche à réaction appelée le "Screaming Needle" pour mener à bien ses plans criminels. Kingsley était particulièrement habile à manipuler les autres criminels et à jouer sur les rivalités entre eux.<br><br>

Après Roderick Kingsley, plusieurs autres individus ont endossé le manteau du Hobgoblin, notamment Jason Macendale, Ned Leeds et Phil Urich. Chacun d'eux apporta sa propre variation au personnage, avec des motivations et des histoires différentes. Certains cherchaient le pouvoir et la richesse, tandis que d'autres étaient motivés par des raisons personnelles.<br><br>

Au fil des ans, le Hobgoblin a été impliqué dans des événements majeurs de l'univers Marvel et a affronté de nombreux héros, en particulier Spider-Man. Ses rivalités avec d'autres super-vilains tels que Jack O'Lantern et le Green Goblin ont également été mises en avant.<br><br>

En résumé, l'histoire du Hobgoblin est marquée par l'existence de plusieurs personnes ayant endossé le rôle, chacune avec ses propres motivations et histoires. Le personnage est connu pour sa ruse, sa manipulation et ses gadgets, en faisant un ennemi redoutable pour Spider-Man et d'autres héros de l'univers Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
