<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Deadpool</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DEADPOOL</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://cdn.shopify.com/s/files/1/0015/6873/5334/products/75960620089400161_296x450.jpg?v=1664664992" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Wade T. Wilson ;</li>
<li><strong>Profession(s) : </strong>Mercenaire, aventurier, ancien homme de main, agent gouvernemental, soldat, sumotori ;</li>
<li><strong>Famille : </strong>parents non identifiés, Vanessa Carlysle (Copycat, femme), Eleanor Camacho (peut-être fille) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, facteur guérisseur accéléré (peut régénérer des membres entiers ou des organes vitaux), Immunité mentale (immunité naturelle contre les pouvoirs télépathiques) ;</li> 
<li><strong>Caractéristique(s) : </strong>Redoutable combattant à mains nues et tireur, maîtrise des arts martiaux, maître des techniques d’assassinat, maniement de armes blanches, parle couramment le japonnais/l'espagnole/l'allemand... ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre de X-Force, du Deadpool Corps, des X-Men, de l’Agence-X, du Six Packs, de l’Eglise Unique Mondiale, de DP Inc, de l’Arme-X, des Héros à Louer,<br> des Défenseurs secrets, des Terrifics, du Département K, ancien employé de Landau, Luckman & Lake, de Mr Tolliver, de Kingpin, du Maître de corvées ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Ajax (Créateur de deadpool), T-Ray, le Jokrer (tueur sadique et psychotique), Cable, Taskmaster, Black Tom Cassidy (mutant irlandais avec la capacité de manipuler la végétation).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Wade Wilson était autrefois un mercenaire spécialisé dans les opérations spéciales. Mais sa vie a radicalement changé lorsqu'il a été diagnostiqué avec un cancer en phase terminale. Dans l'espoir de trouver un remède, il s'est porté volontaire pour un programme secret connu sous le nom de Weapon X, visant à créer des super-soldats.<br><br>

Sous l'égide de Weapon X, Wilson a été soumis à des expériences brutales qui ont activé son gène de guérison latent, lui conférant une capacité de régénération accélérée. Cependant, ces expériences ont également déformé son apparence, le laissant défiguré. Il a adopté le nom de Deadpool, inspiré par un pool de paris concernant lequel des sujets de Weapon X survivrait.<br><br>

Après avoir échappé à Weapon X, Deadpool est devenu un mercenaire à part entière, vendant ses talents de combattant et de tueur à gages. Il est devenu célèbre pour son sens de l'humour décalé, son style de combat acrobatique et son habileté à briser le quatrième mur en interagissant directement avec les lecteurs.<br><br>

Au fil des ans, Deadpool s'est retrouvé impliqué dans de nombreux événements et croisements de l'univers Marvel. Il a souvent collaboré avec des héros tels que les X-Men et les Avengers, mais sa nature imprévisible et ses méthodes non conventionnelles l'ont également amené à se confronter à d'autres héros.<br><br>

Deadpool a une galerie d'ennemis récurrents, y compris Ajax, T-Ray, le Joker, Cable et Taskmaster, avec lesquels il s'est battu et a noué des relations complexes au fil du temps.<br><br>

Outre ses aventures en tant que mercenaire, Deadpool a également connu des moments de vulnérabilité et de recherche de rédemption. Il a développé des relations personnelles, notamment avec sa partenaire et amoureuse Vanessa Carlysle, connue sous le nom de Copycat.<br><br>

Dans l'ensemble, l'histoire de Deadpool est celle d'un anti-héros complexe, qui jongle entre la violence, l'humour et la quête de son identité, tout en cherchant à trouver un équilibre entre ses démons intérieurs et ses motivations altruistes. 
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
