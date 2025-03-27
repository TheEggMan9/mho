<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Ant Man</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>ANT MAN</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://www.mdcu-comics.fr/uploads/encyclo/images/2015/09/20/news_illustre_1367187108_472.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Scott Edward Harris Lang ;</li>
<li><strong>Profession(s) : </strong>Chef d’entreprise, électronicien, ancien employé de Stark International, ancien voleur ;</li>
<li><strong>Famille : </strong>Cassandra Eleanor Lang (<a href="/heros/stature" style="color: orange;">stature</a>, fille), Peggy Rae Burke (ex-épouse), Ruth (sœur), Carl (beau-frère) ;</li>  
<li><strong>Espèce : </strong>Humain ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Utilise un costume qui lui permet de réduire ou d'accroître sa taille ;</li> 
<li><strong>Caractéristique(s) : </strong>Communique et contrôle les fourmis (grâce à son costume) ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre de la Fondation du Futur/des <a href="/heros/avengers" style="color: orange;">Avengers</a>/des Héros à Louer et des <a href="/heros/fantasticFour" style="color: orange;">Fantastic Four</a> ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/yellowjacket" style="color: orange;">Yellowjacket</a>, <a href="/heros/Taskmaster" style="color: orange;">Taskmater</a>, <a href="/heros/ghost" style="color: orange;">Ghost</a>, Beetle (doté d'une qui utilise une technologies avancées qui lui confèrent une force surhumaine, une endurance accrue et la capacité de voler).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Scott Lang était un ingénieur électronique talentueux qui a connu des difficultés dans sa vie. Pour aider sa fille Cassie, qui souffrait d'une maladie grave, il s'est tourné vers le vol pour subvenir à leurs besoins. Un jour, il a découvert le costume et les particules Pym, qui lui ont permis de changer de taille et de communiquer avec les insectes, et il a décidé de les utiliser pour devenir un héros.<br><br>

Scott Lang a rencontré le scientifique Hank Pym, le créateur original d'Ant-Man, qui lui a permis de devenir le nouveau porteur du titre d'Ant-Man. Il a utilisé ses nouvelles capacités pour combattre le crime, se montrant souvent comme un héros astucieux et débrouillard.<br><br>

Au fil de son parcours, Scott Lang a dû faire face à de nombreux défis et adversités. Il a affronté des super-vilains tels que Darren Cross, alias Yellowjacket, qui est devenu l'ennemi principal de Scott dans sa série solo "The Astonishing Ant-Man".<br><br>

Scott a également fait partie des Avengers à certains moments, participant à des missions avec d'autres héros Marvel. Il a également rejoint les équipes des "Uncanny Avengers" et des "Ant-Man and the Wasp".<br><br>

Une partie importante de l'histoire de Scott Lang est sa relation avec sa fille, Cassie Lang, qui a elle-même acquis des pouvoirs et est devenue une super-héroïne sous le nom de Stature.<br><br>

Scott a également fait équipe avec Hank Pym (le premier ant-man), Janet Van Dyne (the <a href="/heros/wasp" style="color: orange;">Wasp</a>) et Hope Van Dyne (la fille de Janet) dans des aventures liées à la technologie Pym, à la taille changeante et à la lutte contre les menaces qui mettent en danger le monde.<br><br>

L'histoire de Scott Lang est souvent caractérisée par sa volonté de se racheter et de protéger sa famille. Son approche plus décontractée et parfois comique en tant que héros a apporté une certaine légèreté à l'univers Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
