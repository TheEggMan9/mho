<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Gambit</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>GAMBIT</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://static.tvtropes.org/pmwiki/pub/images/8acf7f74_4c6e_4faf_b963_396e2be2efb9.jpeg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Remy Etienne LeBeau ;</li>
<li><strong>Profession(s) : </strong>Ancien aventurier, voleur ;</li>
<li><strong>Famille : </strong>Jean-Luc LeBeau (père adoptif, décédé), Jacques LeBeau (grand-père par adoption, décédé), Rochelle LeBeau (grand-mère par adoption, décédée), Henri LeBeau (frère par adoption), Mercy LeBeau (belle-sœur) Bella Donna Boudreaux (ex-épouse), Theoren Marceaux (cousin), Etienne Marceaux (cousin, décédé), Marius Boudreaux (ex-beau-père, décédé), Julien Boudreaux (ex-beau-frère, décédé ;</li>  
<li><strong>Espèce : </strong>Mutant ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Agilité et réflexes surhumains, manipule l'énergie cinétique (capacité à charger les objets inanimés avec de l'énergie cinétique. Il peut charger des objets tels que des cartes à jouer, des bâtons ou des projectiles avec cette énergie explosive ainsi lorsque ces objets chargés entrent en contact avec quelque chose, ils explosent avec une force dévastatrice), possède un charme naturel et une capacité d'influence subtile sur les autres, en particulier sur les femmes (il peut utiliser cette hypnose charmante pour attirer ou distraire ses adversaires, bien que cela soit souvent présenté comme une caractéristique de son caractère plutôt que comme un véritable pouvoir mutant), résiste aux pouvoirs télépathiques, possède un jeu de cartes et un bâton télescopique ;</li> 
<li><strong>Caractéristique(s) : </strong>Expert en lancer de petits objets (cartes à jouer, clous...), voleur et pickpocket aguerri, acrobate, combat à nues, parle couramment l'anglais et le français ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Maraudeurs, ancien membres des Cavaliers d’Apocalypse, des X-Men, de la X-Treme Sanctions Executive (XSE), ancien patriarche des Guildes unifiées, de la Guilde des Voleurs ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Mister Sinister, Kingpin, The Marauders (groupe de mercenaires mutants) Bella Donna Boudreaux (ex-épouse et fille du chef des Assassins de la Guilde des Voleurs), Apocalypse.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Né en Louisiane, Remy a été élevé par la Guilde des Voleurs. En grandissant, il a perfectionné ses compétences en matière de vol, d'acrobatie et de manipulation d'énergie cinétique.<br><br>

Gambit a été par la suite recruté par le professeur Charles Xavier pour rejoindre les X-Men, une équipe de mutants qui se battent pour la coexistence pacifique entre les mutants et les humains. Il est devenu l'un des membres les plus populaires de l'équipe et a apporté son charme et son sens de l'humour distinctifs.<br><br>

L'histoire de Gambit est souvent marquée par son passé trouble et ses liens avec les Guildes des Voleurs de la Nouvelle-Orléans. Il a eu des relations complexes avec d'autres membres des guildes, notamment avec Bella Donna Boudreaux, l'intérêt amoureux de Gambit et membre de la Guilde des Assassins.<br><br>

Au fil des années, Gambit a été impliqué dans de nombreuses aventures avec les X-Men, combattant aux côtés de ses coéquipiers contre des menaces telles que Magnéto, Apocalypse et les Sentinelles. Il a également joué un rôle clé dans des événements majeurs de l'univers Marvel, notamment lors de l'histoire "Massacre des Morlocks".<br><br>

Gambit est connu pour ses compétences uniques, y compris sa capacité à charger les objets avec de l'énergie cinétique explosive, qu'il utilise comme armes lors des combats. Il est également un voleur agile et un combattant habile, utilisant ses talents pour infiltrer des endroits sécurisés.<br><br>

En dehors des X-Men, Gambit a eu des aventures en solo et a également été membre de différentes équipes, comme les X-Ternals et les Uncanny Avengers.<br><br>

L'histoire de Gambit est marquée par des hauts et des bas, des amitiés et des trahisons, ainsi que par son désir constant de rédemption pour son passé de voleur. Son charisme, son style distinctif et sa personnalité complexe en font l'un des personnages les plus populaires et appréciés de l'univers Marvel.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
