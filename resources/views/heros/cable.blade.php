<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Cable</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>CABLE</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/236x/89/52/d0/8952d0e7c7f1256527bad8102607b422--cable-marvel-xmen.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Nathan Christopher Charles Summers ;</li>
<li><strong>Profession(s) : </strong>Aventurier, ancien mercenaire, ancien agent du gouvernement, ancien combattant de la liberté, professeur des Nouveaux Mutants puis de la X-Force ;</li>
<li><strong>Famille : </strong>Philip Summers (arrière-grand-père paternel), Deborah Summers (arrière-grand-mère paternelle), Christopher Summers (Corsaire, grand-père, décédé), Katherine-Ann Summers (grand-mère, décédée), Scott Summers (Cyclope, père), Madelyne Pryor-Summers (mère, décédée), Jean Grey-Summers (Phénix, mère adoptive, décédée), Alexander Summers (Havok, oncle), Gabriel Summers (Vulcain, oncle, porté disparu), John Grey (grand-père par adoption, décédé), Elaine Grey (grand-mère par adoption, décédée), Sara Bailey (tante par adoption, décédée), Galen Bailey (cousine par adoption, décédée), Joey Bailey (cousin par adoption, décédé), Aliya Jenskot (épouse, décédée), Hope (belle-sœur), Tyler Dayspring (Génésis, fils, décédé), Stryfe (clone, décédé), Rachel Grey (Marvel-Girl, demi-sœur d’une terre alternative), Nate Grey (X-Man, demi-frère d’une terre alternative), Hope Summers (fille adoptive) ;</li>  
<li><strong>Espèce : </strong>Mutant ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Télépathe, télékinésiste, voler sur de courtes distances, pouvoirs psioniques, une arme permettant de canaliser les pouvoirs psioniques, bras techno-organique de qui lui donne une force surhumaine, œil droit techno-organique qui lui permet percevoir les infrarouges ;</li> 
<li><strong>Caractéristique(s) : </strong>guérrier, stratège, combat à mains nues, maniement des armes du vingtième et du quarantième siècles ;</li>
<li><strong>Affiliation(s) : </strong>Membre d’X-Force, ancien membre des X-Men, de l’Underground, des Douze, du Six-Pack (ou Wild Pack), du Clan Elu, du Clan Askani ; ancien mentor des Nouveaux Mutants ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Apocalypse, Stryfe, Mister Sinister, Black Stryke, le clan Abakka ( groupe de mutants fanatiques vénérant Apocalypse).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Nathan Summers est le fils de Scott Summers (Cyclope) et Madelyne Pryor (un clone de Jean Grey). Il a été envoyé dans le futur à cause d'une infection technovirus, une maladie incurable. Dans le futur, Nathan a été élevé dans un monde ravagé par la guerre, où il a acquis des compétences de combat et des pouvoirs psychiques accrus.<br><br>

Devenu adulte, Nathan est revenu dans le présent sous le nom de Cable, portant un bras mécanique et équipé de technologies avancées. Il est devenu un héros, combattant aux côtés des X-Men et d'autres groupes mutants pour protéger le monde des menaces.<br><br>

Cable est un voyageur temporel et a souvent été impliqué dans des conflits liés aux voyages dans le temps. Il a été confronté à des ennemis tels que Apocalypse, un puissant mutant obsédé par la survie des plus forts, ainsi que Stryfe, un clone maléfique de Cable qui cherche à manipuler le cours de l'histoire.<br><br>

Au fil des ans, Cable a joué un rôle crucial dans la protection de l'humanité et des mutants contre les menaces extraterrestres, les conquérants temporels et les ennemis mutants. Il est connu pour sa force, sa résistance et sa maîtrise des armes à feu.<br><br>

Cable a également été un mentor pour de nombreux jeunes mutants, notamment la jeune mutante Hope Summers, qu'il a protégée en tant que "Messie mutant", une figure clé dans les événements liés à la survie des mutants.<br><br>

Son histoire est marquée par des éléments de voyage dans le temps, de lutte contre le destin, de sacrifices personnels et de responsabilités. Cable est un personnage complexe, faisant face à ses propres démons intérieurs tout en se battant pour un avenir meilleur.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
