<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sommaire</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link href="{{ asset('css/style3.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

  <div class="bg-image">

<!-- En-tête avec titre et navigation -->
<header class="bg-dark text-white text-center py-4">
  <h1>Marvel's Heroes Origins</h1>
</header>

<!-- Barre de navigation responsive -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Accueil</a>
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
<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">A</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/abomination') }}">Abomination</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/absorbingMan') }}">Absorbing Man</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/adamWarlock') }}">Adam Warlock</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/aero') }}">Aero</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/agathaArkness') }}">Agatha Arkness</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/agent13') }}">Agent 13</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/agentCoulson') }}">Agent Coulson</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/americaChavez') }}">America Chavez</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/angel') }}">Angel</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/angela') }}">Angela</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/antMan') }}">Ant Man</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/apocalypse') }}">Apocalypse</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/armor') }}">Armor</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/arnimZola') }}">Arnim Zola</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/attuma') }}">Attuma</a>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">B</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/baronMordo') }}">Baron Mordo</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/bast') }}">Bast</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/beast') }}">Beast</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/bishop') }}">Bishop</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/blackBolt') }}">Black Bolt</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/blackCat') }}">Black Cat</a></th>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/blackPanther') }}">Black Panther</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/blackWidow') }}">Black Widow</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/blade') }}">Blade</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/blueMarvel') }}">Blue Marvel</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/brood') }}">Brood</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/buckyBarnes') }}">Bucky Barnes</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">C</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/cable') }}">Cable</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/captainAmerica') }}">Captain America</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/captainMarvel') }}">Captain Marvel</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/carnage') }}">Carnage</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/cerebro') }}">Cerebro</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/cloak') }}">Cloak</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/coleenWing') }}">Coleen Wing</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/collector') }}">Collector</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/colossus') }}">Colossus</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/cosmo') }}">Cosmo</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/crossbones') }}">Crossbones</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/crystal') }}">Crystal</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/cyclops') }}">Cyclops</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">D</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/dagger') }}">Dagger</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/daredevil') }}">Daredevil</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/darkhawk') }}">Darkhawk</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/dazzler') }}">Dazzler</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/deadpool') }}">Deadpool</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/death') }}">Death</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/deathlok') }}">Deathlok</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/debrii') }}">Debrii</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/destroyer') }}">Destroyer</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/devilDinosaur') }}">Devil Dinosaur</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/doctorDoom') }}">Doctor Doom</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/doctorOctopus') }}">Doctor Octopus</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/doctorStrange') }}">Doctor Strange</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/domino') }}">Domino</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/dracula') }}">Dracula</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/drax') }}">Drax</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">E</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/ebonyMaw') }}">Ebony Maw</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/electro') }}">Electro</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/elektra') }}">Elektra</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/enchantress') }}">Enchantress</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">F</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/falcon') }}">Falcon</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/forge') }}">Forge</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">G</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/galactus') }}">Galactus</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/gambit') }}">Gambit</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/gamora') }}">Gamora</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/ghost') }}">Ghost</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/ghostRider') }}">Ghost Rider</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/greenGoblin') }}">Green Goblin</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/groot') }}">Groot</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">H</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/hawkeye') }}">Hawkeye</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/hazmat') }}">Hazmat</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/heimdall') }}">Heimdall</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/hela') }}">Hela</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/helicarrier') }}">Helicarrier</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/highEvolutionary') }}">High Evolutionary</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/hitMonkey') }}">Hit Monkey</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/hobgoblin') }}">Hobgoblin</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/hood') }}">Hood</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/howardTheDuck') }}">Howard The Duck</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/hulk') }}">Hulk</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/hulkbuster') }}">Hulkbuster</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/humanTorch') }}">Human Torch</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">I</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/iceMan') }}">Ice Man</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/invisibleWoman') }}">Invisible Woman</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/ironFist') }}">Iron Fist</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/ironMan') }}">Iron Man</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/ironLad') }}">Iron Lad</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/ironheart') }}">Ironheart</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">J</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/jeff') }}">Jeff</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/jessicaJones') }}">Jessica Jones</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/jubilee') }}">Jubilee</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/juggernaut') }}">Jugernaut</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">K</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/kazar') }}">Ka-zar</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/kang') }}">Kang</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/killmonger') }}">Killmonger</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/kingpin') }}">Kingpin</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/KittyPride') }}">Kitty Pride</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/klaw') }}">Klaw</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/knull') }}">Knull</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/korg') }}">Korg</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/kraven') }}">Kraven</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">L</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/ladySif') }}">Lady Sif</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/leader') }}">Leader</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/leech') }}">Leech</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/livingTribunal') }}">Living Tribunal</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/lizard') }}">Lizard</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/lockjaw') }}">Lockjaw</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/lukeCage') }}">Luke Cage</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">M</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/mBaku') }}">M'Baku</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/modok') }}">M.O.D.O.k</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/magik') }}">Magik</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/magneto') }}">Magneto</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/mantis') }}">Mantis</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/mariaHill') }}">Maria Hill</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/masterMold') }}">Master Mold</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/maximus') }}">Maximus</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/medusa') }}">Médusa</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/mightyThor') }}">Mighty Thor</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/milesMorales') }}">Miles Morales</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/misterFantastic') }}">Mister Fantastic</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/misterSinister') }}">Mister Sinister</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/mistyNight') }}">Misty Night</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/mojo') }}">Mojo</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/moonGirl') }}">Moon Girl</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/moonKnight') }}">Moon Knight</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/morbius') }}">Morbius</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/morph') }}">Morph</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/multiplMan') }}">Multiple Man</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/mysterio') }}">Mysterio</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/mystique') }}">Mysterio</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/mystique') }}">Mystique</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">N</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/nakia') }}">Nakia</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/namor') }}">Namor</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/nebula') }}">Nebula</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/negasonic') }}">Negasonic</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/nickFury') }}">Nick Fury</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/nightCrawler') }}">Nightcrawler</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/nimrod') }}">Nimrod</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/nova') }}">Nova</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">O</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/odin') }}">Odin</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/okoye') }}">Okoye</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/omegaRed') }}">Omega Red</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/onslaught') }}">Onlaught</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">P</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/patriot') }}">Patriot</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/polaris') }}">Polaris</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/professorX') }}">Professor X</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/psylocke') }}">Psylocke</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/punisher') }}">Punisher</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">Q</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/quake.html') }}">Quake</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/quiksilver.html') }}">Quiksilver</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/quinjet.html') }}">Qunijet</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">R</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/redSkull') }}">Red Skull</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/rescue') }}">Rescue</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/rhino') }}">Rhino</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/rocketRaccoon') }}">Rocket Raccoon</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/rockSlide') }}">Rock Slide</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/rogue') }}">Rogue</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/ronan') }}">Ronan</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">S</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/sabretooth') }}">Sabretooh</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/sandman') }}">Sandman</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/sauron') }}">Sauron</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/scarletWitch') }}">Scarlet wtich</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/scorpion') }}">Scorpion</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/sentinel') }}">Sentinel</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/sentry') }}">Sentry</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/sera') }}">Sera</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/shadowKing') }}">Shadow King</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/shangChi') }}">Shang-Chi</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/shanna') }}">Shanna</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/sheHulk') }}">She-Hulk</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/shocker') }}">Shocker</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/shuri') }}">Shuri</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/silk') }}">Silk</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/silverSurfer') }}">Silver Surfer</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/snowguard') }}">Snowguard</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/spectrum') }}">Spectrum</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/spiderMan') }}">Spider-Man</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/spiderWoman') }}">Spider-Woman</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/squirrelGirl') }}">Squirrel Girl</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/starLord') }}">Star-Lord</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/stature') }}">Stature</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/stegron') }}">Stregron</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/storm') }}">Storm</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/strongGuy') }}">Strong Guy</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/sunspot') }}">Sunspot</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/superSkrull') }}">Super-Skrull</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/swarm') }}">Swarm</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/swordMaster') }}">Sword Master</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">T</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/thanos') }}">Thanos</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/thing') }}">Thing</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/thor') }}">Thor</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/titania') }}">Titania</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/typhoidMary') }}">Typhoid Mary</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">U</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/uatu') }}">Uatu</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/ultron') }}">Ultron</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">V</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/valkyrie') }}">Valkyrie</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/venom') }}">Venom</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/viper') }}">Viper</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/vision') }}">Vision</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/vulture') }}">Vulture</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">W</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/warpath') }}">Warpath</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/wasp') }}">Wasp</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/wave') }}">Wave</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/whiteQueen') }}">White Queen</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/WhiteTiger') }}">White Tiger</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/wolfbane') }}">Wolfbane</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/wolwerine') }}">Wolwerine</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/wong') }}">Wong</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">X</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('https://m.media-amazon.com/images/I/613KXU8O5pL._AC_UF894,1000_QL80_.jpg') }}">Je s'appelle groot</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">Y</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/yellowjacket') }}">Yellowjacket</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/yondu') }}">Yondu</a></li>
  </ul>
</div>

<div class="btn-group dropright">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">Z</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/zabu') }}">Zabu</a></li>
    <li><a class="dropdown-item" style="color: black" href="{{ url('/heros/zero') }}">Zero</a></li>
  </ul>
</div>
          <!-- <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/b') }}">B</a></li>  
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/c') }}">C</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/d') }}">D</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/e') }}">E</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/f') }}">F</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/g') }}">G</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/h') }}">H</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/i') }}">I</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/j') }}">J</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/k') }}">K</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/l') }}">L</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/m') }}">M</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/n') }}">N</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/o') }}">O</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/p') }}">P</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/q') }}">Q</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/r') }}">R</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/s') }}">S</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/t') }}">T</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/u') }}">U</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/v') }}">V</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/w') }}">W</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/x') }}">X</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/y') }}">Y</a></li>
          <li><a style="color: black" href="{{ url('/onglet/sommaireHeros/z') }}">Z</a></li> -->
      
      </div>
     </div>
   </div>

        <!-- Lien vers Bootstrap JS et Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
