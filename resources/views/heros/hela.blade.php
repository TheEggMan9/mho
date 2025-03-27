<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Hela</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>HELA</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/474x/e1/c5/48/e1c548a4f594f7313a8ae1b572be84a9--marvel-hela-marvel-villains.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Hela ;</li>
<li><strong>Profession(s) : </strong>Déesse de la mort et des morts, souverain de Hel et de Niffleheim ;</li>
<li><strong>Famille : </strong>Loki (père), Angrobde (mère) ; le Loup de Fenris (Fenrir), le Serpent de Midgard (Jormunggander) (frères tous les deux) ;</li>  
<li><strong>Espèce : </strong>Asgardienne ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>a un contrôle sur la mort (contrôle absolu sur la mort et les âmes. Elle peut prendre la vie de mortels et de dieux, manipuler les âmes des défunts et les ramener à la vie si elle le souhaite), manipule l'énergie mystique (possède une maîtrise avancée de la magie et de l'énergie mystique. Elle peut lancer des sorts, projeter des rafales d'énergie destructrice et créer des illusions puissantes), immortelle, facteur guérisseur (peut se régénérer rapidement de presque toutes les blessures. Elle peut même reconstituer son corps si elle est détruite), manipule les ombres et les ténèbres créant ainsi des illusions terrifiantes et utilisant les ténèbres pour attaquer ses ennemis, capable d'invoquer des armées de morts-vivants, possède une longue épée ;</li> 
<li><strong>Caractéristique(s) : </strong>Le côté gauche (du corps) de Hela est généralement représenté comme étant plus sombre et sinistre alors que le côté droit (du corps) de Hela est souvent représenté comme étant plus régulier et moins marqué par la noirceur ;</li>
<li><strong>Affiliation(s) : </strong>Acune ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Thor, Balder (membre de la famille royale d'Asgard), les Valkyries (groupe de guerrières d'Asgard), les Avengers, les Gardiens de la Galaxie (occasionnellement).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Hela est la fille de Loki et de la géante Angrboda. Elle est née avec une apparence spectrale et a été élevée par Odin, le roi d'Asgard. Hela est destinée à régner sur Hel, le royaume des morts, après sa mort.<br><br>

Hela est connue pour son ambition démesurée et son désir de conquérir les autres royaumes d'Asgard. Elle cherche constamment à étendre son pouvoir et à augmenter son influence sur les vivants et les morts. Elle est souvent représentée comme une force sombre et redoutable.<br><br>

Hela a été un antagoniste récurrent pour Thor, le dieu du tonnerre. Elle a tenté à plusieurs reprises de défier Thor et de prendre le contrôle d'Asgard. Leurs confrontations ont mis en lumière le conflit entre la vie et la mort, ainsi que la dualité entre la lumière et l'obscurité.<br><br>

Hela a également eu des interactions avec d'autres héros Marvel, tels que les Avengers et les X-Men, en raison de son statut de déesse de la mort. Elle a participé à des événements cosmiques majeurs et à des batailles épiques aux côtés d'autres personnages emblématiques.<br><br>

Dans certaines histoires, Hela a montré une certaine fascination pour Thor et a tenté de le séduire pour l'attirer de son côté. Leur relation complexe a ajouté une dimension supplémentaire à leur rivalité.<br><br>

En résumé, Hela est une puissante déesse de la mort dans l'univers Marvel, souvent en conflit avec Thor et cherchant à étendre son règne sur les royaumes d'Asgard. Son ambition, son apparence spectrale et son statut de déesse lui confèrent un rôle important en tant qu'antagoniste et force sombre dans les comics Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
