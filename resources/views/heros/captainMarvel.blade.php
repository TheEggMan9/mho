<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Captain Marvel</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>CAPTAIN MARVEL</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://static.fnac-static.com/multimedia/Images/FR/NR/26/80/a0/10518566/1507-1/tsp20221209091447/Je-suis-Captain-Marvel.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Carol (Ace) Susan Jane Danvers
 ;</li>
<li><strong>Profession(s) : </strong>Directrice de la station orbitale Alpha Flight, aventurière, auparavant auteur, responsable des Opérations Tactiques du Département de la Sécurité intérieure, chef de la sécurité de la NASA à Cap Canaveral, agent des services secrets de l’Armée de l’Air, éditrice journaliste, vendeuse, agent de l’Armée de l’Air,<br> la CIA, le Ministère ;</li>
<li><strong>Famille : </strong>Joseph (Joe) Danvers (père, décédé), Marie Danvers (mère), Steven J. Danvers (frère, décédé), Joseph (Joe) Danvers Jr (frère), Benny (oncle) ;</li>  
<li><strong>Espèce : </strong>humaine altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Vol, Attributs physiques surhumains, émet des décharges de photon, absorbe diverses formes d’énergie (améliorant ainsi ses capacités) ;</li> 
<li><strong>Caractéristique(s) : </strong>techniques de combat militaire, espionne, maîtrise d'arts martiaux, combat aérien, stratège, parle le russe/le japonnais/l'allemand, écrivaine ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Ultimates, d’Alpha Flight (programme spatial), ancien membre d’A-Force, des Gardiens de la galaxie, des Avengers, de l’Initiative, de l’Opération Foudre, des Star-Jammers, de la Vengeance royale ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Yon-Rogg, Thanos, Moonstone, The supreme Intelligence.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Carol Danvers a été présentée pour la première fois dans les comics Marvel en tant qu'officier de l'armée de l'air et rédactrice en chef du magazine de sécurité aérienne. Dans une série d'événements, Carol a été exposée à une explosion accidentelle d'un appareil extraterrestre appelé le "Psyche-Magnitron". Cette exposition a fusionné son ADN avec celui de Mar-Vell, le héros kree connu sous le nom de Captain Marvel.<br><br>

Grâce à cette fusion, Carol a développé des pouvoirs surhumains, notamment une force surhumaine, une endurance accrue et la capacité de voler. Elle a adopté l'identité de Ms. Marvel et a commencé à combattre le crime et les menaces cosmiques en tant que super-héroïne.<br><br>

Au fil du temps, Carol a surmonté de nombreux défis personnels et a évolué en tant que personnage. Elle a joué des rôles importants dans des équipes telles que les Avengers, les X-Men et les Guardians of the Galaxy.<br><br>

En 2012, Carol a assumé le manteau de Captain Marvel, en hommage à son mentor Mar-Vell. Depuis lors, elle est devenue l'une des figures principales de l'univers Marvel, défendant la Terre et l'univers contre des menaces majeures.<br><br>

Son histoire a été marquée par des moments clés tels que sa relation avec Rogue, un membre des X-Men, qui a conduit à des conflits et à une évolution de leur dynamique. Elle a également été impliquée dans des événements majeurs tels que "Civil War II" et "The Life of Captain Marvel", qui ont exploré son passé, ses origines et sa place dans l'univers Marvel.<br><br>

Carol Danvers est souvent représentée comme une femme forte, courageuse et indépendante, qui incarne la détermination et l'inspiration. Son héritage en tant que Captain Marvel continue de s'étendre et de captiver les fans à travers ses aventures dans les comics.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
