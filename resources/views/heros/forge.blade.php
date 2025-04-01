<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Forge</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>FORGE</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/236x/ab/4f/d6/ab4fd6754186e2deec86ab4309b9826e.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Inconnu ;</li>
<li><strong>Profession(s) : </strong>Inventeur, aventurier, ex-agent du gouvernement, soldat, shaman ;</li>
<li><strong>Famille : </strong>Inconnue ;</li>  
<li><strong>Espèce : </strong>Mutant ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Capable d’inventer n’importe quel système mécanique ou électronique, peut voir l’énergie mécanique, peut 
comprendre le fonctionnement de n’importe<br> quel dispositif et déterminer la liste des matériaux nécessaires à sa conception, maîtrise les arts mystiques des Shaman Cheyenne (peut ainsi appeler des esprits, ouvrir des portails vers d’autres dimensions et se servir des âmes des autres pour accroître ses pouvoirs mystiques), possède une jambe et une main (composée d'un petit ordinateur et peut tirer des rafales de plasma) cybernétiques ;</li> 
<li><strong>Caractéristique(s) : </strong>Excellent tireur et combattant à mains nues, ;</li>
<li><strong>Affiliation(s) : </strong>anciennement X-Men, X-Factor, Armée des Etats-Unis, Maraudeurs.
Base d'opérations : Institut Xavier, Westchester, Salem Center, New York, Etats-Unis ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>La Confrérie des mutants (groupe de mutants criminels dirigé par Magnéto), les sentinelles, Mystique.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
D'origine amérindienne, Forge est membre de la tribu Cheyenne. Durant la guerre du Viêt Nam, il a perdu sa main droite et sa jambe gauche lors d'un combat. Malgré cette tragédie, il a développé des compétences exceptionnelles en tant qu'inventeur et ingénieur. Forge est devenu un génie technologique et un expert en mécanique, électronique et ingénierie.<br><br>

Forge a rejoint les X-Men en tant que membre actif et a utilisé son talent pour créer et améliorer des dispositifs technologiques pour aider l'équipe. Il a notamment conçu le Danger Room, une salle d'entraînement virtuelle avancée utilisée par les X-Men.<br><br>

Au fil des années, Forge a été impliqué dans de nombreuses aventures aux côtés des X-Men. Il a été un allié précieux dans la lutte contre les ennemis mutants tels que la Confrérie des mutants, les Sentinelles et d'autres menaces qui ciblent les mutants.<br><br>

Forge a également eu des relations complexes avec d'autres personnages, notamment avec Storm, avec qui il a eu une relation amoureuse tumultueuse. Leur romance a été marquée par des défis et des tragédies, mais Forge est resté un allié fidèle des X-Men malgré les complications de leur relation.<br><br>

En dehors de ses activités avec les X-Men, Forge a également été impliqué dans des missions gouvernementales et des opérations secrètes liées aux mutants et à la technologie. Son expertise technologique a été sollicitée à de nombreuses reprises pour des projets spéciaux.<br><br>

Forge est un personnage complexe et solitaire, concentré sur son travail d'inventeur et sa mission de protéger les mutants. Son histoire est marquée par son désir de réparer les erreurs de son passé et de créer un avenir meilleur pour les mutants et l'humanité.<br><br>

À ce jour, Forge continue de jouer un rôle important dans l'univers Marvel, tant en tant que membre des X-Men qu'en tant qu'inventeur de renommée mondiale. Son intelligence, son ingéniosité et son dévouement à la cause des mutants en font un personnage apprécié et respecté dans l'univers des comics. 
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
