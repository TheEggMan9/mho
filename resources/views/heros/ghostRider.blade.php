<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ghost Rider</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>GHOST RIDER</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://marvellegends.co.uk/wp-content/uploads/2022/12/7793c64d4fa2d4d32560e978070d90c8-1.jpeg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Jonathan (John ou Johnny) Blaze ;</li>
<li><strong>Profession(s) : </strong>ancien cascadeur, ancien directeur de cirque, divers autres métiers liés à la mécanique et aux motos ;</li>
<li><strong>Famille : </strong>Roxanne Simpson Blaze (épouse, décédée), Craig Blaze (fils, supposé décédé), Emma Blaze (fille, supposée morte), Barton Blaze (père, décédé), Naomi Kale (mère, décédée), Craig (Crash) Simpson (père adoptif, décédé), Mona Simpson (mère adoptive, décédée), Barbara Ketch (sœur, décédée), Daniel (Dan) Ketch (second Ghost Rider, frère), Andrew Kale (cousin, décédé), Jennifer Kale (cousine), Joshua Kale (grand-père, décédé) ;</li>  
<li><strong>Espèce : </strong>Entité surnaturelle ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, peut contrôler et projeter le feu infernal (ce feu ne brûle que les âmes des criminels ou des corrompus), possède une moto (créée à partir de l'énergie infernale) et chaîne une (souvent) enflammée ;</li> 
<li><strong>Caractéristique(s) : </strong>Motard, excellent cascadeurs et tireur (revolvers et fusils) ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre des Fils-de-Minuit, des Neuf, des Champions de Los Angeles, de la Légion des Monstre ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Méphisto, Blackheart (fils de Mephisto), Lilin (groupe de démons), Zarathos (esprit démoniaque avec lequel Johnny Blaze est lié en tant que Ghost Rider), Deathwatch (criminel qui cherche souvent à contrôler et à manipuler les forces surnaturelles pour ses propres desseins maléfiques).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
L'histoire de Johnny Blaze est celle d'un cascadeur de motos talentueux qui a conclu un pacte avec le diable pour sauver son père adoptif d'un cancer. Ce pacte a fait de lui le Ghost Rider, un justicier surnaturellement puissant lié à l'esprit d'un démon appelé Zarathos.<br><br>

En tant que Ghost Rider, Johnny Blaze parcourt les routes, cherchant à punir les criminels et à affronter les forces démoniaques qui menacent l'humanité. Son apparence change, avec son crâne enflammé et sa moto infernale, et il acquiert des pouvoirs tels que la force surhumaine, la régénération, la manipulation du feu et la capacité de projeter des flammes infernales.<br><br>

Au fil des ans, Johnny Blaze a affronté de nombreux ennemis, dont certains liés à son pacte avec Mephisto, le seigneur des enfers. Il a lutté contre Mephisto lui-même, ainsi que contre son fils Blackheart, qui a tenté de s'emparer du pouvoir de Ghost Rider. Il a également combattu d'autres démons, des sorciers maléfiques et des criminels surnaturels.<br><br>

L'histoire de Johnny Blaze est marquée par sa lutte contre son côté démoniaque, représenté par Zarathos. Il tente de garder le contrôle sur cet esprit puissant, souvent en affrontant des dilemmes moraux et des tentations sombres. Johnny Blaze doit constamment trouver l'équilibre entre sa propre humanité et les instincts vengeurs et destructeurs de Ghost Rider.<br><br>

Au fil du temps, d'autres personnages ont également endossé le rôle du Ghost Rider, mais Johnny Blaze reste l'incarnation la plus emblématique du personnage. Son histoire est celle d'un héros tourmenté, luttant contre les forces du mal tout en cherchant à se libérer de son lien avec les ténèbres et à trouver la rédemption.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
