<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Enchantress</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>ENCHANTRESS</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://static.tvtropes.org/pmwiki/pub/images/amora.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Amora ;</li>
<li><strong>Profession(s) : </strong>Sorcière, ancienne infirmière, serveuse de cuisine, assistante de production, actrice ;</li>
<li><strong>Famille : </strong>Loreleï la Reine des glaces (sœur), Bragi (époux dans une incarnation antérieure) ;</li>  
<li><strong>Espèce : </strong>Asgardienne ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Manipule l'énergie mystique (peut lancer des éclairs d'énergie, créer des boucliers protecteurs et projeter des rafales d'énergie destructrice), Projection d'illusions (créer des illusions persuasives, trompant les sens des autres personnes, peut altérer la perception de la réalité, créant des illusions visuelles, auditives ou encore tactiles), manipule les émotions (influence les émotions et les désirs des autres, peut attiser la colère, la peur, la passion ou l'amour, manipulant ainsi les actions et les décisions de ses cibles), possède un charme envoûtant et une beauté surnaturelle qui lui permettent de manipuler et de contrôler les autres à sa guise, longévité (possède une longévité accrue, ce qui signifie qu'elle vieillit plus lentement que les humains ordinaires), peut invoquer des sorts de protection, de guérison et d'autres sorts spécialisés en fonction de ses besoins ;</li> 
<li><strong>Caractéristique(s) : </strong>Excellente chanteuse (pour séduire et hypnotiser ses victimes), possède des connaissances mystiques, experte dans l’art de la séduction ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Asgardiens, ancien membre du Conseil noir, des Avengers de Magnéto, alliée occasionnelle de Loki, ancienne partenaire de Skurge l’Exécuteur, ancien membre des premiers Maîtres du Mal, des Laquais du Mandarin, des Libératrices, ancienne alliée d’Arkon et de Power-Man ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Thor, Lady Sif, Valkyrie, Skurge l'Exécuteur, les Avengers.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">

Son histoire remonte à Asgard, le royaume des dieux nordiques. Amora, également connue sous le nom d'Enchantress, était une jeune femme asgardienne qui s'est tournée vers la magie et est devenue l'une des sorcières les plus puissantes de son monde.<br><br>

En tant que sorcière, Amora a acquis des pouvoirs magiques remarquables, notamment la manipulation de l'énergie mystique, la projection d'illusions et la capacité à influencer les émotions des autres. Cependant, ses ambitions et son goût pour le pouvoir l'ont souvent conduite sur un chemin sombre.<br><br>

Amora est devenue obsédée par le dieu du tonnerre, Thor, et a cherché à l'attirer à elle en utilisant ses pouvoirs de séduction et de manipulation. Elle a également été en rivalité avec d'autres femmes puissantes d'Asgard, comme Lady Sif et Valkyrie, dans sa quête pour obtenir plus de pouvoir et d'influence.<br><br>

Malgré ses aspirations égoïstes, Amora a parfois été forcée de s'allier avec les héros, notamment Thor, pour faire face à des menaces communes. Cependant, sa nature manipulatrice et sa soif de pouvoir ont souvent fait d'elle une antagoniste redoutable.<br><br>

Amora a croisé le chemin de nombreux héros de Marvel, tels que Thor, les Avengers et les Defenders, dans des affrontements magiques et des manipulations sournoises. Ses intrigues et ses tentatives de domination ont causé des troubles et des défis auxquels les héros ont dû faire face.<br><br>

Bien que l'Enchantress soit généralement considérée comme une antagoniste, il y a eu des moments où des aspects plus complexes de sa personnalité ont été explorés. Des histoires ont mis en évidence ses vulnérabilités, sa recherche de reconnaissance et ses relations tumultueuses, notamment avec Skurge l'Exécuteur.<br><br>

Dans l'ensemble, l'histoire d'Amora est celle d'une sorcière puissante et manipulatrice qui a utilisé ses pouvoirs pour poursuivre ses propres ambitions. Son charme envoûtant et son pouvoir magique ont fait d'elle une adversaire redoutable pour de nombreux héros de l'univers Marvel.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
