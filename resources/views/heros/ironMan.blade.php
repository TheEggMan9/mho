<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Iron Man</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>IRON MAN</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://www.g-mart.com/static/f223300.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Anthony (tony) Edward stark ;</li>
<li><strong>Profession(s) : </strong>Aventurier, PDG de Stark Resistance, de Stark Industries, de Stark Solutions, de Stark International, des Entreprises Stark, ancien directeur du SHIELD, ancien<br> secrétaire à la Défense des Etats-Unis, ancien technicien d'Askew Electronics, ancien co-directeur de Circuits Maximu ;</li>
<li><strong>Famille : </strong> Howard Anthony Stark (père adoptif, décédé), Maria Collins Carbonell Stark (mère adoptive, décédée), Arno Stark (frère par adoption), Edward Stark (oncle par adoption, décédé), Morgan Stark (cousin par adoption) ; Isaac Stark Sr, Isaac Stark Jr (ancêtres par adoption, décédés) ;</li>  
<li><strong>Espèce : </strong>Humain ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s): </strong>Armure technologique ;</li> 
<li><strong>Caractéristique : </strong>Génie scientifique, brillant inventeur, homme d'affaires ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Puissants Vengeurs, des Illuminati, du Club des damnés (en dehors du cercle intérieur) ; ancien membre des Vengeurs, des Gardiens de la galaxie, de l'Initiative, des Thunderbolts, de Force Works, de Queen's Vengeance, des Vengeurs de la Côte Ouest, d'Usinage Servitech ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Whiplash, Mandarin, Ultron, Thanos.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Tony Stark est né le 29 mai 1970 à Long Island, dans l'État de New York, aux États-Unis. L'homme derrière le costume d'Iron Man est Tony Stark, un génie milliardaire, inventeur et industriel. Dans les premiers comics, publiés en 1963 par Marvel Comics, Tony Stark est capturé par des terroristes qui l'obligent à construire une arme de destruction massive. Pour cela, Stark utilise ses compétences en ingénierie pour créer une armure de haute technologie qui lui permet de s'échapper et de devenir Iron Man.<br><br>
Par la suite, Tony Stark décide de continuer à utiliser son armure pour lutter contre le crime et les menaces mondiales. Il devient un super-héros, un membre fondateur des Avengers et un défenseur de la justice.<br><br>
Tout au long de l'histoire d'Iron Man, Tony Stark doit faire face à de nombreux défis personnels et professionnels. Il lutte contre des ennemis tels que le Mandarin, un puissant seigneur de guerre chinois, et l'industriel rival Obadiah Stane, alias le Iron Monger.<br><br>
Au fil des années, le costume d'Iron Man évolue, devenant de plus en plus sophistiqué et puissant. Stark développe de nouvelles technologies et armures, ajoutant des fonctionnalités telles que des armes énergétiques, des répulseurs et des capacités de vol améliorées.<br><br>
Les événements majeurs de l'histoire d'Iron Man incluent la guerre civile des super-héros, où Tony Stark dirige le camp qui soutient la loi sur l'enregistrement des super-humains, ainsi que les différentes menaces extraterrestres et interdimensionnelles auxquelles il fait face en tant que membre des Avengers.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
