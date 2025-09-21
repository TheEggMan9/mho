<!DOCTYPE html>
<html lang="fr">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Adam Warlock</title> <!--NOM HEROS-->
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
                            <img src="{{ asset('img/heros/adamWarlock.jpg') }}" class="img-fluid" alt="adamWarlock"> <!--IMAGE HEROS + nom heros-->
                                <div class="text-center my-4"> 
		 	                        <h1 style="color: white;">ADAM WARLOCK</h1> <!--NOM HEROS -->
		                        </div>
                        </div>
                            <div class="col-md-8">
                                <h2 style="color: white;"><u>Descriptif</u></h2> <!--DESCRIPTIF-->
                                    <ul>
                                        <li><strong>Nom complet : </strong>Adam Warlock ;</li>
                                        <li><strong>Profession(s) : </strong>Sauveur de mondes, messie ;</li>
                                        <li><strong>Famille : </strong>L’Enclave (Jerome Hamilton (décédé), Maris Moriak, Wladyslav Shinski, Carlo Zota, ses créateurs), Ayesha (jumelle génétique), Stakarus Vaughn-Ogord (neveu dans un futur alternatif) ;</li>
                                        <li><strong>Espèce : </strong>Humain créé artificiellement ;</li>
                                        <li><strong>Pouvoir(s)/Arme(s)/Équipement(s) : </strong>Possède des attributs physiques surhumains, peut voler, manipuler et absorber l'énergie, manipuler la matière, expert en magie, télépathe, possède des facteurs guérisseurs, possède la gemme de l'Ame sur son front, utilise un bâton karmique qui lui permet de libérer des décharges issues de l'énergie de son âme contre ses ennemis ;</li>
					                              <li><strong>Caractéristique(s) : </strong>Combat à mains nues, philosophe autodidacte accompli, agile ;</li>
                                        <li><strong>Affiliation(s) : </strong>Ancien membre des <a href="/heros/gardiensDeLaGalaxie" style="color: orange;">Gardiens de la Galaxie</a>, ancien chef de l’Infinity Watch ;</li>
                                        <li><strong>Ennemi(s) récurrent(s) : </strong><a href="/heros/thanos" style="color: orange;">Thanos</a>, <a href="/heros/magus" style="color: orange;">Magus</a> (alter ego maléfique), <a href="/heros/ultron" style="color: orange;">Ultron</a>, les Universal Church of truth (secte intergalactique dirigée par le Magus).</li>
                                    </ul>
                                <h2 style="color: white;"><u>Histoire</u></h2> <!--HISTOIRE-->
                                    <p>
                                        Adam Warlock a été créé par un groupe de scientifiques connus sous le nom de "Enclave" dans le but de devenir l'être parfait et supérieur. Il est né sur Terre, dans un cocon, et a émergé en tant qu'individu doté d'une puissance cosmique immense. Dès le début, il était destiné à être un être surhumain et spirituellement avancé.<br><br>
                                        Au fur et à mesure de son évolution, Warlock a acquis des pouvoirs divins et est devenu le gardien de la Gemme de l'Âme, l'une des six Pierres d'Infinité. Il a également pris le nom d'Adam Warlock, en référence à sa nature d'être supérieur.<br><br>
                                        Warlock a été impliqué dans plusieurs aventures cosmiques aux côtés de héros comme les <a href="/heros/avengers" style="color: orange;">Avengers</a> et les Gardiens de la Galaxie. Il a également combattu des ennemis puissants tels que Thanos, le titan fou, qui convoitait les Pierres d'Infinité.<br><br>
                                        L'un des moments marquants de l'histoire d'Adam Warlock est sa confrontation avec Magus, sa version maléfique issue d'un futur alternatif. Magus était un tyran et un conquérant, cherchant à utiliser le pouvoir des Pierres d'Infinité pour asservir l'univers. Warlock a dû faire face à son double maléfique dans une bataille épique entre le bien et le mal.<br><br>
                                        Warlock a également eu des interactions avec des entités cosmiques telles que le <a href="/heros/livingTribunal" style="color: orange;">Living Tribunal</a> et Eternity, et a été impliqué dans des conflits entre les forces de l'Ordre et du Chaos.<br><br>
                                        Au cours de son parcours, Warlock a été présenté comme un être complexe, oscillant entre la dualité du bien et du mal. Il a souvent été guidé par un sens profond de la destinée et de l'équilibre cosmique.<br><br>
                                        L'histoire d'Adam Warlock a connu de nombreuses réinterprétations et rebondissements au fil des décennies. Ses quêtes spirituelles, ses combats cosmiques et sa recherche de l'harmonie ont fait de lui un personnage fascinant et emblématique de l'univers Marvel.
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
