<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Dagger</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DAGGER</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/ffdce764-6022-4c89-acec-83aa2bc17dcd/d101owg-af221e70-4f2b-416d-8665-ffb535095620.jpg/v1/fill/w_266,h_400,q_70,strp/cloak_and_dagger___color_by_juggertha_d101owg-400t.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9OTAyIiwicGF0aCI6IlwvZlwvZmZkY2U3NjQtNjAyMi00Yzg5LWFjZWMtODNhYTJiYzE3ZGNkXC9kMTAxb3dnLWFmMjIxZTcwLTRmMmItNDE2ZC04NjY1LWZmYjUzNTA5NTYyMC5qcGciLCJ3aWR0aCI6Ijw9NjAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.jFvZrYDH5INcaF8F2JroDeJwkIxeFBscNIKjh35MsGA" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Tandy Bowen ;</li>
<li><strong>Profession(s) : </strong>Vigilante ;</li>
<li><strong>Famille : </strong>Melissa Bowen (mère), le Seigneur de la Lumière (père), Philip Carlisle (père adoptif, décédé), Père Michael Bowen (oncle, décédé) ;</li>  
<li><strong>Espèce : </strong>Humaine altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Lames de lumière (crée et manipule des lames de lumière blanche(tranchante)), éclair de lumière (génére des éclairs de lumière aveuglants), facteur guérisseur (utilise sa lumière pour guérir les blessures), sensible à la lumière (percevoit les variations de lumière et détecte les sources lumineuses cachées ou camouflées);</li> 
<li><strong>Caractéristique(s) : </strong>Danseuse expérimentée, agile, souple, expérimentée dans le combat à  mains nues ;</li>
<li><strong>Affiliation(s) : </strong>Partenaire de Cloak, ancienne membre des Epouses de Set, d’Eurocirque, des Marvel Knights, des New Warriors, des Défenseurs ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Mister Negative, Mayhem (ancienne amie de Dagger qui est devenue une vigilante violente), Silvermane (chef de la pègre et un ennemi fréquent et qui est<br> impliqué dans des activités criminelles et cherche souvent à éliminer nos deux héros), Blackout (super-vilain avec la capacité d'absorber la lumière et de créer des zones d'ombre), Ecstasy (sorcière avec des pouvoirs magiques liés à l'énergie mystique).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Tandy Bowen était une jeune femme vivant dans les rues de New York. Un jour, elle fit la rencontre de Tyrone Johnson, un autre adolescent sans-abri. Les deux se lièrent d'amitié et furent victimes d'une expérience menée par Simon Marshall, un criminel chimiste. Ils furent injectés avec une drogue synthétique et exposés à une mystérieuse substance appelée "lumière divine".<br><br>

Cette expérience eut des effets sur Tandy et Tyrone. Tandy développa la capacité de créer de la lumière et des lames lumineuses, tandis que Tyrone acquit la capacité de créer des zones d'ombre et de se téléporter à travers elles. Inspirés par leurs nouveaux pouvoirs, Tandy prit le nom de code Dagger et Tyrone devint Cloak.<br><br>

Dagger et Cloak formèrent un duo de super-héros, utilisant leurs pouvoirs complémentaires pour combattre le crime et venir en aide aux personnes en détresse, en particulier aux jeunes sans-abri. Leur statut de héros de rue leur valut une reconnaissance au sein de la communauté des super-héros.<br><br>

Au fil des années, Dagger s'est retrouvée impliquée dans de nombreuses aventures des comics Marvel, aux côtés de Cloak et d'autres héros tels que Spider-Man et les X-Men. Elle a affronté des ennemis redoutables, notamment Mister Negative, Mayhem, Silvermane, Blackout et Ecstasy.<br><br>

L'histoire de Dagger est marquée par sa relation étroite avec Cloak. Les deux partagent un lien profond, se complétant mutuellement dans leurs pouvoirs et leur mission de protection des innocents. Le duo a également été confronté à des défis personnels, des épreuves et des tragédies, qui ont renforcé leur détermination à lutter contre l'injustice.<br><br>

Dagger est reconnue pour son charisme, sa compassion et son optimisme. Elle est un symbole d'espoir pour les jeunes et les marginaux, s'efforçant de faire une différence positive dans le monde en utilisant ses pouvoirs de lumière.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
