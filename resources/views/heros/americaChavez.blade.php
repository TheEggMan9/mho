<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>America Chavez</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>AMERICA CHAVEZ</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://www.disneyphile.fr/wp-content/uploads/2021/03/marvel-comicsamerica-chavez.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>América Chavez ;</li>
<li><strong>Profession(s) : </strong>Princesse ;</li>
<li><strong>Famille : </strong>Amalia Chavez (mère, décédée), Elena Chavez (mère, décédée), Catalina Chavez (sœur), Javier Santana (père adoptif), Cecilia Santana (mère adoptive), Alberto Santana (frère adoptif), Belle-sœur adoptive non identifiée, J.J. Santana (neveu adoptif) ;</li>  
<li><strong>Espèce : </strong>Humaine altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Possède des attributs physiques surhumaines, peut effectuer des voyages interdimensionnels (capable d’ouvrir des portails en forme d’étoiles lui permettant de se rendre, seule ou avec des passagers, dans d’autres dimensions) ;</li> 
<li><strong>Caractéristique(s) : </strong>Parle couramment l'anglais et l'espagnol ;</li>
<li><strong>Affiliation(s) : </strong>Actuellement membre des Ultimates, autrefois membre des Jeunes Vengeurs (de la Terre-13 122 et de la Terre- 58 163, Battleworld), des Hel-Rangers (de la Terre-15 513, Battleworld), de l’A-Force (de la Terre-16 191, Battleworld), des Jeunes Vengeurs (de la Terre-616), de la Brigade des Jeunes (de la Terre-616) ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Exterminatrix (criminelle cosmique), <a href="/heros/loki" style="color: orange;">Loki</a>, <a href="/heros/modok" style="color: orange;">M.O.D.O.K</a>, les Krees (races extraterrestres) et les Srulls (races extraterrestres).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">

America Chavez, également connue sous le nom de Miss America, est une super-héroïne de bande dessinée de l'univers Marvel. Son histoire commence sur l'Utopia Parallel, une réalité alternative, où elle est née. En tant qu'enfant, elle découvre ses incroyables pouvoirs, notamment la capacité de voyager à travers les dimensions.<br><br>

Après la disparition tragique de ses parents, Chavez est élevée par ses grands-mères, qui lui transmettent des valeurs fortes et lui apprennent à se servir de ses pouvoirs pour protéger les autres. Désireuse de découvrir son véritable potentiel et de faire le bien, elle décide de quitter son monde natal pour se lancer dans des aventures interdimensionnelles.<br><br>

America rejoint les Young Avengers, une équipe de jeunes héros, où elle joue un rôle clé. Ses capacités de voyage interdimensionnel lui permettent d'explorer de nouveaux mondes et de résoudre des problèmes à travers le multivers. Elle devient rapidement une membre respectée et appréciée de l'équipe.<br><br>

Au fil des années, America Chavez a été impliquée dans de nombreuses missions et a combattu des ennemis redoutables. Elle a fait face à des adversaires tels qu'Exterminatrix, Loki, M.O.D.O.K, ainsi qu'à des conflits impliquant les Krees et les Skrulls.<br><br>

Outre son rôle au sein des Young Avengers, America Chavez a également eu des aventures en solo. Elle a eu sa propre série de bandes dessinées intitulée "America" en 2017, qui a exploré davantage son passé, sa famille et son héritage.<br><br>

Tout au long de son histoire dans les comics, America Chavez est représentée comme une héroïne puissante, courageuse et fière de ses origines. Elle est un symbole d'empowerment et de diversité, mettant en avant des thèmes importants tels que l'identité queer, l'immigration et l'importance de la famille choisie.<br><br>

America Chavez continue d'évoluer et de s'affirmer en tant que personnage clé de l'univers Marvel, avec de nouvelles histoires qui mettent en valeur son héritage et son impact en tant que super-héroïne.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
