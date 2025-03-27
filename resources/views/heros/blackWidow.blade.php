<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Black Widow</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>BLACK WIDOW</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://image.keycollectorcomics.com/media/bblack_widow_1_2004.jpg?height=600" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>	Natalia (Natasha) Alianovna Romanova ;</li>
<li><strong>Profession(s) : </strong>Espionne, ancienne ballerine/enseignante;</li>
<li><strong>Famille : </strong>Alexei Shostakov (le Garde rouge, mari, séparé), Vindiktor (supposé frère, décédé) ;</li>  
<li><strong>Espèce : </strong> Humaine ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Possède des bracelets (qui contiennent : du gaz soporifique, des émetteurs radios, un câble extensible ainsi qu’un petit dispositif capable d’émettre des décharges électrostatiques de haute fréquence), des petites capsules adhésives incrustées dans son uniforme qui lui permettent d’adhérer aux murs et aux plafonds ;</li> 
<li><strong>Caractéristique(s) : </strong>Maitrise des arts martiaux ;</li>
<li><strong>Affiliation(s) : </strong>Membre des <a href="/heros/avengers" style="color: orange;">Avengers</a>, du <a href="/heros/shield" style="color: orange;">S.H.I.E.L.D</a>, de l’Initiative, ancien membre des Héros à Louer (de <a href="/heros/mistyKnight" style="color: orange;">Misty Knight</a>), des <a href="/heros/thunderbolts" style="color: orange;">Thunderbolts</a>, du KGB, des Champions, des Libératrices, des Marvel Knights, de la Vengeance royale, <a href="/heros/buckyBarnes" style="color: orange;">Bucky Barnes</a>, <a href="/heros/captainAmerica" style="color: orange;">Captain America</a>, Boris Turgenov (la Dynamo pourpre II), <a href="/heros/hawkeye" style="color: orange;">Hawkeye</a>, <a href="/heros/daredevil" style="color: orange;">Daredevil</a> ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Les Super-soldats soviétiques.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Black Widow, également connue sous le nom de Natasha Romanoff, était à l'origine une espionne soviétique, formée dès son plus jeune âge à devenir une tueuse et une experte en infiltration. Elle est devenue membre du KGB et a été conditionnée pour devenir l'une des meilleures agents du programme de formation de la Chambre Rouge. Natasha a ensuite été recrutée par le gouvernement russe pour devenir la première Black Widow.<br><br>

Dans ses premières apparitions, Black Widow était une antagoniste des Avengers et a tenté de les infiltrer. Cependant, elle a finalement changé de camp et a rejoint les Avengers en tant que super-héroïne. Elle a également été membre de différentes équipes telles que les Champions et les Thunderbolts.<br><br>

Tout au long de son parcours, Black Widow a été impliquée dans de nombreuses aventures, combattant des ennemis tels que le <a href="/heros/doctorDoom" style="color: orange;">Doctor Doom</a>, d'<a href="/heros/absorbingMan" style="color: orange;">Absorbing-Man</a> et de <a href="/heros/taskmaster" style="color: orange;">Taskmaster</a>. Elle a également été liée à des personnages tels que Hawkeye, avec qui elle a entretenu une relation romantique et une amitié solide.<br><br>

L'histoire de Black Widow a été marquée par sa quête de rédemption, cherchant à racheter son passé d'espionne en utilisant ses compétences pour lutter contre l'injustice. Elle est une combattante accomplie, maîtresse des arts martiaux et experte en armes à feu. Elle est également connue pour sa célèbre ceinture de veuve noire, qui contient divers gadgets et dispositifs utiles dans ses missions.<br><br>

Au fil des années, Black Widow a eu plusieurs séries de bandes dessinées en solo, mettant en avant ses aventures en tant qu'espionne et super-héroïne. Son caractère, son intelligence et sa détermination en font l'un des personnages les plus appréciés de l'univers Marvel.<br><br>

L'histoire de Black Widow dans les comics a évolué et s'est développée au fil des décennies, mais elle reste une icône féminine forte et un membre essentiel de l'univers Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
