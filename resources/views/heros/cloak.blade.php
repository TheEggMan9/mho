<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Cloak</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

  <div class="lineaire-simple">

    <h1>CLOAK</h1>
    <!--NOM HEROS -->
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
    </style>
    <p class="float-content"><img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/ffdce764-6022-4c89-acec-83aa2bc17dcd/d101owg-af221e70-4f2b-416d-8665-ffb535095620.jpg/v1/fill/w_266,h_400,q_70,strp/cloak_and_dagger___color_by_juggertha_d101owg-400t.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9OTAyIiwicGF0aCI6IlwvZlwvZmZkY2U3NjQtNjAyMi00Yzg5LWFjZWMtODNhYTJiYzE3ZGNkXC9kMTAxb3dnLWFmMjIxZTcwLTRmMmItNDE2ZC04NjY1LWZmYjUzNTA5NTYyMC5qcGciLCJ3aWR0aCI6Ijw9NjAwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.jFvZrYDH5INcaF8F2JroDeJwkIxeFBscNIKjh35MsGA" class="image-align-left">
      <!--IMAGE HEROS-->
    <p class="centrer">
    <h2><u>Descriptif</u></h2>
    <li><strong>Nom complet : </strong> Tyrone (Ty) Johnson ;</li>
    <li><strong>Profession(s) : </strong>Vigilant ;</li>
    <li><strong>Famille : </strong>les Johnson (parents), Otis Johnson (frère), Anna Johnson (sœur jumelle), Smokin’Joe
      (grand-père) ;</li>
    <li><strong>Espèce : </strong>Humain altéré ;</li>
    <li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Téléportation, projection des ténèbres, manipule les ténébres (créer une cape noir qui lui permet de se camoufler, de se déplacer à travers les ombres<br> et de se cacher dans les ténèbres), absorbe l'énergie (nécessaire pour survivre), repére les personnes et les objets dans les ténèbres et les localise ;</li>
    <li><strong>Caractéristique(s) : </strong>Intangibilité, invisibilité quand il porte sa Cape, seul son visage est visible.
      visible ;</li>
    <li><strong>Affiliation(s) : </strong>Partenaire de Dagger, anciens alliés des X-Men, anciens membres des Dark
      X-Men, des Secret Avengers ;</li>
    <li><strong>Ennemi(s) récurrent(s) : </strong>Mayhem, Mister Jip, D'Spayre, Predator, Blackout.</li>
    <br>


    <h2><u>Histoire</u></h2>
    <p class="centrer">
L'histoire de Cloak est celle d'un jeune homme nommé Tyrone Johnson. Lui et une jeune femme nommée Tandy Bowen se sont rencontrés dans des circonstances difficiles alors qu'ils étaient tous les deux des adolescents sans-abri à New York. Ils sont devenus amis et ont découvert qu'ils possédaient des pouvoirs complémentaires.<br><br>

Tyrone, alias Cloak, a été exposé à une substance expérimentale qui lui a conféré des pouvoirs liés aux ténèbres. Il a acquis la capacité de se téléporter à travers les ombres, de manipuler les ténèbres et d'absorber l'énergie vitale des autres. Cependant, il a découvert que ces pouvoirs étaient liés à une dimension sombre et qu'il devait se nourrir de l'énergie des autres pour survivre.<br><br>

Tandy, alias Dagger, a été exposée à une autre substance expérimentale qui lui a donné des pouvoirs de manipulation de la lumière. Elle peut créer des dagues de lumière et projeter des éclairs lumineux. Les pouvoirs de Dagger se complètent parfaitement avec ceux de Cloak, formant un duo équilibré de lumière et de ténèbres.<br><br>

En tant que Cloak, Tyrone est devenu le protecteur des opprimés et des marginaux, utilisant ses pouvoirs pour combattre le crime et aider les plus vulnérables. Avec Dagger, ils sont devenus les super-héros connus sous le nom de Cloak and Dagger.<br><br>

Au fil de leurs aventures, Cloak et Dagger ont affronté de nombreux ennemis, notamment des criminels, des organisations corrompues et des entités surnaturelles. Ils ont également été confrontés à leurs propres démons intérieurs et à la lutte pour maîtriser leurs pouvoirs et maintenir leur équilibre mental.
    </p>
    <!--histoire-->
    </p>
  </div>
  </div>
</body>

</html>
