<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Crossbones</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>CROSSBONES</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://pm1.aminoapps.com/6382/43a01977cd7cde2d78298eb8566ca8cbab1e8be9_00.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Brock Rumlow ;</li>
<li><strong>Profession(s) : </strong>mercenaire, ancien assassin, instructeur à l’école pour criminels de Taskmaster ;</li>
<li><strong>Famille : </strong>Inconnu ;</li>  
<li><strong>Espèce : </strong>Humain ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Tout types d'armes à feu et d'explosifs, arbalète, lames retractables dans ses gants, poignards ;</li> 
<li><strong>Caractéristique(s) : </strong>Expert du combat à mains nues, maîtrise des arts martiaux et de technique militaires, pilote, tireur d'élite ;</li>
<li><strong>Affiliation(s) : </strong> ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Captain America, le SHIELD, Bucky Barnes, Falcon.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Brock Rumlow a commencé sa carrière en tant que membre des forces spéciales avant de devenir un agent redoutable pour HYDRA, une organisation criminelle et terroriste. Sous les ordres du Crâne Rouge, l'ennemi juré de Captain America, Crossbones est devenu un expert en arts martiaux, en tactique militaire et en maniement des armes à feu.<br><br>

En tant qu'agent d'HYDRA, Crossbones a participé à de nombreuses missions visant à semer la terreur et à promouvoir les objectifs malveillants de l'organisation. Il a été impliqué dans des actes de sabotage, des assassinats ciblés et des attentats terroristes, faisant de lui un adversaire redoutable pour Captain America et les forces de l'ordre.<br><br>

Crossbones est motivé par sa loyauté fanatique envers HYDRA et sa haine profonde envers Captain America. Il considère le héros patriotique comme un obstacle à la réalisation des plans diaboliques de l'organisation. Il a affronté Captain America à plusieurs reprises, utilisant ses compétences en combat rapproché et ses armes mortelles pour tenter de le vaincre.<br><br>

L'histoire de Crossbones est également marquée par sa participation à des événements majeurs de l'univers Marvel, notamment dans la saga "Civil War" où il est recruté par le Crâne Rouge pour former une équipe de super-vilains appelée les "Thunderbolts". Dans l'événement "Secret Empire", Crossbones joue un rôle clé en aidant le Crâne Rouge à prendre le contrôle des États-Unis.<br><br>

Dans l'ensemble, l'histoire de Crossbones est celle d'un agent impitoyable et dévoué d'HYDRA, engagé dans une lutte sans merci contre Captain America et ceux qui se dressent sur son chemin.





</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
