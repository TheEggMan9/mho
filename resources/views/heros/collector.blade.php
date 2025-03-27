<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Collector</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>COLLECTOR</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/236x/f1/69/c7/f169c76950ad76e5f1a558390a23bf8a--comic-book-characters-marvel-characters.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Taneleer Tivan ;</li>
<li><strong>Profession(s) : </strong>Collectionneur ;</li>
<li><strong>Famille : </strong>Matani (épouse, décédée), Carina Walters (fille, décédée), Michael Korvac (beau-fils, décédé) ;</li>  
<li><strong>Espèce : </strong>Extraterrestre (Elders) ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Immortel, manipule les énergies cosmiques, force surhumaine, télépathe ;</li> 
<li><strong>Caractéristique(s) : </strong>A accumulé des millions d’années de savoir sur les cultures, les langues, les rituels et les technologies d’innombrables races ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Doyens de l’Univers ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Les Gardiens de la Galaxie, Thanos, les Avengers, certains Elders.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Taneleer Tivan est l'un des Elders de l'Univers, un groupe d'êtres immortels et puissants provenant de différentes races à travers l'univers. Il a vécu pendant des milliards d'années et a consacré sa vie à la collecte d'artefacts, d'objets précieux et d'êtres vivants rares et uniques.<br><br>

Le Collectionneur a acquis une immense galerie d'artefacts extraterrestres et d'êtres vivants exotiques. Sa collection comprend des objets de grande puissance, tels que les Pierres de l'Infini, qui ont joué un rôle central dans de nombreuses histoires de Marvel.<br><br>

En tant que personnage ambigu, le Collectionneur a été impliqué dans de nombreux événements cosmiques et a souvent été en conflit avec d'autres héros et antagonistes de l'univers Marvel. Il a eu des interactions avec des groupes tels que les Avengers, les Gardiens de la Galaxie et même le titan Thanos.<br><br>

Bien qu'il soit considéré comme un collectionneur obsessionnel, le Collectionneur est animé par un désir de préserver et de protéger les objets de son univers en danger constant. Malgré son apparence excentrique et ses motivations parfois énigmatiques, il est reconnu comme étant l'une des entités les plus érudites et les plus puissantes de l'univers Marvel.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
