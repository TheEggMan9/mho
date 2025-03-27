<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Abmination</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="bg-image"> 
	  
	  <div class="imagedefond2" style="background-image: url('path/to/your/image.jpg'); min-height: 400px; background-size: cover; background-position: center;">
  <div class="container text-center py-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <form autocomplete="off">
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="input" placeholder="Rechercher un personnage" />
          </div>
          <ul class="list list-group"></ul>
        </form>
      </div>
    </div>
  </div>
</div>

  <h1>ABOMINATION</h1> <!--NOM HEROS -->
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
  
  
</style><p class="float-content"><img src="https://upload.wikimedia.org/wikipedia/en/4/4d/Abomination_%28Emil_Blonsky%29.jpg" class="image-align-left"> <!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Emil Blonsky ;</li>
<li><strong>Profession(s) : </strong>Ancien professeur de littérature, ancien espion, criminel professionnel ;</li>
<li><strong>Famille : </strong>Nadia Dornova (première épouse, divorcée), Nadia (Blonsky) (seconde épouse, divorcée) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, resistance surhumaine, facteur guérisseur ;</li> 
<li><strong>Caractéristique(s) : </strong>Parle couramment le russe, le serbo-croate et l'anglais ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre de l’équipage du vaisseau spatial Andromède, ancien agent du Maître des Galaxies, du général Thaddeus Ross (<a href="/heros/redHulk" style="color: orange;">Red Hulk</a>) et de <a href="/heros/leader" style="color: orange;"> Modok</a>, allié des Abominations/Oubliés ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/hulk" style="color: orange;">Hulk</a> , le<a href="/heros/leader" style="color: orange;"> Leader</a>, Red Hulk, <a href="/heros/hulkbuster" style="color: orange;">Hulkbuster</a>.</li>
<br>

<h2><u>Histoire</u></h2>
<p class="centrer">
Emil Blonsky, était un agent du KGB (service de renseignement soviétique) qui a été chargé de traquer Hulk, le géant vert aux pouvoirs surhumains. Dans sa quête pour surpasser Hulk, Blonsky s'est exposé à une version expérimentale du sérum du Super-Soldat, similaire à celui qui a créé <a href="/heros/captainAmerica" style="color: orange;">Captain America</a>. Cependant, les effets du sérum combinés à une dose de rayons gamma ont transformé Blonsky en une créature monstrueuse connue sous le nom de l'Abomination.<br><br>

En tant qu'Abomination, Blonsky possède une force, une endurance et une résistance surhumaines qui rivalisent avec celles de Hulk. Il a également une apparence reptilienne, avec une peau écailleuse et une taille démesurée. L'Abomination est devenu l'un des ennemis les plus puissants et récurrents de Hulk.<br><br>

Au fil des années, l'Abomination a affronté Hulk à de nombreuses reprises, provoquant des combats dévastateurs et destructeurs. Il a également croisé le chemin d'autres héros Marvel tels que <a href="/heros/thor" style="color: orange;">Thor</a>, <a href="/heros/ironMan" style="color: orange;">Iron Man</a> et les <a href="/heros/avengers" style="color: orange;">Avengers</a>. Dans certains récits, l'Abomination a cherché à s'emparer du pouvoir de Hulk pour devenir le monstre le plus puissant de l'univers.<br><br>

L'histoire de l'Abomination est marquée par des moments de rédemption, de rivalité et de conflit intérieur. À plusieurs occasions, il a tenté de retrouver son humanité et de se racheter, mais ses impulsions violentes et son désir de surpasser Hulk l'ont souvent ramené à son état monstrueux.
</p> <!--histoire-->
</p>    
  </div>
</div>
         <form action="/onglet/commentaire" method=" get">
              <button type="submit">Commenter</button>
         </form>
</body>
</html>
