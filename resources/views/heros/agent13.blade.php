<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Agent 13</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>AGENT 13</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/236x/b4/1c/99/b41c9981d8f0d1063320eb85baf3b27a--ms-marvel-marvel-heroes.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Sharon Carter ;</li>
<li><strong>Profession(s) : </strong>Coordinatrice des Vengeurs secrets, officier de terrain du <a href="shield.html" style="color: orange;">S.H.I.E.L.D</a>, ancienne directrice du S.H.I.E.L.D, ancien agent du S.H.I.E.L.D, espionne ;</li>
<li><strong>Famille : </strong>Harrison Carter (père), Amanda Carter (mère), Margaret (Peggy) Carter (tante, décédée) ;</li>  
<li><strong>Espèce : </strong>Humaine ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Utilise un arsenal varié d'armes et de matériel de haute technologie du S.H.I.E.L.D;</li> 
<li><strong>Caractéristique(s) : </strong>Maitrise les arts martiaux, combat à mains nues ;</li>
<li><strong>Affiliation(s) : </strong>Coordinatrice des <a href="/heros/avengers" style="color: orange;">Avengers</a> secrets, membre du S.H.I.E.L.D, ancienne membre de la Force Féminine, agent infiltrée au sein de l’<a href="/heros/aim" style="color: orange;">A.I.M</a> et du Kübekült ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Batroc, <a href="/heros/crossbones" style="color: orange;">Crossbones</a>, <a href="/heros/redSkull" style="color: orange;">Red Skull</a>, <a href="viper/heros/" style="color: orange;">Viper</a>, <a href="/heros/hydra" style="color: orange;">HYDRA</a></a>.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Sharon Carter est née  dans une famille d'agents secrets et a été initiée très tôt au monde de l'espionnage. Elle a rejoint l'organisation S.H.I.E.L.D, où elle a été formée en tant qu'agent compétente et redoutable. Sharon est devenue une alliée fidèle et une partenaire d'action de nombreux héros, en particulier de <a href="/heros/captainAmerica" style="color: orange;">Captain America</a>, avec qui elle a développé une relation amoureuse.<br><br>

Au sein de S.H.I.E.L.D, Sharon Carter a participé à de nombreuses missions secrètes et à des opérations de renseignement pour protéger la paix et combattre les menaces internationales. Elle a montré ses compétences en combat, en infiltration et en stratégie, devenant une agent de terrain d'élite.<br><br>

Sharon a été confrontée à de nombreux ennemis au cours de sa carrière. Elle a affronté des adversaires tels que Batroc, Crossbones, Red Skull et viper. En tant qu'espionne aguerrie, elle a utilisé son intelligence et ses compétences pour faire face à ces défis.<br><br>

Au fil des années, Sharon Carter a été impliquée dans des événements majeurs de l'univers Marvel, notamment dans des conflits politiques et des complots internationaux. Elle a également été membre des Secret Avengers, une équipe secrète d'agents opérant dans l'ombre.<br><br>

L'histoire de Sharon Carter est très évolutive, elle a joué un rôle important dans les histoires de Captain America et a été représentée comme une héroïne courageuse et loyale. Son expertise en espionnage et son dévouement à la justice en font un personnage emblématique de l'univers Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
