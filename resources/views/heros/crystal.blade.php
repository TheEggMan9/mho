<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Crystal</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>CRYSTAL</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://cdn.marvel.com/u/prod/marvel/i/mg/3/40/56323994d20ac/portrait_uncanny.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Crystalia Amaquelin ;</li>
<li><strong>Profession(s) : </strong>Enseignante, scientifique, ambassadrice, princesse d'Atilan ;</li>
<li><strong>Famille : </strong>Ronan l’Accusateur (mari), Piétro Maximoff (Vif argent, ex-mari), Luna Maximoff (fille), Médusalith Amaquelin Boltagon (Médusa, sœur), Quelin (père), Ambur (mère), Blackagar Boltagon (Flèche noire, cousin et beau-frère), Ahura (neveu), Karnak (cousin), Triton (cousin), Gorgone (cousin), Wanda (la Sorcière rouge, ex-belle-soeur), Erik Magnus Lehnsherr (Magnéto, ex-beau-père), Vision (ex-beau-frère par alliance), Lorna Dane (Polaris, ex-belle-sœur) ;</li>  
<li><strong>Espèce : </strong>Inhumaine ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, manipule l'air/le vent/la terre/les métaux/le feu/l'eau/l'électricité/la glace/la météo ;</li> 
<li><strong>Caractéristique(s) : </strong>Utilise régulièrement Lockjaw pour se déplacer profitant ainsi de ses capacités de téléportation ;</li>
<li><strong>Affiliation(s) : </strong>La Famille royale des Inhumains, ancien membre des Quatre Fantastiques, des Avengeurs, de la Vengeance royale ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Maximus, Nightcrawler, La Confrérie des Mutants (groupe de mutants criminels dirigé par Magnéto), Klaw, The Unspoken (ancien roi des<br> Inhumains banni pour ses actes tyranniques).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Crystal est née dans la cité des Inhumains, Attilan, en tant que membre de la famille royale. Elle est la sœur de Médusa, la reine des Inhumains, et de Maximus le Fou, son frère instable. Dès son plus jeune âge, Crystal a montré des capacités extraordinaires pour manipuler les éléments et les cristaux.<br><br>

Elle a fait ses débuts dans les comics en tant que membre des Fantastic Four, lorsque son chemin a croisé celui de ce célèbre groupe de super-héros. Crystal est rapidement devenue une alliée précieuse des Fantastic Four et a aidé à sauver le monde à plusieurs reprises.<br><br>

Par la suite, Crystal a rejoint les Inhumains et est devenue une membre essentielle de cette communauté. Elle a souvent été impliquée dans des conflits politiques, des guerres et des problèmes internes aux Inhumains. En tant que princesse d'Attilan, elle a joué un rôle diplomatique crucial, cherchant à maintenir la paix entre les Inhumains et le monde extérieur.<br><br>

Crystal a également eu des relations tumultueuses avec sa famille, en particulier avec son frère Maximus, Quicksilver et la Sorcière Rouge. Leurs divergences et conflits ont souvent créé des tensions au sein des Inhumains et ont ajouté des couches de complexité à l'histoire de Crystal.<br><br>

Au fil des années, Crystal a fait partie de nombreuses équipes de super-héros, notamment les Avengers ou encore de la Famille Royal. Elle a continué à utiliser ses pouvoirs pour défendre les Inhumains et protéger le monde contre les menaces.<br><br>

L'histoire de Crystal dans les comics est marqué par des moments de triomphe, de tragédie, de relations familiales compliquées et de responsabilités en tant que princesse des Inhumains. Elle reste une figure importante dans l'univers Marvel, apparaissant dans de nombreuses séries, arcs narratifs et événements majeurs.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
