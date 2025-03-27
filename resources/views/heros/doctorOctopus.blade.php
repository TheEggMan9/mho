<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Doctor Octopus</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>DOCTOR OCTOPUS</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://3.bp.blogspot.com/-c1cs6evF9QY/UaAU7cN73UI/AAAAAAAANb4/qPci8RDUb80/s1600/octopus1.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Otto Gunther Octavius ;</li>
<li><strong>Profession(s) : </strong>Cerveau criminel, terroriste, ancien chercheur en physique atomique, ancien vigilant, ancien professeur, ancien PDG ;</li>
<li><strong>Famille : </strong>Torbert Theodore Octavius (père, décédé), Mary Lavinia Octavius (mère, décédée), Karl Octavius (oncle), Elias Hargrove (cousin), Thomas Hargrove (cousin) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Possède quatre tentacules artificiels (sur son dos) qu’il contrôle mentalement ;</li> 
<li><strong>Caractéristique(s) : </strong>Brillant ingénieur/inventeur/scientifiques (spécialisés dans les radiations nucléaires et ses effets sur la physiologie humaine), intelligence extrêmement développée ;</li>
<li><strong>Affiliation(s) : </strong>Fondateur et ancien membre des Sinister Six, d’une incarnation des Maîtres du mal, ancien membre d’Hydra, des Avengers d’Hydra, de l’Armée des Thunderbolts, de la Légion des maudits, de la Spider-Armée, de la Spider-Armée supérieure, ancien chef de l’Equipe de nuit, fréquemment chef de son propre gang ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Spider-Man, les Avengers, Daredevil.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Otto Octavius était un brillant scientifique spécialisé dans la physique nucléaire. Suite à un accident de laboratoire, ses bras ont été endommagés et fusionnés à son corps, lui conférant une force surhumaine et une agilité accrue. Ces tentacules mécaniques sont devenus une extension de sa volonté et lui ont valu le surnom de Docteur Octopus ou Doc Ock.<br><br>

Décidant d'utiliser ses nouvelles capacités pour des activités criminelles, Doctor Octopus est devenu l'un des ennemis les plus redoutables de Spider-Man. Il a affronté le super-héros à de nombreuses reprises, utilisant à la fois sa force physique et son intelligence scientifique pour tenter de le vaincre.<br><br>

Au fil des ans, Doctor Octopus a également formé et dirigé les Sinister Six, un groupe de super-vilains réunis dans le but commun de détruire Spider-Man. Ce groupe a souvent été une menace majeure pour le héros masqué et a donné lieu à des confrontations épiques entre Doctor Octopus et Spider-Man.<br><br>

Au-delà de ses ambitions criminelles, le personnage Doctor Octopus a connu des évolutions significatives. À un moment donné, il a même réussi à transférer son esprit dans le corps de Peter Parker, prenant le contrôle du corps de Spider-Man et laissant l'esprit de Peter emprisonné dans le corps du Doctor Octopus. Cela a donné lieu à une intrigue majeure dans laquelle Docteur Octopus a pris le rôle de Spider-Man pendant un certain temps.<br><br>

En fin de compte, Doctor Octopus reste l'un des adversaires les plus persistants et les plus emblématiques de Spider-Man. Son intelligence, sa ruse et sa puissance physique font de lui un adversaire redoutable, et ses interactions avec Spider-Man ont façonné de nombreux récits captivants au fil des années. 
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
