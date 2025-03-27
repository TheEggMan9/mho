<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Black Panther</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>BLACK PANTHER</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://m.media-amazon.com/images/W/MEDIAX_792452-T2/images/I/61kpriLjlBL.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>T'Challa ;</li>
<li><strong>Profession(s) : </strong>Souverain de la Cité des Morts, ancien monarque du Wakanda, scientifique, aventurier, ancien instituteur ;</li>
<li><strong>Famille : </strong>T'Chaka (père, décédé), N'Yami (mère, décédée), Ramonda (mère adoptive, deuxième épouse de T'Chaka), Ororo Munroe (Tornade, ex-épouse), <a href="/heros/shuri" style="color: orange;">Shuri</a> (la Panthère noire, sœur), Jakarra (demi-frère, décédé), Hunter (le Loup blanc, frère par adoption), Azzari le Sage (grand-père maternel, décédé), Chanda (la Panthère noire, grand-père paternel, probablement décédé), Nanali (grand-mère maternelle, décédée), S'yan (oncle), Bashenga (la Panthère noire, ancêtre, décédé) ; Ishanta, Joshua Itobo, Khanata, M'Koni Wheeler, Zuni (cousins) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Possèdes des sens aiguisés, des attributs physiques surhumains, un costume (fait en partit en vibranium, qui arrête les balles et absorbe leur énergie cinétique, possède une technologie de camouflage qui lui permet de faire passer sa tenu pour des vêtements civils, ), une dague énergétique, un des deux Glaives d'ébène et des griffes rétractables en vibranium ;</li> 
<li><strong>Caractéristique(s) : </strong>Génie intellectuel,  chasseur, pisteur, stratège, inventeur, scientifique, acrobate, gymnaste ;</li>
<li><strong>Affiliation(s) : </strong>Membre des <a href="/heros/illuminati" style="color: orange;">Illuminati</a>, ancien membre des <a href="/heros/avengers" style="color: orange;">Avengers</a>, des Secret Avengers, des <a href="/heros/fantasticFour" style="color: orange;">Fantastic Four</a>, de la Vengeance royale, ancien allié des Défenseurs, ancien financier de la Fantastic Force ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/killmonger" style="color: orange;">Killmonger</a>, <a href="/heros/ulysseKlaw" style="color: orange;">Ulysse Klaw</a>, <a href="/heros/mBaku" style="color: orange;">M'Baku</a>, <a href="/heros/buckyBarnes" style="color: orange;">White Wolfe</a>, Malice (<a href="/heros/nakia" style="color: orange;">Nakia</a>).</li>
<br>

  
<h2><u>Histoire</u></h2>
<p class="centrer">
T'Challa est le fils du roi T'Chaka et de la reine Ramonda du Wakanda. À la mort de son père, T'Challa hérite du titre de Black Panther, un rôle qui lui confère des pouvoirs surhumains et la responsabilité de protéger son peuple et le vibranium, le précieux métal du Wakanda.<br><br>

Au cours de son règne, Black Panther fait face à de nombreux défis, tant à l'intérieur qu'à l'extérieur du Wakanda. Il affronte des ennemis puissants tels que Killmonger, un rival qui souhaite prendre le trône, et Ulysses Klaw, un trafiquant d'armes obsédé par le vibranium.<br><br>

Black Panther est également un membre éminent des Avengers, rejoignant souvent leurs rangs pour défendre le monde contre des menaces globales. Il est respecté pour ses compétences en combat, son intelligence stratégique et sa technologie avancée.<br><br>

En tant que roi, T'Challa cherche à moderniser le Wakanda tout en préservant sa culture et ses traditions. Il joue un rôle clé dans le développement du pays et cherche à promouvoir la paix et la prospérité pour tous les Wakandais.<br><br>

Au-delà de ses responsabilités royales, Black Panther est un symbole d'espoir et de fierté pour son peuple et pour de nombreux fans à travers le monde. Son histoire explore des thèmes tels que l'héritage, le leadership et la recherche de l'équilibre entre les intérêts personnels et la responsabilité envers les autres.<br><br>

L'histoire de Black Panther est marquée par son dévouement envers le Wakanda, ses combats contre les ennemis du pays et son rôle en tant que membre des Avengers. Il est un personnage emblématique, qui incarne la puissance et la sagesse du roi guerrier africain.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
