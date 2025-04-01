<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Attuma</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>ATTUMA</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://comicvine.gamespot.com/a/uploads/scale_medium/4/49448/3368930-attuma.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Attuma ;</li>
<li><strong>Profession(s) : </strong>Conquérant, ancien souverain d’Atlantis, souverain de Skarka, pillard ;</li>
<li><strong>Famille : </strong>Lady Gelva (ancienne compagne), Andromède (fille), Attumacht (ancêtre, décédé) ;</li>  
<li><strong>Espèce : </strong>Atlantes ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, excelent nageur, épée à trois lames ;</li> 
<li><strong>Caractéristique(s) : </strong>Guérrier redoutable, lutteur, cambat à mains nues, maniement des armes blanches et des armes à feu ;</li>
<li><strong>Affiliation(s) : </strong>Ancien chef des hordes barbares de Skarka, ancien membre des Dignes, ancien allié de Byrrah, Lemuel Dorcas, le Fantôme rouge, Ghaur, Ikthon, Krang, Llyra, le Requin-Tigre, ancien chef des Six Profonds, ancien membre de la Légion fatale ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/namor" style="color: orange;">Namor</a>, les <a href="/heros/avengers" style="color: orange;">Avengers</a>, <a href="/heros/shield" style="color: orange;">S.H.I.E.L.D</a>, les <a href="/heros/defenders" style="color: orange;">Defenders</a>, les Atlantes (race aquatique de la cité sous-marine d'Atlantis).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
 Attuma est un seigneur de guerre atlante, originaire de l'Atlantide, qui cherche constamment à étendre son pouvoir et à conquérir les océans. Il est connu pour sa force surhumaine, son leadership charismatique et sa capacité à commander les créatures marines.<br><br>

Attuma est souvent présenté comme un ennemi juré de Namor, le prince des mers. Leurs rivalités remontent à l'époque où ils étaient enfants et se sont poursuivies à l'âge adulte. Attuma voit Namor comme une menace à son propre pouvoir et cherche à le supplanter en tant que dirigeant de l'Atlantide.<br><br>

Au fil des années, Attuma a tenté de nombreuses fois de prendre le contrôle de l'Atlantide et de déclencher des guerres contre les peuples de la surface. Il a régulièrement affronté Namor et d'autres héros tels que les Avengeurs et les Defenders dans des batailles sous-marines épiques.<br><br>

Dans certaines histoires, Attuma a réussi à s'emparer brièvement du trône de l'Atlantide, mais ses règnes sont généralement de courte durée, car il est finalement repoussé par Namor et ses alliés. Malgré ses échecs répétés, Attuma continue de chercher des moyens de prendre le pouvoir et de venger ses défaites.<br><br>

Au-delà de son obsession pour Namor, Attuma est également souvent impliqué dans des conflits avec d'autres factions atlantes et avec des organisations telles que le S.H.I.E.L.D.<br><br>

En résumé, l'histoire d'Attuma dans les comics se concentre sur sa quête de pouvoir, son antagonisme envers Namor et sa volonté de dominer les océans, ce qui le place régulièrement en opposition avec les héros et les forces de la surface.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
