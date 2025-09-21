<!--METTRE IMAGE DANS IMG!!!!!!-->
<!DOCTYPE html>
<html lang="fr">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Abomination</title> <!--NOM HEROS-->
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
                            <img src="{{ asset('img/heros/abomination.jpg') }}" class="img-fluid" alt="abomination"> <!--IMAGE HEROS + nom heros-->
                                <div class="text-center my-4"> 
		 	                        <h1 style="color: white;">ABOMINATION</h1> <!--NOM HEROS -->
		                        </div>
                        </div>
                            <div class="col-md-8">
                                <h2 style="color: white;"><u>Descriptif</u></h2> <!--DESCRIPTIF-->
                                    <ul>
                                        <li><strong>Nom complet : </strong>Emil Blonsky ;</li>
                                        <li><strong>Profession(s) : </strong>Ancien professeur de littérature, ancien espion, criminel professionnel ;</li>
                                        <li><strong>Famille : </strong>Nadia Dornova (première épouse, divorcée), Nadia (Blonsky) (seconde épouse, divorcée) ;</li>
                                        <li><strong>Espèce : </strong>Humain altéré ;</li>
                                        <li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Attributs physiques surhumains, resistance surhumaine, facteur guérisseur ;</li>
                                        <li><strong>Caractéristique(s) : </strong>Parle couramment le russe, le serbo-croate et l'anglais ;</li>
                                        <li><strong>Affiliation(s) : </strong>Ancien membre de l’équipage du vaisseau spatial Andromède, ancien agent du Maître des Galaxies, du général Thaddeus Ross (<a href="{{ url('/heros/redHulk') }}" style="color: orange;">Red Hulk</a>) et de <a href="{{ url('/heros/modok') }}" style="color: orange;"> Modok</a>, allié des Abominations/Oubliés ;</li>
                                        <li><strong>Ennemi(s) récurrent(s) : </strong><a href="{{ url('/heros/hulk') }}" style="color: orange;">Hulk</a> , le<a href="{{ url('/heros/leader') }}" style="color: orange;"> Leader</a>, Red Hulk, <a href="{{ url('/heros/hulkbuster') }}" style="color: orange;">Hulkbuster</a>.</li>
                                    </ul>
                                <h2 style="color: white;"><u>Histoire</u></h2> <!--HISTOIRE-->
                                    <p>
                                        Emil Blonsky, était un agent du KGB (service de renseignement soviétique) qui a été chargé de traquer Hulk, le géant vert aux pouvoirs surhumains. Dans sa quête pour surpasser Hulk, Blonsky s'est exposé à une version expérimentale du sérum du Super-Soldat, similaire à celui qui a créé <a href="{{ url('/heros/captainAmerica') }}" style="color: orange;">Captain America</a>. Cependant, les effets du sérum combinés à une dose de rayons gamma ont transformé Blonsky en une créature monstrueuse connue sous le nom de l'Abomination.<br><br>
                                        En tant qu'Abomination, Blonsky possède une force, une endurance et une résistance surhumaines qui rivalisent avec celles de Hulk. Il a également une apparence reptilienne, avec une peau écailleuse et une taille démesurée. L'Abomination est devenu l'un des ennemis les plus puissants et récurrents de Hulk.<br><br>
                                        Au fil des années, l'Abomination a affronté Hulk à de nombreuses reprises, provoquant des combats dévastateurs et destructeurs. Il a également croisé le chemin d'autres héros Marvel tels que <a href="{{ url('/heros/thor') }}" style="color: orange;">Thor</a>, <a href="{{ url('/heros/ironMan') }}" style="color: orange;">Iron Man</a> et les <a href="{{ url('/heros/avengers') }}" style="color: orange;">Avengers</a>. Dans certains récits, l'Abomination a cherché à s'emparer du pouvoir de Hulk pour devenir le monstre le plus puissant de l'univers.<br><br>
                                        L'histoire de l'Abomination est marquée par des moments de rédemption, de rivalité et de conflit intérieur. À plusieurs occasions, il a tenté de retrouver son humanité et de se racheter, mais ses impulsions violentes et son désir de surpasser Hulk l'ont souvent ramené à son état monstrueux.
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
