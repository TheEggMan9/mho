<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Darkhawk</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DARKHAWK </h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i.ebayimg.com/images/g/q9wAAOSwbLlglHkf/s-l400.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Christopher Powell ;</li>
<li><strong>Profession(s) : </strong>Etudiant, aventurier ;</li>
<li><strong>Famille : </strong>Michael Powell (père), Grace Powell (mère), Jonathan Powell (frère), Jason Powell (frère) ;</li>  
<li><strong>Espèce : </strong>Humain altéré;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, vol, première armure (grappin, câble rétractable), ailes rétractables, seconde armure (deux lames rétractables sur chaque poignets), amulette (permet de téléporter un corps d’androïde pour prendre place de son corps(Darkhawk)) ;</li> 
<li><strong>Caractéristique(s) : </strong>Sans son amulette, Christopher Powell est incapable de devenir Darkhawk. ;</li>
<li><strong>Affiliation(s) : </strong>ancien chef de la sécurité du projet "PEGASUS", membre réserviste des Avengeurs, ancien membre des Loners, New Warriors, des Défenseurs, de la Vengeance royale, (Razor) ancien membre de la Fraternité des Raptors ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Blood brothers (duo de super-vilains composé de deux frères extraterrestres, Dargin Bokk et Dargin Bokk, qui cherchent à récupérer l'amulette de Darkhawk<br> pour leurs propres objectifs maléfiques), The Sphinx (ancien archéologue nommé Anath-Na Mut qui a acquis des pouvoirs temporels et cherche à obtenir le pouvoir de l'amulette de Darkhawk pour se rendre immortel), Portal (a le pouvoir de créer des portails dimensionnels et qui utilise ses pouvoirs pour semer le chaos et causer des problèmes à Darkhawk et à<br> d'autres héros), Pilgrim (mystérieux chasseur de primes qui traque Darkhawk et d'autres héros pour les capturer et les livrer à ses clients), Savage Steel (a le pouvoir de créer des portails dimensionnels<br> et qui utilise ses pouvoirs pour semer le chaos et causer des problèmes à Darkhawk et à d'autres héros).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Christopher Powell est un adolescent ordinaire vivant à New York. Ce dernier découvre une mystérieuse amulette extraterrestre appelée le "Darkhawk Amulet". En le touchant, Christopher est transformé en une puissante créature humanoïde avienne, dotée de capacités surhumaines, il utilise les pouvoirs de cette amulette pour combattre le crime et protéger les innocents. Sous l'identité de Darkhawk, Christopher se bat contre les criminels et les super-vilains qui menacent la ville.<br><br>

Au fur et à mesure de son parcours, Darkhawk se retrouve impliqué dans des conflits cosmiques et interdimensionnels, découvrant les origines mystérieuses de son amulette et de son héritage. Il rencontre d'autres héros, comme les Avengers, les Gardiens de la Galaxie et les New Warriors, avec lesquels il forme des alliances occasionnelles.<br><br>

Cependant, Darkhawk doit également faire face à ses propres démons intérieurs. L'utilisation de ses pouvoirs est parfois difficile à contrôler, et Christopher doit trouver un équilibre entre sa vie personnelle et sa vie de super-héros. Il se retrouve souvent confronté à des choix moraux difficiles et doit affronter les conséquences de ses actions.<br><br>

L'histoire de Darkhawk est marquée par l'évolution du personnage, passant d'un adolescent inexpérimenté à un héros plus mûr et confiant. Il se bat non seulement contre des ennemis puissants, mais aussi contre ses propres doutes et faiblesses.<br><br>

Au fil des années, Darkhawk a connu des hauts et des bas dans les comics Marvel, avec des séries en solo, des apparitions dans des équipes de super-héros et des crossovers épiques. Son héritage en tant que super-héros avien continue de captiver les fans et de le placer parmi les figures emblématiques de l'univers Marvel. 
 </p>    
  </div>
</div>
</body>
</html>
