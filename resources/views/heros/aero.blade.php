<!DOCTYPE html>
<html lang="fr">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Aero</title> <!--NOM HEROS-->
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
                            <img src="{{ asset('img/heros/aero.jpg') }}" class="img-fluid" alt="..."> <!--IMAGE HEROS + nom heros-->
                                <div class="text-center my-4"> 
		 	                        <h1 style="color: white;">AERO</h1> <!--NOM HEROS -->
		                        </div>
                        </div>
                            <div class="col-md-8">
                                <h2 style="color: white;"><u>Descriptif</u></h2> <!--DESCRIPTIF-->
                                    <ul>
                                        <li><strong>Nom complet : </strong>Lei Ling ;</li>
                                        <li><strong>Profession(s) : </strong>Architecte, agent gouvernemental ;</li>
                                        <li><strong>Famille : </strong>Une mère non identifiée ;</li>
                                        <li><strong>Espèce : </strong>Humaine altérée ;</li>
                                        <li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Aérokinésie (produit et contrôle les vents et les courants aériens) ;</li>
					                              <li><strong>Caractéristique(s) : </strong>Sens aiguisés, maîtrise le QI (permet d'améliorer ses capacités physiques et ses mouvements) ;</li>
                                        <li><strong>Affiliation(s) : </strong>Membre des Nouveaux Agents d’Atlas, du Cabinet de l’Arbre sacré ;</li>
                                        <li><strong>Ennemi(s) récurrent(s) : </strong>Warping Wind (possède des pouvoirs similaires à ceux d'Aero), Masters of the Elements (groupe est composé de quatre individus, chacun représentant l'un des quatre éléments classiques : Terre, Feu, Air et Eau).</li>
                                    </ul>
                                <h2 style="color: white;"><u>Histoire</u></h2> <!--HISTOIRE-->
                                    <p>
                                        Lei Ling était une ingénieure aéronautique vivant à Shanghai. Un jour, alors qu'elle assistait à une conférence scientifique, elle fut exposée à une énergie mystique appelée le Qi du Ciel et de la Terre. Cela lui conféra des pouvoirs aérodynamiques, lui permettant de manipuler l'air et de voler. Inspirée par ses nouveaux pouvoirs, Lei Ling décida de devenir une super-héroïne pour protéger Shanghai et ses habitants.<br><br>
                                        Rebaptisée Aero, elle rejoignit les Avengers de Shanghai, une équipe de héros chinois formée pour défendre la ville contre les menaces superpuissantes. Aux côtés de ses coéquipiers tels que <a href="/heros/wave" style="color: orange;">Wave</a>, <a href="/heros/swordMaster" style="color: orange;">Sword Master</a> et White Fox, Aero s'engagea dans des combats contre des ennemis puissants et protégea sa ville des dangers.<br><br>
                                        Au fil de ses aventures, Aero a dû affronter des ennemis tels que la Jade Claw, une super-vilaine chinoise, ainsi que d'autres adversaires liés à des menaces internationales ou extraterrestres. Grâce à ses pouvoirs aérodynamiques et à sa maîtrise du Qi, Aero a prouvé sa valeur en tant que membre des <a href="/heros/avengers" style="color: orange;">Avengers</a> de Shanghai et est devenue une défenseuse respectée de sa ville.<br><br>
                                        L'histoire d'Aero est toujours en évolution, et de nouveaux chapitres de son parcours continuent d'être écrits dans les comics Marvel.
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
