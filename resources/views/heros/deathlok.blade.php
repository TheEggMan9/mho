<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Deathlok</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DEATHLOK</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/236x/0b/c5/e8/0bc5e8a1b5dd291b03f4eec8b80d2554.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Michael (Mike) Collins ;</li>
<li><strong>Profession(s) : </strong>Aventurier, ancien consultant en informatique ;</li>
<li><strong>Famille : </strong>Tracy Collins (épouse), Nicholas Collins (fils), Patricia (Tisha) Collins (fille), Bill Collins (frère), Arlene (belle-sœur) ;</li>  
<li><strong>Espèce : </strong>cyborg ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, réflexes surhumains, sens aiguisés, facteur guérisseur accéléré, possède une interfaces informatiques grâce à ses implants cyborgs/un avion/un fusil d'assaut à plasma/un pistolet à plasma/un lance-grenades à plasma (intégré à son corps) ;</li> 
<li><strong>Caractéristique(s) : </strong>Expert en informatique et en sytèmes de sécurité informatiques, redoutable combattant et tacticien ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre des Défenseurs secrets, du Wild Pack, agent indépendant du SHIELD ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Harlan Ryker (scientifique responsable de la création de Deathlok), Simon Ryker (militaire, père de Harlan Ryker, joue un rôle important dans la création et la manipulation de Deathlok et cherche à contrôler Deathlok pour des objectifs militaires), Biohazard (super-vilain doté de pouvoirs biochimiques et de contrôle sur les toxines), Dreadkill <br>(possède des capacités similaires à Deathlok), le système de contrôle des cyborgs (Deathlok doit faire face au système de contrôle des cyborgs qui cherche à prendre le contrôle de son esprit et<br> de son corps).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
L'origine de Deathlok remonte au scientifique Michael Collins, qui travaille pour une entreprise appelée Cybertek. Collins est transformé en un cyborg puissant et amélioré grâce à une expérience menée par son propre employeur. ous le nom de Deathlok, il est utilisé comme un soldat implacable au service de Cybertek.<br><br>

Cependant, Collins finit par regagner partiellement le contrôle de son esprit et se rebelle contre Cybertek, devenant un héros combattant pour la liberté et la justice. Il se lance dans une quête pour retrouver son humanité perdue et découvrir la vérité sur sa transformation.<br><br>

Certaines versions de Deathlok se concentrent sur les thèmes de la manipulation et du contrôle, mettant en lumière les luttes internes de Collins pour préserver son humanité et résister à ceux qui cherchent à l'exploiter. D'autres versions explorent les conséquences psychologiques de sa transformation en cyborg et sa quête pour retrouver une vie normale.<br><br>

Deathlok a souvent été impliqué dans des intrigues liées à l'espionnage, aux complots militaires et aux questions éthiques entourant la technologie et l'humanité. Il a affronté des ennemis variés, allant des scientifiques corrompus aux super-vilains dotés de pouvoirs similaires aux siens.<br><br>

Dans l'ensemble, l'histoire de Deathlok met en avant les thèmes de l'identité, de la lutte pour la liberté personnelle et de la confrontation avec les conséquences de la technologie avancée. C'est un personnage qui incarne à la fois la puissance et les dilemmes moraux liés à la fusion de l'homme et de la machine.    
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
