<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Capatin America</title>
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
</head>
  
<body>

  <div class="lineaire-simple"> 

  <h1>CAPTAIN AMERICA</h1> <!--NOM HEROS -->
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
</style><p class="float-content"><img src="https://cdn2.originalcomics.fr/24176/captain-america-lintegrale-1964-1966-nouvelle-edition-vf.jpg" class="image-align-left"><!--IMAGE HEROS-->
<p class="centrer">
<h2><u>Descriptif</u></h2>
<li><strong>Nom complet : </strong>Steven (steve) rogers ;</li>
<li><strong>Profession(s) : </strong>Aventurie, administrtion, officier fédéral, ancien artiste de travaux publics, ancien dessinateur indépendant, ancien agent spécial du SHIELD, ancien officier de police, ancien enseignant, ancien militaire, ancien entraîneur, ancien artiste de la WPA (Work Projects Administration) ;</li>
<li><strong>Famille : </strong>Joseph rogers (père), Sarah rogers (mère) ;</li>  
<li><strong>Espèce : </strong>Humain altéré ;</li>  
<li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Costume renforcé, bouclier en vibraniun, moto ;</li> 
<li><strong>Caractéristique(s) : </strong>Stratège et tacticien militaire accompli et expert au combat à mains nues, combat au bouclier, acrobate ;</li>
<li><strong>Affiliation(s) : </strong>Membre des Vengeurs (Avengers), des Vengeurs Secrets (Secret Avengers), des Illuminati,
Ancien membre des Envahisseurs (All Winners Squad<br>de la Seconde Guerre Mondiale), des Rédempteurs, de la Vengeance Royale, des Défenseurs secrets (Secret Defenders), de l’équipe informelle du Captain, ancien partenaire de Bucky (James Barnes, puis Rick Jones), du Faucon (Sam Wilson), du Nomade (Jack Monroe), de Démolition-Man, allié régulier du SHIELD, anciensujet de test du Project Rebirth, ancien membre de l'US Army ;</li>
<li><strong>Ennemi(s) récurrents(s) : </strong>Red skull, Hydra.</li>
<br>


<h2><u>Histoire</u></h2>
<p class="centrer">
Steve Rogers est né en 1922 dans le Lower East Side de Manhattan, dans une famille d'origine irlandaise. Il grandit pendant la crise de 1929 et était souvent protégé par son ami Arnie Roth contre les brutes de son quartier. Son grand-père idéaliste lui racontait des histoires de justice et de lutte contre l'oppression, ce qui forgea son sens de la compassion.
En tant qu'adolescent frêle, Steve rêvait d'une carrière artistique. Malheureusement, son père alcoolique décéda et sa mère mourut de pneumonie, le laissant seul. Malgré ces difficultés, Steve remporta un prix en 1939 pour ses talents artistiques.

Au début des années 1940, Steve fut consterné par les atrocités commises par l'Allemagne nazie et tenta de s'engager dans l'armée. Cependant, sa constitution fragile l'empêcha de réussir les tests physiques. Sa persistance attira l'attention du général Chester Phillips, qui l'invita à se porter volontaire pour l'Opération : Renaissance.
Steve accepta et devint l'un des candidats du projet secret visant à améliorer les soldats américains. Il fut soumis à un sérum expérimental et à des vita-rayons, ce qui le transforma physiquement en un homme parfaitement adapté. Malheureusement, le créateur du sérum, le professeur Abraham Erskine, fut assassiné peu après.
Devenu le seul super-soldat, Steve reçut la mission de devenir Captain America, le héros américain symbolique. Il combattit des ennemis tels que le Crâne rouge, des agents nazis et des super-soldats renégats. Il se lia également d'amitié avec le dirigeant du Wakanda, T'Chaka, obtenant un échantillon de vibranium pour créer son bouclier indestructible.
Captain America fut le symbole de la lutte contre le mal pendant la Seconde Guerre mondiale. Au fil des années, il continua à défendre les valeurs de la liberté et de la justice, devenant un membre fondateur des Avengers et un leader respecté.
</p> 
</p>    
  </div>
</div>
</body>
</html>
