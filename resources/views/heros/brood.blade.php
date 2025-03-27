<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Brood</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>BROOD</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://pm1.aminoapps.com/6632/baa531daa5c77c8a1ed0f20cd4600fef533db898_00.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Aucun ;</li>
<li><strong>Profession(s) : </strong>Aucune ;</li>
<li><strong>Famille : </strong>(Reine suprême) ;</li>  
<li><strong>Espèce : </strong> Brood ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Manipule l'énergie, facteur guérisseur rapide, vol, métamorphose ;</li> 
<li><strong>Caractéristique(s) : </strong>S'adapte facilement à différents environnements et situations ;</li>
<li><strong>Affiliation(s) : </strong>Aucune ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>X-Men, Captain Marvel, les Sh'iar, les Gardiens de la Galaxie.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Les Broods sont une race extraterrestre redoutable et parasitaire dans l'univers Marvel. Leur histoire remonte à des millénaires, lorsque leur espèce a évolué pour devenir une société basée sur l'infestation et la conquête. Ils ont développé une méthode de reproduction dans laquelle ils implantent leurs œufs dans les corps d'autres espèces, les transformant en membres de leur propre race.<br><br>

Ils sont dirigés par une reine suprême qui contrôle la ruche et donne des ordres à ses sujets. Leur objectif principal est d'étendre leur influence et de conquérir d'autres mondes. Ils ont ciblé plusieurs planètes, dont la Terre, pour y propager leur présence et asservir les populations locales.<br><br>

Dans l'univers Marvel, les Broods ont souvent affronté les X-Men. Ils ont lancé plusieurs invasions majeures sur Terre, cherchant à utiliser l'humanité comme une nouvelle source d'hôtes pour leur progéniture. Les X-Men ont été en première ligne de défense contre les Broods, s'efforçant de les arrêter et de sauver ceux qui ont été infectés.<br><br>

Les Broods ont également eu des affrontements avec d'autres héros Marvel, tels que Captain Marvel et les Gardiens de la Galaxie, qui ont combattu leur menace sur différents fronts de l'univers. Leur cruauté, leur instinct de survie et leur capacité à se reproduire rapidement en font une race extraterrestre redoutable.<br><br>

Malgré leur nature parasitaire, les Broods ne sont pas entièrement dépourvus d'individus rebelles. Il y a eu des cas de Broods se retournant contre leur propre espèce et se joignant aux héros pour combattre leurs anciens compatriotes.<br><br>

L'histoire des Broods dans les comics Marvel est marquée par de nombreuses batailles épiques et des moments de tension dramatique, où les héros doivent faire face à la menace implacable de ces parasites extraterrestres pour protéger l'humanité et l'univers.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
