<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Agent Coulson</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>AGENT COULSON</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://pm1.narvii.com/5921/817905f9942d3a487967bdab140957ed3f9a30a0_00.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Phillip (Phil) Coulson ;</li>
<li><strong>Profession(s) : </strong>Agent du <a href="/heros/shield" style="color: orange;">S.H.I.E.L.D</a> , ancien ranger de l’armée américaine ;</li>
<li><strong>Famille : </strong>Un grand-père non identifié, une grand-mère non identifiée ;</li>  
<li><strong>Espèce : </strong>Humain ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Utilise un arsenal varié d'armes et de matériel de haute technologie du S.H.I.E.L.D ;</li> 
<li><strong>Caractéristique(s) : </strong>Tireur d'élite, expérimenté dans le combat à mains nues, maître du déguisement et du camouflage ;</li>
<li><strong>Affiliation(s) : </strong>Membre du S.H.I.E.L.D, des <a href="/heros/secretAvengers" style="color: orange;">Secret Avengers</a> (du S.H.I.E.L.D), ancien membre du second bataillon des Rangers ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/hydra" style="color: orange;">HYDRA</a>, Zodiac (organisation criminelle composée de douze membres, chacun représentant un signe du zodiaque), Graviton (ses pouvoirs sur la gravité lui permettent de contrôler les objets, de voler et même de manipuler des forces cosmiques massives), aim.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Phil Coulson est un agent du S.H.I.E.L.D, l'organisation d'espionnage et de maintien de la paix de l'univers Marvel. Il est réputé pour son dévouement, son professionnalisme et sa loyauté envers ses missions et ses collègues. Coulson a souvent été dépeint comme un agent expérimenté et compétent, faisant preuve d'une grande expertise en tactiques et en intelligence.<br><br>

Dans les comics, Coulson est généralement associé à des rôles de soutien et de liaison avec les super-héros. Il a été représenté travaillant étroitement avec des personnages tels que <a href="/heros/ironMan" style="color: orange;">Iron Man</a>, <a href="/heros/captainAmerica" style="color: orange;">Captain America</a> et les <a href="/heros/avengers" style="color: orange;">Avengers</a>, les aidant dans leurs missions et coordonnant les opérations du S.H.I.E.L.D.<br><br>

Son rôle dans les comics a été renforcé par sa popularité dans le MCU (Marvel Cinematic Universe), ce qui a conduit à l'introduction de certaines histoires spécifiques mettant en avant le personnage de Phil Coulson. Dans ces histoires, on peut le voir se débattre avec des enjeux liés à l'espionnage, aux complots politiques et aux menaces terroristes.<br><br>

Coulson est souvent représenté comme un homme dévoué à son travail, prêt à prendre des risques pour protéger le monde et garantir la sécurité de ceux qui lui sont chers. Sa détermination et son courage en font un allié précieux pour les super-héros, et son intégrité morale lui permet de prendre des décisions difficiles lorsque cela est nécessaire.<br><br>
 
Et, il continue d'être un personnage apprécié et joue un rôle significatif en tant qu'agent du S.H.I.E.L.D dans l'univers Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
