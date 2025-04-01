<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dazzler</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DAZZLER</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://thepinknews.com/wp-content/uploads/2021/08/dazzer-marvel.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Alison Blaire ;</li>
<li><strong>Profession(s) : </strong>Agent du S.H.I.E.L.D., chanteuse, actrice, aventurière ;</li>
<li><strong>Famille : </strong>Carter Blaire (père, décédé), Katherine Blaire (mère), Bella Blaire (grand-mère) et Lois London (Mortis, demi-soeur), Nicholas Brown (beau-père), Longshot (époux), Shatterstar (Gaveedra-Seven, fils/beau-père) ;</li>  
<li><strong>Espèce : </strong>Mutante ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Convertit le son en lumière, projette de la lumière, créer des effets lumineux (feux d'artifice, des illusions, des hologrammes et des éclairs lumineux), contrôle la lumière (modifie sa couleur, son intensité et sa direction selon ses besoins), convertit l'énergie sonore en énergie cinétique (déclenche des explosions concussives ou de projeter des ondes de choc), resiste à la lumière (la rend moins vulnérable aux attaques basées sur la lumière), magnétophone, rollers ;</li> 
<li><strong>Caractéristique(s) : </strong>Actrice et musicienne talentueuse, athlète, redoutable combattante au corps à corps, maniement des armes blanches et à feu, experte<br> des rollers ;</li>
<li><strong>Affiliation(s) : </strong>Actuellement membre d’A-Force; autrefois membre des Freddy Krugerettes, agent du S.H.I.E.L.D, membre de la Révolution mutante, des<br> X-Treme X-Men, des X-Men, d'Excalibur, de la Rébellion, des X-Babies (protectrice), des Gladiateurs, de divers groupes musicaux ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Mystique, Doctor Doom, Juggernaut, Wendigo (créature surnaturelle cannibale), Helfire Club (société secrète composée de<br> riches et puissants membres de la haute société).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Alison Blaire a commencé sa carrière en tant que chanteuse disco dans les années 1970. Elle a rapidement gagné en popularité grâce à ses talents musicaux uniques. Cependant, son statut de mutante et dotée de pouvoirs liés au son et à la lumière, ce qui lui permet de convertir le son en énergie lumineuse et de créer des effets lumineux éblouissants, attira l'attention des super-vilains et des organisations malveillantes.<br><br>

Dazzler a été recrutée par le célèbre Professeur Charles Xavier pour rejoindre les X-Men, une équipe de super-héros mutants dédiée à la protection des droits des mutants et de l'humanité. Elle a accepté l'invitation et est devenue un membre clé de l'équipe.<br><br>

Au fil des ans, Dazzler a vécu de nombreuses aventures aux côtés des X-Men, combattant des super-vilains tels que Mystique, le Doctor Doom, le Juggernaut et bien d'autres. Elle a également été impliquée dans des événements majeurs de l'univers Marvel, tels que la Guerre des Mutants et les croisements interdimensionnels.<br><br>

En plus de ses exploits en tant que super-héroïne, Dazzler a poursuivi sa carrière musicale et a utilisé ses pouvoirs sur scène, devenant une icône de la pop culture dans l'univers Marvel. Sa musique et son statut de super-héroïne ont souvent été des éléments clés de son histoire.<br><br>

Au fil du temps, Dazzler a évolué en tant que personnage, se confrontant à des défis personnels et explorant sa propre identité en tant que mutante et artiste. Elle a été membre des X-Men à différentes périodes de son histoire, participant à des équipes variées et évoluant en fonction des événements qui ont marqué l'univers Marvel.<br><br>

Dazzler est un personnage emblématique de Marvel, associant à la fois la musique et les super-pouvoirs. Son histoire est marquée par son talent musical, son engagement envers les droits des mutants et sa capacité à combattre les forces du mal tout en restant une artiste aimée par le public.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
