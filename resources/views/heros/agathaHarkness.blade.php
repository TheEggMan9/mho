<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Agatha Harkness</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>AGATHA HARKNESS</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://scoop.previewsworld.com/Image/NewsImage/4/249680/1443785/1" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Agatha Harkness ;</li>
<li><strong>Profession(s) : </strong>Sorcière, tutrice, gouvernante, maire de New-Salem ;</li>
<li><strong>Famille : </strong>un ancien époux non identifié, Nicholas Scratch (fils) ; Brutacus, Epine, Hydron, Vacuum (petit-fils); Gazelle, Reptilla, Vertigo (petites-filles); Abigail Harkness (lien de parenté inconnu) ;</li>  
<li><strong>Espèce : </strong>Humaine altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Possède des pouvoirs magiques, possède un chat démoniaque (ebène) capable de se régénérer même après une destruction virtuellement totale, de se transformer en une panthère ou un félin humanoïde géant et à travers lequel Agatha peut voir, entendre et, parfois même, lancer des sorts ;</li> 
<li><strong>Caractéristique(s) : </strong>Douée intellectuellement, Maîtrise la magie, possède d'importantes connaissances en occultisme ;</li>
<li><strong>Affiliation(s) : </strong>Ancienne dirigeante des Sorciers de New-Salem ;</li>
<li><strong>Ennemi(s) récurrent(s) : </strong>Nicholas Scratch (son fils), <a href="/heros/magneto" style="color: orange;">Magnéto</a>, Salem's Seven (groupe composé de sept membres, chacun étant des enfants de Nicholas Scratch), <a href="/heros/scarlettWitch" style="color: orange;">Scarlett Witch</a> (allant de la collaboration à l'opposition en fonction des circonstances), <a href="/heros/doctorStrange" style="color: orange;">Doctor Strange</a> (allant de la collaboration à l'opposition en fonction des circonstances).</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Agatha Harkness est une sorcière puissante qui a vécu pendant plusieurs siècles. Elle a été présentée pour la première fois dans les comics <a href="/heros/fantasticFour" style="color: orange;">Fantastic Four</a>, où elle a été engagée par le père de Franklin Richards, alias <a href="/heros/misterFantastic" style="color: orange;">Mr Fantastic</a>, pour devenir la nounou et la mentore de Franklin. Agatha a enseigné à Franklin l'utilisation de ses pouvoirs mutants et l'a aidé à contrôler ses pouvoirs grandissants.<br><br>

Par la suite, Agatha Harkness est devenue une figure maternelle et une alliée de Wanda Maximoff, connue sous le nom de Scarlet Witch. Elle a joué un rôle crucial dans la formation et le développement des pouvoirs magiques de Wanda. Agatha a également aidé Wanda à comprendre son héritage mystique et à maîtriser ses pouvoirs chaotiques.<br><br>

Cependant, l'histoire d'Agatha Harkness n'est pas uniquement centrée sur son rôle de mentore. Elle a également été confrontée à des défis et des adversaires. Son propre fils, Nicholas Scratch, est devenu un sorcier maléfique et a cherché à s'emparer de ses pouvoirs. Agatha a dû se battre contre lui et faire face aux conséquences de ses actions.<br><br>

Agatha Harkness a également été impliquée dans des intrigues liées à Salem's Seven, un groupe de sorciers maléfiques. Bien que liée à eux par des liens familiaux, Agatha s'est retrouvée en conflit avec ses petits-enfants adoptifs, qui cherchaient à renverser son autorité.<br><br>

Au fil des années, Agatha Harkness est apparue dans de nombreuses séries de comics Marvel, collaborant parfois avec des héros tels que Doctor Strange ou étant impliquée dans des événements magiques majeurs. Son expertise en sorcellerie et sa sagesse ont fait d'elle une figure respectée et reconnue au sein de la communauté magique de l'univers Marvel.


</p> <!--histoire-->
</p>    
  </div>
</div>
</body>
</html>
