<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Hazmat</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>HAZMAT</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://comicvine.gamespot.com/a/uploads/scale_small/0/3347/2895437-avengers_area_001_zone_001.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Jennifer Takeda ;</li>
<li><strong>Profession(s) : </strong>Aventurière, ancienne étudiante des Avengers;</li>
<li><strong>Famille : </strong>Inconnue ;</li>  
<li><strong>Espèce : </strong>Humaine altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Produit et absorbe diverses substances létales et non létales (telles que les radiations, les déchets toxiques, les neurotoxines, l’énergie électromagnétique, l’antimatière) les libérant en général par le biais de décharges énergétiques concentrés tirées à partir de ses mains, mais son souffle, ses fluides et ses sécrétions corporelles sont empoisonnés et une exposition prolongée à ces matières peut se révéler mortel pour d’autres personnes, porte une combinaison intégrale de confinement (qui protége les tiers des radiations qu’elle émet) ;</li> 
<li><strong>Caractéristique(s) : </strong>Combats à mains nues, athlète ;</li>
<li><strong>Affiliation(s) : </strong>Autrefois étudiante de l’Académie des Avengers, ancien membre des Maîtres du mal ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Arcade (super-vilain sadique et maître des pièges), Jeremy Briggs (homme d'affaires et philanthrope qui a tenté de "guérir" les mutants en supprimant leurs pouvoirs) Red Raven (ennemi ailé des Avengers qui s'est retrouvé en conflit avec Hazmat et les autres membres de l'Académie), Korvac (être cosmique), Alchemist (doté de pouvoirs alchimiques et qui s'est opposé à Hazmat et aux Avengers Academy).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Jennifer Takeda était une adolescente ordinaire dont les parents étaient des scientifiques travaillant pour la Roxxon Corporation, une entreprise énergétique. Lors d'une expérience qui a mal tourné, Jennifer a été exposée à une radiation mortelle. Cela a transformé son corps en une source continue de radiations toxiques, la rendant dangereuse pour son environnement et les autres.<br><br>

Jennifer a été recrutée par le programme Avengers Academy, une équipe de super-héros adolescents créée pour aider les jeunes avec des pouvoirs potentiellement dangereux. Sous le nom de code Hazmat, elle a rejoint d'autres jeunes héros avec des pouvoirs similaires.<br><br>

Au sein de l'Académie, Jennifer a dû apprendre à contrôler ses pouvoirs et à vivre avec la nécessité de porter une combinaison de protection pour éviter de nuire à ceux qui l'entourent. Qui a par la suite réussi a développé une relation étroite avec Mettle, un autre membre de l'équipe.<br><br>

Plus tard, lors de l'événement Avengers Arena, Hazmat et ses camarades de l'Académie se sont retrouvés pris au piège dans une arène mortelle créée par le super-vilain Arcade. Ils ont été forcés de se battre les uns contre les autres pour leur survie. Hazmat a dû affronter de nombreux défis physiques et émotionnels tout en cherchant un moyen de s'échapper.<br><br>

Après ces épreuves, Hazmat et les autres survivants ont continué à vivre des aventures en tant que membres des Avengers, combattant divers ennemis et menaces qui mettent en péril la sécurité de l'univers Marvel.<br><br>

Hazmat est un personnage qui est confronté à la double nature de ses pouvoirs toxiques et à la nécessité de les maîtriser pour devenir une héroïne. Son histoire met en avant ses luttes personnelles ainsi que sa détermination à protéger les autres, malgré les difficultés rencontrées en raison de ses pouvoirs dangereux.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
