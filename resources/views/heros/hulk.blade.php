<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hulk</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>HULK</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/474x/78/d8/da/78d8daac0cd7f2842664d6714760fe2d--hero-marvel-marvel-dc-comics.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Robert Bruce Banner ;</li>
<li><strong>Profession(s) : </strong>Aventurier, agent fédéral, chercheur et physicien nucléaire, ancien guerrier, souverain de Sakaar, chef rebelle, gladiateur, esclave, mécanicien, chef du Panthéon, homme de main, lad, banquier, marin, fermier, ouvrier en bâtiment, assistant dans une école spécialisée, serveur, plongeur (de cuisine), ouvrier dans un carnaval, mineur, métallurgiste, concierge ;</li>
<li><strong>Famille : </strong>Elizabeth (Betty) Ross Talbot Banner (la Miss Hulk rouge, première épouse), Caiera (seconde épouse, décédée), Skaar (fils), Hiro-Kala (fils, décédé), Lyra (Miss Hulk, fille), Brian Banner (père, décédé), Rebecca Banner (mère, décédée), Bruce Banner (grand-père paternel, probablement décédé), une grand-mère paternelle non identifiée (probablement décédée), Susan (nom de famille inconnu, grand-mère maternelle, probablement décédée), Susan Elizabeth Banner (Susan Drake, tante paternelle, probablement décédée), Elaine Banner Walters (tante paternelle), William Morris Walters (oncle par alliance), Jennifer Walters (Miss Hulk, cousine),<br> Cassandra Walters Pike (tante par alliance), David Pike (cousin), Thaddeus E. Ross (le Hulk rouge, beau-père) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains ;</li> 
<li><strong>Caractéristique : </strong>Génie intellectuel, corps irradié par des rayons Gamma, personnalités multiples ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Avengers, des Illuminati, du SHIELD, ancien membre des Liés en Guerre, des Défenseurs, des Cavaliers d’Apocalypse, d’une éphémère version des Quatres Fantastique, du Pantheon, des Trois Titans, des Hulkbusters de la Contre-Rerre de Franklin Richards, de l’Ordre, ancien membre des Hulkbusters (comme Bruce Banner) ;</li>
<li><strong>Ennemi(s) récurren(s) : </strong>L'Abomination, le Leader, Red Hulk, Gargoyle, Maestro ;</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Bruce Banner est née le 9 décembre 1969 à Dayton, dans l'Ohio, aux États-Unis. Il a été exposé à une intense explosion de rayons gamma lors d'un test de bombe. Cet accident a provoqué une mutation qui transforme Banner en Hulk, une créature géante verte dotée d'une force surhumaine et d'une rage dévastatrice. Hulk est le résultat de la colère et du stress émotionnel de Banner.<br><br>

Au début, Hulk était considéré comme un monstre incontrôlable et était souvent poursuivi par l'armée dirigée par le Général Thunderbolt Ross, qui est également le père de Betty Ross, l'amour de Banner. Hulk a été impliqué dans de nombreux affrontements avec l'armée, provoquant une destruction massive.<br><br>

Au fil des ans, Hulk a développé différentes personnalités et a connu plusieurs transformations. Il y a eu le Hulk Gris, le Hulk Sauvage, le Hulk Merged (une combinaison de Banner et Hulk), et le Hulk Intelligent (le Professeur Hulk).<br><br>

L'histoire de Hulk a été marquée par ses conflits avec divers ennemis, y compris l'Abomination, un adversaire monstrueux tout aussi puissant que Hulk, et le Leader, un super-vilain doté d'une intelligence surhumaine. Hulk a également fait face à des adversaires tels que le Maestro, une version future tyrannique de lui-même, et le Red Hulk, une version transformée du Général Ross.<br><br>

Hulk a rejoint les Avengers et a eu des interactions complexes avec les autres membres de l'équipe. Il a également été membre des Defenders et a joué un rôle clé dans des événements majeurs de Marvel, comme la Guerre<br> Kree-Skrull et la Guerre du Chaos.<br><br>

L'histoire de Hulk a souvent exploré le conflit intérieur de Banner, qui lutte pour contrôler la puissance destructrice de Hulk tout en essayant de trouver un équilibre entre ses identités. Les thèmes de l'identité, de la colère, de la responsabilité et de l'acceptation de soi ont été au cœur des récits de Hulk.<br><br>

Dans l'ensemble, l'histoire de Hulk est celle d'un être puissant mais tourmenté qui tente de trouver sa place dans le monde tout en affrontant ses démons intérieurs et ses ennemis extérieurs. Sa dualité entre l'intelligence de Banner et la force brute de Hulk en fait un personnage complexe et fascinant.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
