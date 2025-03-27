<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Death</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DEATH</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://mbd-world.de/wp-content/uploads/2017/06/LadyDeath.png" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Death ;</li>
<li><strong>Profession(s) : </strong>Entité abstraite, incarnation de la mort ;</li>
<li><strong>Famille : </strong>Aucune ;</li>  
<li><strong>Espèce : </strong>Entité cosmique ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Peut adopter un nombre illimité d’apparence, peut tuer ou ressusciter l’être vivant de son choix ;</li> 
<li><strong>Caractéristique(s) : </strong>Ne possède aucun corps physique ;</li>
<li><strong>Affiliation(s) : </strong>Aucune ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Aucun.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
La Mort, en tant qu'entité cosmique dans les comics Marvel, est une force primordiale personnifiant la fin de la vie. Elle est représentée comme une figure féminine drapée de vêtements sombres et portant une cape.<br><br>

Son histoire est étroitement liée à certains personnages clés, notamment Thanos et Deadpool. Thanos est profondément amoureux de la Mort et cherche à la satisfaire en accomplissant des actes de destruction à grande échelle. Il est prêt à tout pour gagner son affection et se positionne souvent comme son champion.<br><br>

De son côté, Deadpool a également eu des interactions significatives avec la Mort. Leur relation est complexe, parfois amoureuse, parfois antagoniste. Deadpool est souvent confronté à la perspective de la mort, mais en raison de sa capacité de guérison rapide, il échappe souvent à son emprise.<br><br>

Dans les récits Marvel, la Mort est présentée comme une force inéluctable et inévitable. Elle est associée au cycle naturel de la vie et de la mort, et son influence se fait sentir dans les destinées des personnages.<br><br>

La Mort n'a pas d'histoire personnelle ou d'origine conventionnelle dans les comics Marvel. Elle est souvent dépeinte comme une entité éternelle et universelle, au-delà des concepts de temps et d'espace.<br><br>

En résumé, l'histoire de la Mort dans les comics Marvel est celle d'une force cosmique personnifiant la fin de la vie. Elle est associée à des personnages clés tels que Thanos et Deadpool, et joue un rôle symbolique important dans l'univers Marvel en tant que concept inéluctable de la condition humaine.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
