<!DOCTYPE html>
<html lang="fr">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Absorbing Man</title> <!--NOM HEROS-->
      <link href="{{ asset('css/style2.css') }}" rel="stylesheet" type="text/css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    </head>

    <body>

    <div class="bg-image">
    
    <div class="lineaire-simple "> 

	        <header class="bg-dark text-white text-center py-4">
		      <h1>Marvel's Heroes Origins</h1>
            </header>

            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
            
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto">
					            <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/onglet/sommaire') }}">Sommaire</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/onglet/monCompte') }}">Mon compte</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/onglet/seConnecter') }}">Se connecter</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/onglet/creerCompte') }}">Créer un compte</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/onglet/quizzMarvel') }}">Quizz</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                    @csrf
                                </form>
			                    <li class="nav-item">
                                    <a href="https://www.instagram.com/math.is93000?igshid=ZDc4ODBmNjlmNQ==" target="_blank" style="color: white; display: inline-block;">
                                    <i class="bi bi-instagram" style="font-size: 20px;"></i></a>
                                </li>
                            </ul>
                        </div>
                </div>
            </nav>
		
            <div class="imagedefond2" style="background-image: url('path/to/your/image.jpg'); min-height: 400px; background-size: cover; background-position: center;">
               <div class="container text-center py-5">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <form autocomplete="off">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="input" placeholder="Rechercher un personnage" />
                                </div>
                                    <ul class="list list-group"></ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <script src="{{  asset('js/script.js') }}"></script>
            <script src="{{ asset('js/script2.js') }}"></script></a>
	
            <div class="imagedefond3" style="background-image: url('path/to/your/image.jpg'); min-height: 400px; background-size: cover; background-position: center;">
                <div class="container my-4">
                    <div class="row">
                        <div class="col-md-4 img">
                            <img src="{{ asset('img/absorbingMan.jpg') }}" class="img-fluid" alt="Absorbing Man"> <!--IMAGE HEROS + nom heros-->
                                <div class="text-center my-4"> 
		 	                        <h1 style="color: white;">ABSORBING MAN</h1> <!--NOM HEROS -->
		                        </div>
                        </div>
                            <div class="col-md-8">
                                <h2 style="color: white;"><u>Descriptif</u></h2> <!--DESCRIPTIF-->
                                    <ul>
                                        <li><strong>Nom complet : </strong>Carl (Crusher) Creel ;</li>
                                        <li><strong>Profession(s) : </strong>Criminel professionnel, ancien boxeur ;</li>
                                        <li><strong>Famille : </strong>Mary Mac Pherran (<a href="{{ url('/heros/titania') }}" style="color: orange;">Titania</a>, épouse), Rockwell Davis (Hi-Lite, cousin), Jerry Sledge (Muraille, fils) ;</li>
                                        <li><strong>Espèce : </strong>Humain altéré ;</li>
                                        <li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Possède une force surhumaine, absorbe la matière, mimétisme (imitation) et changement de taille, peut contrôler l'esprit d'une personne à distance, utilise un boulet de prisonnier en acier relié à une chaîne ;</li>
                                        <li><strong>Caractéristique(s) : </strong>Combat à mains nues, cambrioleur expérimenté ;</li>
                                        <li><strong>Affiliation(s) : </strong>Ancien membre des Dignes/de la Légion fatale/des Maîtres du Mal, partenaire de Titania ;</li>
                                        <li><strong>Ennemi(s) récurrent(s) : </strong><a href="{{ url('/heros/thor') }}" style="color: orange;">Thor</a>, <a href="{{ url('/heros/hulk') }}" style="color: orange;">Hulk</a>, les <a href="{{ url('/heros/avengers') }}" style="color: orange;">Avengers</a>, <a href="{{ url('/heros/daredevil') }}" style="color: orange;">Daredevil</a>, <a href="{{ url('/heros/spiderMan') }}" style="color: orange;">Spider-Man</a>.</li>
                                    </ul>
                                <h2 style="color: white;"><u>Histoire</u></h2> <!--HISTOIRE-->
                                    <p>
                                        Crusher Creel, née à New York, était un criminel de bas niveau qui a eu un destin singulier lorsqu'il a accepté de participer à une expérience scientifique. Cette expérience impliquait la prise d'un sérum spécial qui lui a conféré la capacité unique d'absorber les propriétés physiques de tout matériau auquel il était exposé par simple contact.<br><br>
                                        Devenu l'Absorbing Man, Creel a commencé à utiliser ses nouveaux pouvoirs pour commettre des délits et devenir un criminel redouté. Sa capacité à absorber la force, la solidité ou les caractéristiques d'à peu près n'importe quel matériau lui a permis de se battre contre de nombreux héros Marvel.<br><br>
                                        L'Absorbing Man s'est heurté à des héros tels que Thor, Hulk, Daredevil et Spider-Man. Dans ses confrontations avec Thor, il a souvent tenté de voler les pouvoirs du dieu du tonnerre en absorbant son marteau, Mjolnir. Cependant, la volonté de Thor et la nature enchantée de son marteau ont rendu cette tâche difficile.<br><br>
                                        Absorbing Man a également rejoint les Maîtres du Mal, un groupe de super-vilains, dans leur quête pour vaincre les Avengers et d'autres héros Marvel. Cependant, il a parfois montré des signes de rédemption et s'est retrouvé à travailler aux côtés des héros dans des situations critiques.<br><br>
                                        L'histoire d'Absorbing Man est marquée par ses tentatives de trouver un équilibre entre sa vie criminelle et sa quête de rédemption. Sa relation complexe avec sa femme, Mary MacPherran, également connue sous le nom de Titania, a ajouté une dimension supplémentaire à son histoire.<br><br>
                                        Au fil des années, Absorbing Man a connu différentes évolutions et arcs narratifs dans les comics Marvel. Sa capacité d'absorption en fait un adversaire redoutable, car il peut devenir aussi puissant que le matériau qu'il absorbe. Son histoire continue d'évoluer au sein de l'univers Marvel, offrant de nouvelles perspectives et défis pour ce super-vilain polyvalent.
                                    </p> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>            
        </div>
    </div>
    </body>
</html>
