<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ebony Maw</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>EBONY MAW</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://upload.wikimedia.org/wikipedia/en/9/9d/Ebony_Maw.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Ebony Maw ;</li>
<li><strong>Profession(s) : </strong>Assassin, serviteur de Thanos ;</li>
<li><strong>Famille : </strong>Inconnue ;</li>  
<li><strong>Espèce : </strong>Inconnue ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Télépathe, manipulation mentale, resistance mentale accrue ;</li> 
<li><strong>Caractéristique(s) : </strong>Orateur habile et persuasif, doté d'une grande intelligence, stratège ;</li>
<li><strong>Affiliation(s) : </strong>Partenaire de Thane, ancien membre de l’Ordre noir ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Les Avengeurs, les Gardiens de la Galaxie, Doctor Strange, des héros cosmiques (Silver Surfer, Nova et les Hérauts de Galactus).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Ebony Maw est un individu mystérieux et puissant, doté de pouvoirs télépathiques et de manipulation mentale. Il est souvent présenté comme un conseiller et un manipulateur habile, utilisant ses capacités pour influencer les autres et manipuler les événements à son avantage.<br><br>

En tant que membre de l'Ordre Noir, Ebony Maw a servi Thanos, le célèbre super-vilain de l'univers Marvel. Il a participé à plusieurs missions aux côtés des autres membres de l'Ordre Noir, utilisant ses pouvoirs pour semer la discorde, infiltrer des groupes et manipuler les héros.<br><br>

Ebony Maw est connu pour sa rhétorique persuasive et son talent pour convaincre les autres de suivre sa volonté. Il est également un télépathe puissant, capable de lire les pensées et de manipuler les esprits des autres.<br><br>

Dans les récits Marvel, Ebony Maw a été impliqué dans des événements cosmiques et intergalactiques, combattant les héros et travaillant aux côtés de Thanos pour atteindre leurs objectifs communs. 
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
