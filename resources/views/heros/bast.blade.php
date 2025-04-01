<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Bast</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>BAST</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="http://www.marvel-world.com/contents/encyclopedie/biographies/d/dieu-panthere-le/dieu-panthere-le_3.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Bast ;</li>
<li><strong>Profession(s) : </strong>Dieu protecteur du Wakanda, dieu du plaisir, de la danse, de la poésie, de la musique, des chats, des félins et de la guerre ;</li>
<li><strong>Famille : </strong>Neith (Gaea, grand-mère), Noun (le Démiurge, grand-père), Ammon-Râ (Atûm, père), Thoth (oncle), Sekhmet (le Dieu-Lion, frère/sœur), Shou (frère), Sobek (le Dieu-Crocodile, frère), Tefnut (sœur), Khonshu (Chons, demi-frère), Hathor (demi-sœur), Mahès (Apedemak, fils), Geb (neveu), Nout (nièce), Osiris (petit-neveu), Seth (petit-neveu), Isis (petite-nièce), Nepththys (petite-nièce), Anubis (arrière-petit-neveu), Horus (arrière-petit-neveu), d’autres membres du panthéon d’Héliopolis ;</li>  
<li><strong>Espèce : </strong>Dieu ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, capable de transférer une partie de ses pouvoirs à des mortels ;</li> 
<li><strong>Caractéristique(s) : </strong>Apparaît en général sous la forme d’une immense panthère noire ou alors sous la forme d’une panthère semi-humanoïde, une des plus puissantes divinités de l’Ennéade ;</li>
<li><strong>Affiliation(s) : </strong>Membre de l’Ennéade (le panthéon des dieux de l’ancienne Egypte), membre des dieux du Wakanda, ancien membre de l’Escadron divin ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Inconnu.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Bast est souvent représenté comme un dieu égyptien, bien qu'il puisse également être associé au Wakanda, la nation fictive de <a href="/heros/blackPanther" style="color: orange;">Black Panther</a>. Bast est souvent décrit comme le dieu égyptien de la protection, de la guérison et de la chaleur du soleil.<br><br>

Dans le contexte du Wakanda, Bast est l'une des divinités adorées par les habitants de cette nation africaine avancée technologiquement. Dans certaines histoires, Bast est vénéré en tant que l'une des divinités panthères, et les rois du Wakanda reçoivent souvent une bénédiction ou un lien spirituel avec Bast, ce qui renforce leurs pouvoirs et leur statut de Black Panther.<br><br>

En tant que dieu protecteur, Bast est souvent invoqué par Black Panther pour obtenir des conseils, de la force et des bénédictions lorsqu'il fait face à des défis et à des ennemis. Dans certaines histoires, Bast peut même apparaître physiquement pour offrir une assistance ou un soutien direct.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
