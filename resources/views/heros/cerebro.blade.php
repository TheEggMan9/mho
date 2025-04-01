<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Cérébro</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>CÉRÉBRO</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://www.cinemascomics.com/wp-content/uploads/2019/09/cerebro-x-men-marvel-comic.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>cérébro ;</li>
<li><strong>Profession(s) : </strong>Localisateur de mutants ;</li>
<li><strong>Famille : </strong>Aucune ;</li>  
<li><strong>Espèce : </strong>Ordinateur ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Système de détection télépathique conçu pour localiser et suivre les mutants à travers le monde grace à l'amplification des signatures énergétiques des mutants produit par Cerebro ;</li> 
<li><strong>Caractéristique(s) : </strong>Cérébro est un casque ;</li>
<li><strong>Affiliation(s) : </strong>Cérébro a autrefois dirigé sa propre équipe de X-Men ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>La Confrérie des Mutants (groupe qui s'oppose aux X-Men et à la vision du Professeur X), les Sentinelles, Mutants (ou autres) dotés de pouvoirs psychiques.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
L'histoire de Cérébro remonte aux débuts des X-Men et est étroitement liée au professeur Charles Xavier, également connu sous le nom du Professeur X. Cérébro a été conçu par Xavier dans le but de détecter, suivre et identifier les mutants à travers le monde.<br><br>

Le premier modèle de Cérébro était un appareil volumineux et complexe utilisant des câbles et des machines. Il permettait à Xavier d'amplifier ses propres capacités télépathiques pour localiser les mutants. Au fil du temps, Cerebro a été amélioré et modernisé pour devenir un ordinateur sophistiqué et portable.<br><br>

L'utilisation de Cérébro est cruciale dans l'univers des X-Men. Il aide le Professeur X et les X-Men à repérer les mutants qui ne sont pas conscients de leurs pouvoirs, à trouver des mutants en détresse, et à surveiller les activités des mutants à travers le globe. Cela leur permet d'intervenir en cas de besoin, d'offrir de l'aide et de protéger les mutants contre les menaces.<br><br>

Cependant, l'utilisation de Cérébro n'est pas sans risques. En raison de la puissance et de l'étendue de ses capacités, son utilisation prolongée peut épuiser considérablement le Professeur X et d'autres utilisateurs télépathiques. De plus, Cérébro a été la cible de nombreuses attaques de la part d'ennemis des X-Men cherchant à exploiter ou à saboter son fonctionnement.<br><br>

Dans l'histoire des X-Men, Cérébro a joué un rôle clé dans l'identification et le recrutement de nouveaux membres des X-Men, dans la résolution de crises mutants, et dans la protection de la communauté mutante. Il est devenu un symbole emblématique de l'univers Marvel, représentant la quête de Xavier pour l'harmonie entre les mutants et les humains.

</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
