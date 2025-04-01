<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>High Evolutionary</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>HIGH EVOLUTIONARY</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://comicvine.gamespot.com/a/uploads/scale_medium/0/77/179674-198376-high-evolutionary.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Herbert Edgar Wyndham ;</li>
<li><strong>Profession(s) : </strong>Généticien, scientifique, inventeur ;</li>
<li><strong>Famille : </strong>une mère non identifiée, une tante non identifiée (probablement décédées toutes les deux) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Possède des connaissances et des capacités intellectuelles quasiment sans limites, dispose de vastes pouvoirs psioniques qui lui permettent de réarranger la matière et l’énergie, peut faire évoluer ou régresser les êtres vivants, peut accroître ou décroître ses propres masse et taille, capable de voyager à travers les dimensions, peut créer des êtres vivants à partir de rien, capable de projeter des décharges énergétiques et a démontré des capacités, télépathe, télékinésiste, possède une armure (le protège par des systèmes de sauvegarde, lui fournit nourriture et assurant l’alimentation et le recyclage de son air,l'armure est capable de s’auto réparer et peut alors restaurer la vie du High Evolutionary en utilisant le code génétique stocké dans ses systèmes) ;</li> 
<li><strong>Caractéristique(s) : </strong>Meilleur généticien de la terre ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre de la Fondation du Futur, créateur des Hommes-Nouveaux, des Chevaliers de Wundagore, des Animutants, du Godpack et des Néo-Immortels ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Spider-Man, Thor, les Avengeurs, les X-Men, les Gardiens de la Galaxie.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Herbert Wyndham était un généticien et biologiste brillant. Animé par un désir de comprendre et de maîtriser l'évolution, il a mené des expériences audacieuses et innovantes. Finalement, il a réussi à créer une technologie permettant de manipuler l'ADN et d'accélérer l'évolution des organismes vivants.<br><br>

En utilisant cette technologie, Wyndham s'est transformé en une forme évoluée, devenant le High Evolutionary. Il a augmenté sa force, sa durabilité et a développé des capacités surhumaines. Avec sa nouvelle forme, il a créé une base appelée le Mont Wundagore, située dans les montagnes de la Transie, où il a poursuivi ses recherches et expériences sur l'évolution.<br><br>

Le High Evolutionary est devenu obsédé par l'idée de perfection évolutive. Il a cherché à créer une nouvelle race d'hommes-dieux en manipulant l'ADN de diverses espèces. Il a créé les "New Men", des êtres évolués avec des caractéristiques animales, dans le but de remplacer l'humanité.<br><br>

Au fil du temps, le High Evolutionary est entré en conflit avec de nombreux héros Marvel tels que Thor, Spider-Man, les Vengeurs et les X-Men. Ses actions controversées ont souvent entraîné des conséquences inattendues et des dilemmes moraux.<br><br>

Malgré ses aspirations évoluées, le High Evolutionary a montré une dualité dans ses motivations et ses actions. Il a été présenté à la fois comme un héros et comme un antagoniste, oscillant entre la recherche du bien-être de l'humanité et des ambitions égoïstes de perfection évolutive.<br><br>

Son histoire est marquée par des événements tels que la création de Counter-Earth, une réplique de la Terre où il a tenté de créer une nouvelle race, ainsi que son implication dans la saga du "Clone Saga" de Spider-Man.<br><br>

En somme, le High Evolutionary est un scientifique puissant, cherchant à maîtriser l'évolution et à remodeler l'humanité selon sa vision. Son parcours est marqué par des expériences génétiques controversées, des confrontations avec des héros Marvel et une quête incessante de perfection évolutive.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
