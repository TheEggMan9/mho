<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Black Cat</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>BLACK CAT</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://i0.wp.com/topcomics.fr/wp-content/uploads/2022/02/chronique-marvel-comics-black-cat-2019-11.jpg?fit=678%2C381&ssl=1" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Félicia Hardy ;</li>
<li><strong>Profession(s) : </strong>Détective privé, aventurière, cambrioleuse ;</li>
<li><strong>Famille : </strong>Walter Hardy (père, décédé), Lydia Hardy (mère) ;</li>  
<li><strong>Espèce : </strong>Humaine ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Fouet, grapin d'escalade à ressort, griffes rétractables agile ;</li> 
<li><strong>Caractéristique(s) : </strong>Experte en cambriolage/arts martiaux/corps à corps/gymnastique ;</li>
<li><strong>Affiliation(s) : </strong>Ancienne membre des Héros à Louer, propriétaire de Cat’s Eye Investigations, ancienne partenaire de <a href="/heros/spiderMan" style="color: orange;">Spider-Man</a> ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/kingpin" style="color: orange;">Kingpin</a>, Hammerhead (criminel, représenté avec une tête en forme de marteau), Black Fox (voleur professionnel), Scorpia (possède une armure qui lui a confère des capacités surhumaines et qui possède des armes avancées), The Owl (après avoir découvert une formule chimique, il a acquis des attributs similaires à ceux d'une chouette).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Felicia Hardy est la fille d'un célèbre cambrioleur et acrobate. Elle a grandi dans un milieu privilégié mais a été exposée à la vie criminelle de son père. Après avoir été témoin de son arrestation et de sa chute, elle décide de suivre ses traces et de devenir une voleuse.<br><br>

Black Cat possède des compétences exceptionnelles en gymnastique, en combat au corps à corps et en cambriolage. Elle est également connue pour son costume de superhéroïne, composé d'une combinaison en latex noire et d'une cape blanche, avec un masque de chat distinctif.<br><br>

Au début, Black Cat opère en tant que voleuse indépendante, ciblant les riches et les puissants. Elle se retrouve souvent en conflit avec Spider-Man, mais développe également une relation complexe avec lui, mêlant rivalité et attirance.<br><br>

Au fil des années, Black Cat a évolué vers un rôle plus héroïque. Elle a travaillé aux côtés de Spider-Man et d'autres héros, apportant ses compétences et son expertise en tant que cambrioleuse pour combattre le crime. Elle est devenue membre des Vengeurs des Rues et des Héros à Louer à certaines occasions.<br><br>

L'histoire de Black Cat est marquée par ses relations tumultueuses avec Spider-Man et d'autres personnages de l'univers Marvel, ainsi que par ses efforts pour se racheter et trouver sa voie en tant que justicière. Elle a également connu des revers et des périodes sombres, où elle a été tentée de retourner à sa vie de voleuse.<br><br>

En plus de ses activités criminelles, Black Cat est également connue pour son charme et son sex-appeal, qui lui ont souvent donné un avantage lors de ses missions. Elle est souvent représentée comme une femme forte et indépendante, capable de se battre aux côtés des superhéros les plus puissants.<br><br>

Enfin, elle a traversé de nombreux rebondissements et développements au fil des années, faisant d'elle un personnage fascinant de l'univers Marvel.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
