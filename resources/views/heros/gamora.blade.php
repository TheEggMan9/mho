<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Gamora</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>Gamora</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://cdn.shopify.com/s/files/1/0403/3514/7159/products/202302-0000412069_600x600_crop_center.jpg?v=1684852234" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Gamora ;</li>
<li><strong>Profession(s) : </strong>Aventurière, ancienne assassin, espionne et agent de Thanos ;</li>
<li><strong>Famille : </strong>hanos (père adoptif), Eros (alias Starfox, oncle par adoption), Nebula (soeur par adoption), Mentor (grand-père par adoption), Sui-San (grand-mère par adoption), l’ensemble des Eternels de Titan (à des degrés divers) ;</li>  
<li><strong>Espèce : </strong>Zen-Whoberi ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, facteur guérisseur accéléré, possède des couteaux/des dagues et une épée ;</li> 
<li><strong>Caractéristique(s) : </strong>Excellente combattante à mains nues et avec tout types d'armes blanches, maîtrise de nombreuses techniques de combats,  ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Gardiens de la galaxie, ancienne membre de l’Elite Phalanx, de l’Infinity Watch, ancienne agente de Thanos ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Thanos, Nebula, Badoon (race extraterrestre conquérante), Magus (version maléfique et future d'Adam Warlock), la Congrégation Universelle (organisation intergalactique qui tente de conquérir et de régner sur l'univers).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Gamora est née sur la planète Zen-Whoberi, dans le système stellaire de Drox. Son peuple, les Zen-Whoberis, était pacifique jusqu'à ce que leur planète soit attaquée par des fanatiques religieux appelés les Badoons. Gamora est l'unique survivante de cette attaque, et elle est recueillie par Thanos, un puissant seigneur de guerre et un déviant génétique.<br><br>

Thanos élève Gamora comme sa fille adoptive et la forme en une guerrière redoutable. Tout au long de son adolescence et de sa vie adulte, Gamora accompagne Thanos dans ses quêtes de conquête et de destruction, devenant elle-même une tueuse impitoyable et surnommée "la Fille la plus dangereuse de l'univers".<br><br>

Cependant, au fil du temps, Gamora commence à remettre en question les motivations et les actions de Thanos. Elle réalise la cruauté de ses actes et se rebelle finalement contre lui. Gamora se tourne vers le côté des héros et rejoint les Gardiens de la Galaxie, une équipe de super-héros cosmiques qui se battent pour protéger l'univers.<br><br>

En tant que membre des Gardiens de la Galaxie, Gamora participe à de nombreuses aventures, combattant des menaces intergalactiques et se liant d'amitié avec ses coéquipiers, tels que Star-Lord, Rocket Raccoon, Drax le Destructeur et Groot. Elle joue un rôle essentiel dans la défense de la galaxie contre des ennemis tels que Thanos, la Congrégation Universelle et d'autres forces maléfiques.<br><br>

Gamora est également liée à Adam Warlock, un personnage clé de l'univers Marvel, et elle est souvent impliquée dans des récits cosmiques qui explorent des concepts tels que l'Infini, l'Âme et le pouvoir des Gemmes de l'Infini.<br><br>

Son parcours est marqué par des luttes internes entre son héritage de violence et sa quête de rédemption. Gamora cherche à se racheter de son passé en cherchant la paix et la justice, tout en faisant face à ses démons intérieurs et en cherchant sa véritable identité en dehors de l'ombre de Thanos.  
</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
