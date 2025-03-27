<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Helicarrier</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>HELICARRIER</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.pinimg.com/736x/30/d9/5a/30d95afad20673f3c27af933651ecb99.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Type d'utilisation : </strong>Base d’opérations mobile ;</li>
<li><strong>Créateur(s) : </strong>Tony Stark (alias Iron Man);</li>
<li><strong>Armement(s)/Équipement(s) : </strong>Possède un systèmes de défense aérien, un boucliers énergétiques, un systèmes de surveillance et de reconnaissance, un hangars et des jets, une communication avancée (équipé de systèmes de communication sophistiqués pour permettre une coordination efficace entre les membres du S.H.I.E.L.D et d'autres forces alliées) ;</li> 
<li><strong>Affiliation(s) : </strong>Le S.H.I.E.L.D ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>L'Hydra, l'AIM, les Skulls (race extraterrestre métamorphe).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
L'Helicarrier a été conçu et construit par Tony Stark en collaboration avec le S.H.I.E.L.D, comme une base mobile et aérienne, capable de se déplacer dans les airs et de fournir une plate-forme de commandement pour les missions d'espionnage et les opérations tactiques. Le vaisseau est équipé d'une technologie avancée et d'armements pour faire face aux menaces potentielles.<br><br>

Au fil des années, l'Helicarrier est devenu un symbole emblématique du S.H.I.E.L.D et a été le théâtre de nombreuses histoires et batailles épiques. Il a été utilisé pour coordonner les missions des agents du S.H.I.E.L.D, pour mener des opérations de sauvetage, pour enquêter sur des menaces mondiales et pour affronter des ennemis puissants.<br><br>

L'Helicarrier a été confronté à de nombreux ennemis et défis au fil du temps. Des organisations criminelles telles que l'Hydra et l'AIM ont tenté de le détruire ou de le prendre le contrôle pour leurs propres desseins maléfiques. Des super-vilains notoires ont également attaqué l'Helicarrier dans le but de nuire au S.H.I.E.L.D ou de voler sa technologie avancée.<br><br>

De plus, l'Helicarrier a joué un rôle essentiel lors d'événements majeurs de l'univers Marvel, tels que les guerres secrètes et les invasions extraterrestres. Il a été le point de ralliement des super-héros et des agents du S.H.I.E.L.D lors de ces crises, offrant une base opérationnelle et un lieu de combat stratégique.<br><br>

L'Helicarrier a continué d'évoluer au fil des années, avec des mises à jour technologiques et des améliorations constantes pour faire face aux nouvelles menaces. Il est devenu un élément clé de l'infrastructure du S.H.I.E.L.D et un symbole de l'engagement du S.H.I.E.L.D envers la sécurité et la protection.<br><br>

En résumé, l'Helicarrier est un vaisseau volant emblématique du S.H.I.E.L.D dans les comics Marvel. Il a été utilisé comme base mobile pour les missions d'espionnage et les opérations tactiques, a été confronté à de nombreux ennemis et défis au fil des années. L'Helicarrier représente la puissance et la présence du S.H.I.E.L.D dans la lutte contre le crime et les menaces mondiales.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
