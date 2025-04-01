<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ice man</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>ICE MAN</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://e1.pxfuel.com/desktop-wallpaper/239/599/desktop-wallpaper-iceman-by-spidermanfan2099-iceman-marvel-thumbnail.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Robert (Bobby) Louis Drake ;</li>
<li><strong>Profession(s) : </strong>Aventurier, ancien professeur, expert comptable, étudiant ;</li>
<li><strong>Famille : </strong>William Robert Drake (père), Madeline Beatrice Bass Drake (mère), Mary (cousine), Joe (cousin), Anne (tante) ;</li>  
<li><strong>Espèce : </strong>Mutant ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Cryokinésiste (génére et de manipule la glace et le froid, créer de la glace à partir de l'humidité environnante ou solidifier l'eau existante, forme des objets, des armes et des barrières en glace, ainsi que projeter des rafales ou des rayons de froid,  manipule l'énergie thermique, gele l'humidité de l'air ambiant et produit du froid intense, capable de baisser considérablement la température de son environnement, créant des tempêtes de glace et de neige), peut transformer son propre corps en une forme entièrement composée de glace solide (sous cette forme il est capable de se guérir plus rapidement, d'améliorer sa force et sa durabilité, et de se régénérer en reformant son corps à partir de l'humidité environnante), capable de voler ;</li> 
<li><strong>Caractéristique(s) : </strong>Combat à mains nues, expert comptable (créer des structures de glisse ou des plateformes volantes, Iceman peut se déplacer dans les airs et voler à des vitesses élevées) ;</li>
<li><strong>Affiliation(s) : </strong>Membre des X-Men, ancien membre des Douze, de Facteur-X, des Defenfers, des Champions ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Magnéto, Mystique, Sabretooth, Pyro (mutant capable de manipuler le feu), Juggernaut.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Bobby Drake découvre ses pouvoirs de manipulation de la glace et du froid à un jeune âge. Incapable de les contrôler au début, il rejoint les X-Men, une équipe de mutants dirigée par le Professeur Xavier, pour apprendre à maîtriser ses capacités.<br><br>

Au sein des X-Men, Iceman est connu pour sa personnalité décontractée et joyeuse. Son pouvoir de créer et de contrôler la glace lui permet de générer des armes, des boucliers et de projeter des attaques glacées. Il peut également se transformer en une forme entièrement composée de glace solide.<br><br>

Au fil des années, Iceman est confronté à de nombreux défis personnels et à des transformations de ses pouvoirs. Il découvre qu'il peut manipuler l'énergie thermique et générer des tempêtes de glace plus puissantes. Il explore également son identité sexuelle et révèle son homosexualité, ce qui en fait l'un des premiers super-héros LGBTQ+ des comics.<br><br>
  
Iceman a participé à de nombreuses aventures des X-Men, combattant des ennemis puissants tels que Magnéto, Mystique et Sabretooth. Il a également joué un rôle clé dans des événements majeurs de l'univers Marvel, notamment dans la lutte contre les Sentinelles et dans la protection des mutants contre les persécutions.<br><br>

En dehors des X-Men, Iceman a également fait équipe avec d'autres héros, tels que les Champions et les Uncanny Avengers. Il a été reconnu pour son sens de l'humour, sa camaraderie et son dévouement envers la cause des mutants.<br><br>

L'histoire d'Iceman est celle d'une évolution en tant que personnage, tant sur le plan de ses pouvoirs que de son développement personnel. Il est devenu un modèle pour la communauté LGBTQ+ et continue de combattre pour la coexistence pacifique entre mutants et humains, tout en montrant l'importance de l'acceptation de soi et de l'authenticité.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
