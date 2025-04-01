<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Electro</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>ELECTRO</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/originals/0d/ad/22/0dad221bfff37026c36fcb4826895136.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Maxwell (Max) Dillon ;</li>
<li><strong>Profession(s) : </strong>Criminel professionnel, ancien poseur de lignes électriques pour Consolidated Edison ;</li>
<li><strong>Famille : </strong> Anita Dillon (mère, décédée), Jonathan Dillon (père), Norma Lynn (ex-épouse) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Manipule l'électricité, projete de l'énergie électrique, vol et lévite, conductivité électrique (peut utiliser sa conductivité électrique pour interférer avec les systèmes électriques et électroniques, tels que court-circuiter les appareils, pirater des systèmes informatiques ou désactiver des mécanismes électriques) ;</li> 
<li><strong>Caractéristique(s) : </strong>Tacticien ;</li>
<li><strong>Affiliation(s) : </strong>Co-fondateur des Sinister Six, ancien membre des Superior Six, du syndicat criminel de Hood, des Emissaires du Mal et des Terrifics, ancien membre du groupe informel d’Opale, ancien partenaire de Mystério, Blizzard et de l’Homme-pourpre ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Sider-Man, Daredevil, les Avengeurs, les Quatre Fantastiques, Luke Cage.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Electro, de son vrai nom Max Dillon, est un supervilain apparaissant dans les bandes dessinées Marvel. Son histoire débute lorsqu'il était un simple ouvrier en électricité, sans grande ambition ni confiance en lui. Tout change lorsque Max est victime d'un accident électrique qui lui confère des pouvoirs surhumains liés à l'électricité.<br><br>

Découvrant ses nouvelles capacités, Max adopte le nom de "Electro" et se lance dans une carrière criminelle. Grâce à sa capacité à générer, absorber et manipuler l'électricité, Electro devient un adversaire redoutable. Il utilise ses pouvoirs pour commettre des vols, causer des pannes électriques massives et affronter des super-héros.<br><br>

Electro est principalement connu pour ses confrontations avec Spider-Man, devenant l'un de ses ennemis les plus emblématiques. Ses pouvoirs électriques lui permettent de défier le Tisseur en lui donnant du fil à retordre lors de leurs affrontements.<br><br>

Au fil des années, Electro a également croisé le chemin d'autres super-héros tels que Daredevil, les Quatre Fantastiques ou encore les Avengeurs. Il a fait partie de différents groupes de super-vilains, notamment les Sinister Six, où il a collaboré avec d'autres criminels pour tenter de vaincre les héros.<br><br>

L'histoire d'Electro est marquée par sa quête de pouvoir, sa vengeance et son désir de se faire reconnaître. Bien qu'il ne soit pas le super-vilain le plus développé de l'univers Marvel, Electro reste un adversaire redoutable grâce à ses pouvoirs électriques uniques.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
