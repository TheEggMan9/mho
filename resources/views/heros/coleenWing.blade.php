<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Coleen Wing</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>COLEEN WING</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://pm1.narvii.com/6407/48dd480326163bcdd620e9c50ab6c5e44e5a5807_00.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Colleen Wing ;</li>
<li><strong>Profession(s) : </strong>Détective privé, mercenaire, agent de caution, garde du corps ;</li>
<li><strong>Famille : </strong>Lee Wing (père, décédé), une mère non identifiée (décédée), Kenji Ozawa (grand-père maternel, décédé), Osama Ozawa (grand-mère maternelle) ;</li>  
<li><strong>Espèce : </strong>Humaine ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Sabre japonnais ;</li> 
<li><strong>Caractéristique(s) : </strong>Maîtrise des arts martiaux et des sabres ;</li>
<li><strong>Affiliation(s) : </strong>Membre de Nightwing Restorations (les Filles du Dragon), alliée récurrente de Luke et Iron-Fist, ancien membre des Héros à Louer ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Bakuto, Typhoid Mary, Steel Serpent, Nightshade, Ghoshin.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Colleen Wing est née à Tokyo, au Japon, et a grandi en étant fascinée par les arts martiaux. Elle a été formée par son grand-père, Kenji Ozawa, dans des styles de combat traditionnels japonais tels que le kenjutsu et le karaté. Après la mort de son grand-père, Colleen est devenue une combattante talentueuse et a commencé à voyager à travers le monde pour améliorer ses compétences.<br><br>

Au cours de ses voyages, Colleen a rencontré le héros Iron Fist et les deux sont devenus partenaires et amis proches. Ensemble, ils ont formé une équipe dynamique et ont combattu le crime dans les rues de New York. Colleen est également devenue amie avec Misty Knight, une détective privée et ancien membre de la police de New York.<br><br>

Colleen a également été impliquée dans les activités de l'organisation criminelle appelée La Main. Elle a combattu contre eux à plusieurs reprises, en tant qu'ennemis jurés. Dans certaines versions de l'histoire, elle a même été membre de La Main avant de se retourner contre eux pour lutter pour la justice.<br><br>

En plus de ses exploits de combat, Colleen a également dirigé son propre dojo d'arts martiaux à New York et a enseigné aux autres. Elle a joué un rôle de mentor pour de nombreux jeunes combattants, leur transmettant ses connaissances et sa sagesse.<br><br>

Tout au long de son parcours, Colleen Wing a affronté de nombreux ennemis, a fait face à des trahisons et a surmonté des défis personnels. Elle a démontré sa force, son courage et sa détermination en tant que combattante sans pouvoirs surnaturels, mais dotée d'une expertise martiale inégalée.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
