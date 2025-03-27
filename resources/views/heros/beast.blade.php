<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Beast</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>BEAST</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTs8lYv5C2IFx5Y90A6KmMD7LMEGy4uWnQGcL93e4Po9XmgCJ8daNSjWvYTDsE_4u-uf5k&usqp=CAU" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Henry (Hank) P. McCoy ;</li>
<li><strong>Profession(s) : </strong>Biochimiste, enseignant ;</li>
<li><strong>Famille : </strong>Norton McCoy (père), Edna McCoy (mère), Sadie McCoy (grand-mère), Robert McCoy (oncle) ;</li>  
<li><strong>Espèce : </strong>Mutant ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, agile, possède des facteurs guérisseurs, des réflexes surhumains, des sens aiguisés, des griffes aux mains et aux pieds,  ;</li> 
<li><strong>Caractéristique(s) : </strong>Génie intellectuelle, expert sur les mutations et l’évolution biologique de l’être humain ;</li>
<li><strong>Affiliation(s) : </strong>Membre des <a href="/heros/xmen" style="color: orange;">X-Men</a> et des Avengeurs secrets, professeur au Xavier Institute for Higher Learning, instructeur de l’Initiative, ancien membre du SWORD, Club-X, des <a href="/heros/avengeurs" style="color: orange;">Avengeurs</a>, des <a href="/heros/defenders" style="color: orange;">Defenders</a>, d’X-Facteur ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/magneto" style="color: orange;">Magnéto</a>, <a href="/heros/mystique" style="color: orange;">Mystique</a>, le Club des Damnés (organisation criminelle composée de mutants puissants et riches), Dark Beast, <a href="/heros/apocalypse" style="color: orange;">Apocalypse</a>.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Le Fauve est un mutant qui possède des caractéristiques félines, telles que des pieds et des mains agiles, des griffes rétractables et une agilité surhumaine. Il a une apparence bleue et recouverte de poils, ainsi qu'un intellect exceptionnel.<br><br>

Hank McCoy a commencé son parcours en tant que membre fondateur des X-Men, une équipe de super-héros mutants dirigée par le Professeur <a href="/heros/professorX" style="color: orange;">Charles Xavier</a>. Il était souvent le pilote de l'équipe et un membre clé dans les missions. Au fil des années, il a combattu de nombreux ennemis, notamment Magnéto, Mystique et le Club des Damnés.<br><br>

Au cours de son existence, le Fauve a subi différentes transformations physiques. Initialement doté d'une apparence humaine avec des attributs félines mineurs, son apparence s'est progressivement transformée en une forme plus animale. Cela a été accompagné d'un certain niveau de mutation génétique, ce qui a renforcé ses capacités physiques et intellectuelles.<br><br>

Le Fauve est également un brillant scientifique, spécialisé dans la génétique et la biologie. Son intelligence lui a permis de contribuer de manière significative à la compréhension et à l'utilisation des pouvoirs mutants, ainsi qu'au développement de technologies avancées au sein des X-Men.<br><br>

Ainsi, le Fauve a été un membre clé des X-Men, mais il a également fait équipe avec d'autres groupes de super-héros, tels que les Vengeurs et les Défenseurs. Son rôle en tant que scientifique et mentor l'a souvent amené à enseigner à de jeunes mutants.<br><br>

Malgré ses luttes personnelles avec son apparence physique et son sentiment de différence, le Fauve est resté fidèle à sa cause de protection et de défense des mutants et de l'humanité.<br><br>

Enfin, son rôle de membre des X-Men, sa nature mutante et son intelligence remarquable sont des éléments clés de son histoire dans les comics Marvel.
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
