<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Drax</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DRAX</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://www.g-mart.com/static/f149214.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Arthur Sampson Douglas ;</li>
<li><strong>Profession(s) : </strong>Aventurier, agent de Kronos, autrefois agent immobilier, ancien saxophoniste ;</li>
<li><strong>Famille : </strong>Heather Douglas (alias Dragon-Lune, fille), Yvette Steckley Douglas (épouse, décédée), Pamela Douglas (alias Dragon-Soleil, nièce) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, son corps est invulnérable à toutes les formes de blessures physiques et peut survivre pour une durée de temps indéfinie sans air/sans nourriture et sans eau, peut voler en utilisant son énergie cosmique comme source de propulsion, possède deux poignards ;</li> 
<li><strong>Caractéristique(s) : </strong>Capable de sentir à tout instant la localisation de Thanos, expert dans le maniement des couteaux ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Gardiens de la galaxie, ancien partenaire de Cammi, ancien membre du Front Unifié, des Microns, de l’Infinity Watch, de la seconde Légion des Mort-vivants, des Defenders ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Thanos, Ronan l'Accusateur, Annihilus, Super-Skrull, Moondragon (combattante psychique).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
À l'origine, Drax était un être humain du nom d'Arthur Douglas. Lorsqu'il voyageait avec sa famille, leur voiture a été attaquée par le super-vilain extraterrestre Thanos. Pour dissimuler son crime, Thanos a tué toute la famille de Douglas. Suite à sa mort, Douglas a été confronté par Mentor, le père de Thanos, qui était opposé aux actions de son fils.<br><br>

Dans un acte de vengeance et de justice, Mentor a pris l'esprit de Douglas, avant qu’elle n’ait complètement disparue de son corps, et l'a placé dans un corps puissant qu'il a lui-même créé. Ce nouveau corps était destiné à devenir l'instrument de la destruction de Thanos. Mentor a choisi d'améliorer et de renforcer Douglas pour qu'il puisse rivaliser avec la puissance et les capacités de Thanos.<br><br>

Drax a été conçu dans le but de traquer et de vaincre Thanos. Son existence est motivée par la vengeance, car il cherche à venger la mort de sa famille en éliminant Thanos. Drax possède une force, une endurance et une résistance surhumaines, ainsi que des compétences exceptionnelles en combat au corps à corps.<br><br>

Au fil des ans, Drax a été impliqué dans de nombreuses aventures cosmiques et intergalactiques. Il a combattu des ennemis tels que Ronan l'Accusateur, Annihilus, Super-Skrull et sans oublier Thanos. Son parcours l'a également amené à se battre aux côtés de héros tels que les Gardiens de la Galaxie et les Avengers.<br><br>

Bien que Drax soit souvent associé à sa quête de vengeance contre Thanos, il a évolué en tant que personnage. Il a développé des liens avec d'autres héros et a joué un rôle important dans la défense de l'univers contre les menaces cosmiques.<br><br>

L'histoire de Drax est celle d'un guerrier implacable et puissant qui a été transformé en une arme vivante pour combattre le plus grand ennemi de l'univers. Son parcours est marqué par la recherche de justice et la quête de rédemption personnelle, tout en se battant pour protéger l'univers contre les forces du mal.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
