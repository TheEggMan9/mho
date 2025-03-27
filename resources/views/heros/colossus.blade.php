<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Colossus</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>COLOSSUS</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/236x/21/c7/86/21c786cd8443793e9999f51fd1be3e78.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Piotr (Peter) Nikolaievitch Raspoutine ;</li>
<li><strong>Profession(s) : </strong>Aventurier, ex-artiste, activiste mutant, gardien d'immeuble, peintre, étudiant, fermier ;</li>
<li><strong>Famille : </strong>Nikolai (père, décédée), Alexandra (mère, décédée), Mikhaïl (frère aîné), Illyana (soeur cadette, décédée), Peter (fils), Peter (neveu), Larisa Mischenko (cousine, décédée),<br> Konstantin, Klara et Dimitriy (cousins, décédés), Vladimir (oncle), oncle et tante non identifiés (décédés), grand mère non identifiée (décédée), Grigory (grand père, décédé),<br> Grigory Efimovitch (arrière grand père, décédé), Elena (arrière grand mère, décédée), Ivan (arrière grand oncle, décédé), Lavinia, Pavel et Lamar Piotnick, Grisha et Yuri (liens non révélés) ;</li>  
<li><strong>Espèce : </strong>Mutant ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, capable de changer à volonté et instantanément les tissus de son corps entier en acier organique, resiste aux températures extrêmes, ;</li> 
<li><strong>Caractéristique(s) : </strong>Combat au corps à corps, parle couramment l'anglais et le russe, lorsqu’il est en contact avec le Vibranium, il revêt automatiquement sa forme humaine ;</li>
<li><strong>Affiliation(s) : </strong>Actuellement membre des X-Men, autrefois membre : de X-Force (Cable), des Cinq Phénix, de l’équipe Extinction des X-Men, d’Excalibur, des Acolytes, des Defendeur ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Magnéto, Juggernaut, Deadpool, Kitty Pride.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Piotr Rasputin est né en Russie et a grandi dans une ferme collective. Il a découvert ses pouvoirs mutants à l'adolescence, qui lui permettent de transformer son corps en une forme d'acier organique indestructible. Après avoir été découvert par le Professeur X, il a été recruté pour rejoindre les X-Men, une équipe de mutants qui luttent pour la coexistence pacifique entre les mutants et les humains.<br><br>

Colossus est connu pour sa force et sa résistance surhumaines, ce qui en fait un atout précieux lors des combats contre les ennemis des X-Men. Au sein de l'équipe, il est également reconnu pour sa nature altruiste, son intégrité et sa loyauté envers ses amis.<br><br>

Au fil des ans, Colossus a été impliqué dans de nombreuses aventures avec les X-Men. Il a combattu des ennemis redoutables tels que Magnéto, Juggernaut et des groupes comme la Confrérie des Mutants. Il a également été un membre clé lors d'événements majeurs de l'univers Marvel, tels que la Guerre du Phénix et l'Ère d'Apocalypse.<br><br>

Colossus a également eu des moments marquants dans sa vie personnelle. Il a développé une relation romantique avec Kitty Pryde, une autre membre des X-Men. Leur relation a été souvent mise à l'épreuve par les conflits et les sacrifices nécessaires dans la vie de super-héros.<br><br>

Cependant, son dévouement à la justice, sa force physique impressionnante et son rôle important au sein des X-Men restent des éléments clés de son histoire.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
