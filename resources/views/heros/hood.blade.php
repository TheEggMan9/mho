<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Hood</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>HOOD</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/236x/0d/27/51/0d2751118b026f67f5c6349c1d3aea72--hoods-marvel-comics.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Parker Robbins ;</li>
<li><strong>Profession(s) : </strong>Criminel professionnel, ancien seigneur de la pègre, ancien aventurier ;</li>
<li><strong>Famille : </strong>Arthur Robbins (père, décédé), Eliza Robbins (mère), John King (cousin), Breanne (fille) ;</li>  
<li><strong>Espèce : </strong>Humain ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Possède une cape mystique (lui permet de devenir invisible à volonté, de voir à travers toutes les illusions ou déguisements)/des bottes (lui permettent de marcher et de flotter dans l’air)et grâce à ces vêtements il peut aussi libérer une forme d’énergie électrique à partir de ses mains et se téléporter, utilise les Pierres de Normes (ont la puissance de réaliser tout ce que leur détenteur voulait. Il les utilisa ainsi, pour permettre à ses armes de projeter de l’énergie, pour accroître les capacités des membres de son syndicat et pour se téléporter), utilise deux généralement deux pistolets;</li> 
<li><strong>Caractéristique(s) : </strong>Leadership criminel, tireur d'élite ;</li>
<li><strong>Affiliation(s) : </strong> Ancien membre de la Cabale, fondateur et ancien dirigeant de son propre syndicat du crime;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Daredevil, les Avengers, Punisher, Spider-Man, Moon Knight.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Parker Robbins était un criminel de rue ordinaire, vivant dans les quartiers défavorisés de New York. Un jour, lors d'un braquage dans un entrepôt, il découvre une cape mystique appartenant à un gangster surnommé le Hood. En enfilant cette cape, Parker se retrouve doté de pouvoirs surnaturels.<br><br>

Utilisant ses nouveaux pouvoirs, Parker commence à monter les échelons du monde criminel, formant son propre gang et étendant son emprise sur la pègre de New York. Il adopte alors le nom de The Hood et devient un chef de gang redoutable.<br><br>

Au fil du temps, The Hood attire l'attention de plusieurs super-héros, notamment Daredevil, Spider-Man et les Avengers. Ces héros tentent de déjouer ses plans criminels et de mettre un terme à ses activités illégales.<br><br>

Tout au long de son parcours, The Hood cherche constamment à obtenir plus de pouvoir et à étendre son influence. Il se retrouve impliqué dans des affrontements avec d'autres criminels notoires, tels que Madame Masque, Wilson Fisk (Kingpin) et le Punisher.<br><br>

L'histoire de The Hood est également marquée par des conflits internes et des dilemmes moraux. Il est confronté à des choix difficiles, oscillant entre sa vie criminelle et ses responsabilités envers sa famille et ses proches.<br><br>

Au fil des années, The Hood est devenu un personnage illustrant les nuances et les complexités du monde criminel de l'univers Marvel. Son histoire est caractérisée par sa soif de pouvoir, ses confrontations avec des super-héros et sa place en tant que figure importante de la criminalité dans le paysage Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
