<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Black Bolt</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>BLACK BOLT</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/originals/e4/b9/af/e4b9af1a81ed2f13331477cfb44a8a24.png" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Blackagar Boltagon ;</li>
<li><strong>Profession(s) : </strong>ancien souverain des Inhumains, de l’empire kree ;</li>
<li><strong>Famille : </strong>Médusalith Amaquelin Boltagon (<a href="/heros/medusa" style="color: orange;">Médusa</a>, cousine et épouse, séparée), Ahura (fils), Agon (père, décédé), Rynda (mère,décédée), <a href="/heros/maximus" style="color: orange;">Maximus le fou</a> (frère), Gorgone (cousin), Karnak (cousin), Triton (cousin), Crystalia Amaquelin Maximoff (<a href="/heros/crystal" style="color: orange;">Crystal</a>, cousine et belle-sœur), Pietro Maximoff<br> (<a href="/heros/vifArgent" style="color: orange;">Vif argent</a>, ex-cousin par alliance), Luna Maximoff (petite cousine et nièce), l’Innommable (cousin éloignée) ;</li>  
<li><strong>Espèce : </strong>Inhumain ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, résistant aux blessures, possède des réflexes surhumains, à une voix hypersonique destructrice, manipule molécules, peut voler vol ;</li> 
<li><strong>Caractéristique(s) : </strong>Quand il parle, il libère des électrons sous forme d'une rafale sonique, assez puissante pour détruire tout son entourage. Il est donc condamné à rester muet ;</li>
<li><strong>Affiliation(s) : </strong>Membre de la Famille royale des <a href="/heros/inhumains" style="color: orange;">Inhumains</a>, ancien membre des <a href="/heros/illuminati" style="color: orange;">Illuminati</a> ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Maximus le fou, les Krees (race extraterrestre avancée technologiquement), les Skruls (race extraterrestre capable de changer de forme pour ressembler à n'importe quelle autre forme vivante), <a href="/heros/thanos" style="color: orange;">Thanos</a>.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Black Bolt est le souverain des Inhumains, une race de superhumains génétiquement modifiés vivant dans la cité d'Attilan. Doté d'un pouvoir destructeur incroyable, sa voix est capable de provoquer des tremblements de terre et des destructions massives. En raison de cette puissance, Black Bolt est contraint de rester silencieux pour éviter de causer des catastrophes.<br><br>

Son histoire remonte à son enfance où il était le fils des dirigeants des Inhumains, Agon et Rynda. Lorsque Black Bolt découvre ses pouvoirs dévastateurs, il est confiné et élevé en isolation, apprenant à contrôler sa voix destructrice. Il devient le roi d'Attilan après la mort de ses parents.<br><br>

En tant que roi, Black Bolt est confronté à de nombreux défis, notamment la protection de son peuple contre les menaces internes et externes. Son frère, Maximus, est un ennemi récurrent qui cherche à prendre le pouvoir et à semer le chaos à Attilan. Black Bolt doit constamment faire face aux complots de Maximus tout en maintenant la stabilité de son royaume.<br><br>

Black Bolt est également confronté à des conflits avec d'autres forces, telles que les Krees, une race extraterrestre avancée qui a souvent tenté d'envahir Attilan, et les Skrulls, une race de métamorphes qui ont infiltré la cité à plusieurs reprises.<br><br>

En tant que membre des Illuminati, un groupe de super-héros influents, Black Bolt a été impliqué dans des événements majeurs de l'univers Marvel, tels que l'invasion Skrull et les crises cosmiques. Il a également eu des interactions avec d'autres héros, notamment les <a href="/heros/avengers" style="color: orange;">Avengers</a>.<br><br>

L'une des histoires les plus emblématiques de Black Bolt est "Infinity", où il est confronté à Thanos et ses agents dans leur quête des Gemmes de l'Infini. Black Bolt se retrouve au cœur d'un conflit cosmique et doit protéger non seulement son peuple, mais aussi l'univers entier.<br><br>

Malgré sa nature silencieuse, Black Bolt est un leader puissant et respecté parmi les Inhumains. Son sacrifice et son sens du devoir sont souvent mis en avant, et il est considéré comme l'un des personnages les plus emblématiques des Inhumains et de l'univers Marvel dans son ensemble.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
