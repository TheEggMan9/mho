<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cosmo</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>COSMO</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/ba/Cosmo_the_Spacedog.jpg/220px-Cosmo_the_Spacedog.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Cosmo ;</li>
<li><strong>Profession(s) : </strong>Chef de la sécurité de Knowhere (une planète) ;</li>
<li><strong>Famille : </strong>Inconnu ;</li>  
<li><strong>Espèce : </strong>Chien terrestre altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Télépathe capable de lire 'esprit des autre ou de leur faire partager ses souvenirs, dresse des barrières psychiques, manipulation mental (atténue la douleur, rend inconscient ou amnésique, paralyse ou détecter leur présence), capable de générerdes rafales d'énergie ainsi que des champ de force autour de lui, durée de vie plus longue, porte une combinaison spatiale et autour de son cou est  accroché une envelop</li> 
<li><strong>Caractéristique(s) : </strong>Intelligence accrue ;</li>
<li><strong>Affiliation(s) : </strong>Les gardiens de la Galaxie ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Thanos, les Ravageurs (groupe de pirates de l'espace dirigé par Yondu), Ronan l'Accusateur, les Badoon.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Cosmo, à l'origine nommé Laika, était un chien terrestre qui a été envoyé dans l'espace par les Soviétiques lors de la guerre froide. Au lieu de périr, Laika a été exposé à des radiations cosmiques qui ont altéré son corps et augmenté son intelligence et ses pouvoirs psychiques. Il est devenu Cosmo, un être canin doté d'une intelligence humaine et de capacités mentales exceptionnelles.<br><br>

Après son altération, Cosmo est devenu le chef de la sécurité de Knowhere, une station spatiale située dans le crâne d'un Céleste déchu. Il a utilisé ses pouvoirs psychiques pour maintenir la sécurité de la station et est devenu un membre précieux des Gardiens de la Galaxie.<br><br>

Cosmo a travaillé aux côtés des Gardiens de la Galaxie, un groupe hétéroclite de héros cosmiques, pour protéger l'univers contre les menaces. Il a participé à de nombreuses missions et aventures, combattant des ennemis tels que Thanos, les Ravageurs et Ronan l'Accusateur.<br><br>

Au fil du temps, Cosmo est devenu un membre apprécié de l'équipe des Gardiens de la Galaxie, contribuant avec son intelligence, ses pouvoirs psychiques et sa loyauté. Il est souvent considéré comme un conseiller et un guide pour les Gardiens, utilisant ses capacités pour surveiller les dangers potentiels et protéger ses coéquipiers.<br><br>

En tant que chien cosmique doté de pouvoirs psychiques, il apporte une dimension intéressante à l'univers Marvel et joue un rôle important dans les aventures des Gardiens de la Galaxie.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
