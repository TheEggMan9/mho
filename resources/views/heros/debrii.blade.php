<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Debrii</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DEBRII</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://cdn.marvel.com/u/prod/marvel/i/mg/7/d0/5bbcfbd31debe/portrait_uncanny.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Deborah Fields ;</li>
<li><strong>Profession(s) : </strong>Juge arbitre d’une émission de téléréalité, ancienne aventurière, ancienne star d’une émission de téléréalité ;</li>
<li><strong>Famille : </strong>Iconnue ;</li>  
<li><strong>Espèce : </strong>Mutante ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>créer des barrières protectrices et des boucliers défensifs en utilisant son énergie psionique, projete ses champs de force sous forme d'attaques offensives (les utilisant pour repousser ou frapper ses adversaires) ;</li> 
<li><strong>Caractéristique(s) : </strong>Athlète, agile, maîtrise les arts martiaux, combats corps à corps ;</li>
<li><strong>Affiliation(s) : </strong>Ancien membre des Avengeurs Résistants, New Warriors, de l’Initiative, de Contre-Force, des Vengeurs secrets ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Aucun.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Deborah Fields était une jeune femme dotée de pouvoirs mutants. Elle possède la capacité de générer des champs de force solides, qu'elle peut utiliser pour se protéger ou attaquer ses ennemis. Déterminée à utiliser ses pouvoirs pour le bien, elle adopte le nom de Debrii et décide de devenir une super-héroïne.<br><br>

Debrii devient membre des X-Men et s'implique dans la lutte contre le crime dans le quartier de Mutant Town, également connu sous le nom de District X. Ce quartier est peuplé en majorité par des mutants et est souvent le théâtre de tensions entre humains et mutants.<br><br>

Au sein des X-Men, Debrii fait équipe avec d'autres héros mutants pour protéger Mutant Town et ses habitants. Elle utilise ses pouvoirs de champ de force pour combattre les criminels et défendre les innocents.<br><br>

Debrii se retrouve souvent confrontée à des situations dangereuses et à des intrigues criminelles complexes. Elle doit faire face à des ennemis variés, tels que des super-vilains, des organisations criminelles et des individus cherchant à exploiter les mutants.<br><br>

Malgré sa force et sa détermination, Debrii fait face à des défis personnels et à des moments de doute quant à son rôle en tant que super-héroïne. Elle se bat pour trouver sa place au sein des X-Men et pour faire la différence dans la lutte pour la justice et l'égalité des mutants.<br><br>

Bien que Debrii n'ait pas eu une exposition prolongée dans les comics Marvel et qu'elle n'ait pas connu autant de développements que certains autres personnages, elle reste un membre apprécié de la communauté mutante et une super-héroïne déterminée à défendre les innocents et à protéger Mutant Town.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
