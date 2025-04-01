<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Galactus</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>GALACTUS</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i0.wp.com/www.lacasadeel.net/wp-content/uploads/2014/07/Galactus.jpg?resize=588%2C446&ssl=1" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Galan ;</li>
<li><strong>Profession(s) : </strong>Destructeur de planètes ;</li>
<li><strong>Famille : </strong>Parents non identifiés dans l'univers précédent, Eternité et la Mort ont été décrits comme son père et sa sœur de façon figurée ;</li>  
<li><strong>Espèce : </strong>Entité cosmique ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Consomme des planètes (enlève l'énergie vitale d'une planète entière pour se nourrir et maintenir sa propre existence et ainsi cette consommation dévastatrice peut laisser une planète désolée et sans vie), manipulation cosmique (maîtrise totale des énergies cosmiques, lui permettant de manipuler et de contrôler les forces de l'univers. Il peut créer des décharges d'énergie dévastatrices, manipuler la matière et l'énergie, voyager à travers l'espace et le temps, et même altérer la réalité à un niveau cosmique), possède une protection cosmique qui le rend pratiquement invulnérable à la plupart des attaques physiques et énergétiques et est capable de résister aux attaques des super-héros les plus puissants de l'univers Marvel, a la capacité de créer des êtres surpuissants connus sous le nom de "Hérauts de Galactus", ils sont dotés de pouvoirs cosmiques et agissent comme des agents pour Galactus, l'aidant à trouver des mondes à consommer ;</li> 
<li><strong>Caractéristique(s) : </strong>Possède une connaissance étendue de l'univers et de ses mystères ainsi que des forces cosmiques, des réalités parallèles et des secrets de l'univers ;</li>
<li><strong>Affiliation(s) : </strong>Membre occasionnel du Tribunal Cosmique, employeur d'une série de hérauts ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong> Le Surfer d'Argent, Terrax (ancien héraut de Galactus), Morg (ancien héraut de Galactus), Les Defenders, les Celestials (race extraterrestre ancienne et puissante).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Son histoire remonte à des milliards d'années. Autrefois, il était un homme nommé Galan qui vivait sur la planète Taa II de l'univers précédent. Lorsque cet univers est entré en collision avec un autre (le big-bang), Galan fut le seul survivant et fut transformé en une nouvelle entité cosmique connue sous le nom de Galactus.<br><br>

En tant que Galactus, il est devenu un être colossal qui se nourrit de l'énergie vitale des planètes pour survivre. Son appétit insatiable le pousse à voyager à travers l'univers à bord de son immense vaisseau spatial, à la recherche de mondes à consommer. Cependant, ses actions ont attiré l'attention et la méfiance de nombreux héros et peuples de l'univers qui le considèrent comme une menace.<br><br>

Galactus a été le créateur et le maître de plusieurs hérauts, des êtres choisis pour trouver des planètes à consommer en son nom. Parmi les plus célèbres hérauts figurent le Surfer d'Argent, Terrax et Morg. Ces hérauts ont parfois fini par se rebeller contre Galactus et ont été impliqués dans des affrontements avec ce dernier.<br><br>

Au fil des années, Galactus a été confronté à de nombreux héros de l'univers Marvel qui ont tenté de l'arrêter ou de le convaincre de changer ses méthodes. Certains ont réussi à le repousser temporairement ou à le détourner de ses objectifs destructeurs, mais Galactus reste une force cosmique incontournable.<br><br>

Bien que Galactus soit souvent perçu comme une menace, certains récits ont exploré une dimension plus nuancée de son personnage. Certains ont mis en évidence son rôle essentiel dans l'équilibre cosmique et l'importance de sa fonction dans l'univers. Certains ont également exploré des alliances et des accords entre Galactus et d'autres personnages cosmiques, tels que les Celestials.<br><br>

Dans l'ensemble, l'histoire de Galactus est celle d'une entité cosmique complexe et énigmatique, dont les actions suscitent la crainte et la fascination dans l'univers Marvel.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
