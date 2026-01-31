<!DOCTYPE html>
<html lang="fr">
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

<header class="text-white text-center py-4">
  <h1><i class="bi bi-lightning-charge-fill"></i> Marvel's Heroes Origins</h1>
</header>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/') }}"><i class="bi bi-house-fill"></i> Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/sommaire') }}"><i class="bi bi-list-ul"></i> Sommaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/onglet/quizzMarvel') }}"><i class="bi bi-patch-question-fill"></i> Quizz</a>
        </li>
          @if (Auth::check())
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/onglet/monCompte') }}"><i class="bi bi-person-circle"></i> Mon compte</a>
                </li>
          @endif

          @if (!Auth::check())
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/onglet/seConnecter') }}"><i class="bi bi-box-arrow-in-right"></i> Se connecter</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/onglet/creerCompte') }}"><i class="bi bi-person-plus-fill"></i> Créer un compte</a>
                </li>
          @endif
          
          @if (Auth::check())
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-right"></i> Se déconnecter</a>
                </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
          @endif
        <li class="nav-item">
          <a href="https://www.instagram.com/math.is93000?igshid=ZDc4ODBmNjlmNQ==" target="_blank" class="nav-link">
            <i class="bi bi-instagram"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-5">
  <div class="sommaire-container">
    <div class="sommaire-header">
      <h2><i class="bi bi-book-fill"></i> Sommaire des Héros Marvel</h2>
      <p>Parcourez l'encyclopédie par ordre alphabétique</p>
    </div>

    <div class="alphabet-grid">
      
      <!-- Lettre A -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA">
          <span class="letter-icon">A</span>
          <span class="letter-count">15</span>
        </button>
        <div class="collapse" id="collapseA">
          <div class="hero-list">
            <a href="{{ url('/heros/abomination') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Abomination</a>
            <a href="{{ url('/heros/absorbingMan')}}" class="hero-link"><i class="bi bi-chevron-right"></i> Absorbing Man</a>
            <a href="heros/adamWarlock" class="hero-link"><i class="bi bi-chevron-right"></i> Adam Warlock</a>
            <a href="heros/aero" class="hero-link"><i class="bi bi-chevron-right"></i> Aero</a>
            <a href="heros/agathaArkness" class="hero-link"><i class="bi bi-chevron-right"></i> Agatha Arkness</a>
            <a href="heros/agent13" class="hero-link"><i class="bi bi-chevron-right"></i> Agent 13</a>
            <a href="heros/agentCoulson" class="hero-link"><i class="bi bi-chevron-right"></i> Agent Coulson</a>
            <a href="heros/americaChavez" class="hero-link"><i class="bi bi-chevron-right"></i> America Chavez</a>
            <a href="heros/angel" class="hero-link"><i class="bi bi-chevron-right"></i> Angel</a>
            <a href="heros/angela" class="hero-link"><i class="bi bi-chevron-right"></i> Angela</a>
            <a href="heros/antMan" class="hero-link"><i class="bi bi-chevron-right"></i> Ant Man</a>
            <a href="heros/apocalypse" class="hero-link"><i class="bi bi-chevron-right"></i> Apocalypse</a>
            <a href="heros/armor" class="hero-link"><i class="bi bi-chevron-right"></i> Armor</a>
            <a href="heros/arnimZola" class="hero-link"><i class="bi bi-chevron-right"></i> Arnim Zola</a>
            <a href="heros/attuma" class="hero-link"><i class="bi bi-chevron-right"></i> Attuma</a>
          </div>
        </div>
      </div>

      <!-- Lettre B -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB">
          <span class="letter-icon">B</span>
          <span class="letter-count">12</span>
        </button>
        <div class="collapse" id="collapseB">
          <div class="hero-list">
            <a href="heros/baronMordo" class="hero-link"><i class="bi bi-chevron-right"></i> Baron Mordo</a>
            <a href="heros/bast" class="hero-link"><i class="bi bi-chevron-right"></i> Bast</a>
            <a href="heros/beast" class="hero-link"><i class="bi bi-chevron-right"></i> Beast</a>
            <a href="heros/bishop" class="hero-link"><i class="bi bi-chevron-right"></i> Bishop</a>
            <a href="heros/blackBolt" class="hero-link"><i class="bi bi-chevron-right"></i> Black Bolt</a>
            <a href="heros/blackCat" class="hero-link"><i class="bi bi-chevron-right"></i> Black Cat</a>
            <a href="heros/blackPanther" class="hero-link"><i class="bi bi-chevron-right"></i> Black Panther</a>
            <a href="heros/blackWidow" class="hero-link"><i class="bi bi-chevron-right"></i> Black Widow</a>
            <a href="heros/blade" class="hero-link"><i class="bi bi-chevron-right"></i> Blade</a>
            <a href="heros/blueMarvel" class="hero-link"><i class="bi bi-chevron-right"></i> Blue Marvel</a>
            <a href="heros/brood" class="hero-link"><i class="bi bi-chevron-right"></i> Brood</a>
            <a href="heros/buckyBarnes" class="hero-link"><i class="bi bi-chevron-right"></i> Bucky Barnes</a>
          </div>
        </div>
      </div>

      <!-- Lettre C -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC">
          <span class="letter-icon">C</span>
          <span class="letter-count">13</span>
        </button>
        <div class="collapse" id="collapseC">
          <div class="hero-list">
            <a href="heros/cable" class="hero-link"><i class="bi bi-chevron-right"></i> Cable</a>
            <a href="heros/captainAmerica" class="hero-link"><i class="bi bi-chevron-right"></i> Captain America</a>
            <a href="heros/captainMarvel" class="hero-link"><i class="bi bi-chevron-right"></i> Captain Marvel</a>
            <a href="heros/carnage" class="hero-link"><i class="bi bi-chevron-right"></i> Carnage</a>
            <a href="heros/cerebro" class="hero-link"><i class="bi bi-chevron-right"></i> Cerebro</a>
            <a href="heros/cloak" class="hero-link"><i class="bi bi-chevron-right"></i> Cloak</a>
            <a href="heros/coleenWing" class="hero-link"><i class="bi bi-chevron-right"></i> Coleen Wing</a>
            <a href="heros/collector" class="hero-link"><i class="bi bi-chevron-right"></i> Collector</a>
            <a href="heros/colossus" class="hero-link"><i class="bi bi-chevron-right"></i> Colossus</a>
            <a href="heros/cosmo" class="hero-link"><i class="bi bi-chevron-right"></i> Cosmo</a>
            <a href="heros/crossbones" class="hero-link"><i class="bi bi-chevron-right"></i> Crossbones</a>
            <a href="heros/crystal" class="hero-link"><i class="bi bi-chevron-right"></i> Crystal</a>
            <a href="heros/cyclops" class="hero-link"><i class="bi bi-chevron-right"></i> Cyclops</a>
          </div>
        </div>
      </div>

      <!-- Lettre D -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseD">
          <span class="letter-icon">D</span>
          <span class="letter-count">16</span>
        </button>
        <div class="collapse" id="collapseD">
          <div class="hero-list">
            <a href="heros/dagger" class="hero-link"><i class="bi bi-chevron-right"></i> Dagger</a>
            <a href="heros/daredevil" class="hero-link"><i class="bi bi-chevron-right"></i> Daredevil</a>
            <a href="heros/darkhawk" class="hero-link"><i class="bi bi-chevron-right"></i> Darkhawk</a>
            <a href="heros/dazzler" class="hero-link"><i class="bi bi-chevron-right"></i> Dazzler</a>
            <a href="heros/deadpool" class="hero-link"><i class="bi bi-chevron-right"></i> Deadpool</a>
            <a href="heros/death" class="hero-link"><i class="bi bi-chevron-right"></i> Death</a>
            <a href="heros/deathlok" class="hero-link"><i class="bi bi-chevron-right"></i> Deathlok</a>
            <a href="heros/debrii" class="hero-link"><i class="bi bi-chevron-right"></i> Debrii</a>
            <a href="heros/destroyer" class="hero-link"><i class="bi bi-chevron-right"></i> Destroyer</a>
            <a href="heros/devilDinosaur" class="hero-link"><i class="bi bi-chevron-right"></i> Devil Dinosaur</a>
            <a href="heros/doctorDoom" class="hero-link"><i class="bi bi-chevron-right"></i> Doctor Doom</a>
            <a href="heros/doctorOctopus" class="hero-link"><i class="bi bi-chevron-right"></i> Doctor Octopus</a>
            <a href="heros/doctorStrange" class="hero-link"><i class="bi bi-chevron-right"></i> Doctor Strange</a>
            <a href="heros/domino" class="hero-link"><i class="bi bi-chevron-right"></i> Domino</a>
            <a href="heros/dracula" class="hero-link"><i class="bi bi-chevron-right"></i> Dracula</a>
            <a href="heros/drax" class="hero-link"><i class="bi bi-chevron-right"></i> Drax</a>
          </div>
        </div>
      </div>

      <!-- Lettre E -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseE">
          <span class="letter-icon">E</span>
          <span class="letter-count">4</span>
        </button>
        <div class="collapse" id="collapseE">
          <div class="hero-list">
            <a href="heros/ebonyMaw" class="hero-link"><i class="bi bi-chevron-right"></i> Ebony Maw</a>
            <a href="heros/electro" class="hero-link"><i class="bi bi-chevron-right"></i> Electro</a>
            <a href="heros/elektra" class="hero-link"><i class="bi bi-chevron-right"></i> Elektra</a>
            <a href="heros/enchantress" class="hero-link"><i class="bi bi-chevron-right"></i> Enchantress</a>
          </div>
        </div>
      </div>

      <!-- Lettre F -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseF">
          <span class="letter-icon">F</span>
          <span class="letter-count">2</span>
        </button>
        <div class="collapse" id="collapseF">
          <div class="hero-list">
            <a href="heros/falcon" class="hero-link"><i class="bi bi-chevron-right"></i> Falcon</a>
            <a href="heros/forge" class="hero-link"><i class="bi bi-chevron-right"></i> Forge</a>
          </div>
        </div>
      </div>

      <!-- Lettre G -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseG">
          <span class="letter-icon">G</span>
          <span class="letter-count">7</span>
        </button>
        <div class="collapse" id="collapseG">
          <div class="hero-list">
            <a href="heros/galactus" class="hero-link"><i class="bi bi-chevron-right"></i> Galactus</a>
            <a href="heros/gambit" class="hero-link"><i class="bi bi-chevron-right"></i> Gambit</a>
            <a href="heros/gamora" class="hero-link"><i class="bi bi-chevron-right"></i> Gamora</a>
            <a href="heros/ghost" class="hero-link"><i class="bi bi-chevron-right"></i> Ghost</a>
            <a href="heros/ghostRider" class="hero-link"><i class="bi bi-chevron-right"></i> Ghost Rider</a>
            <a href="heros/greenGoblin" class="hero-link"><i class="bi bi-chevron-right"></i> Green Goblin</a>
            <a href="heros/groot" class="hero-link"><i class="bi bi-chevron-right"></i> Groot</a>
          </div>
        </div>
      </div>

      <!-- Lettre H -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseH">
          <span class="letter-icon">H</span>
          <span class="letter-count">13</span>
        </button>
        <div class="collapse" id="collapseH">
          <div class="hero-list">
            <a href="heros/hawkeye" class="hero-link"><i class="bi bi-chevron-right"></i> Hawkeye</a>
            <a href="heros/hazmat" class="hero-link"><i class="bi bi-chevron-right"></i> Hazmat</a>
            <a href="heros/heimdall" class="hero-link"><i class="bi bi-chevron-right"></i> Heimdall</a>
            <a href="heros/hela" class="hero-link"><i class="bi bi-chevron-right"></i> Hela</a>
            <a href="heros/helicarrier" class="hero-link"><i class="bi bi-chevron-right"></i> Helicarrier</a>
            <a href="heros/highEvolutionary" class="hero-link"><i class="bi bi-chevron-right"></i> High Evolutionary</a>
            <a href="heros/hitMonkey" class="hero-link"><i class="bi bi-chevron-right"></i> Hit Monkey</a>
            <a href="heros/hobgoblin" class="hero-link"><i class="bi bi-chevron-right"></i> Hobgoblin</a>
            <a href="heros/hood" class="hero-link"><i class="bi bi-chevron-right"></i> Hood</a>
            <a href="heros/howardTheDuck" class="hero-link"><i class="bi bi-chevron-right"></i> Howard The Duck</a>
            <a href="heros/hulk" class="hero-link"><i class="bi bi-chevron-right"></i> Hulk</a>
            <a href="heros/hulkbuster" class="hero-link"><i class="bi bi-chevron-right"></i> Hulkbuster</a>
            <a href="heros/humanTorch" class="hero-link"><i class="bi bi-chevron-right"></i> Human Torch</a>
          </div>
        </div>
      </div>

      <!-- Lettre I -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseI">
          <span class="letter-icon">I</span>
          <span class="letter-count">6</span>
        </button>
        <div class="collapse" id="collapseI">
          <div class="hero-list">
            <a href="heros/iceMan" class="hero-link"><i class="bi bi-chevron-right"></i> Ice Man</a>
            <a href="heros/invisibleWoman" class="hero-link"><i class="bi bi-chevron-right"></i> Invisible Woman</a>
            <a href="heros/ironFist" class="hero-link"><i class="bi bi-chevron-right"></i> Iron Fist</a>
            <a href="heros/ironMan" class="hero-link"><i class="bi bi-chevron-right"></i> Iron Man</a>
            <a href="heros/ironLad" class="hero-link"><i class="bi bi-chevron-right"></i> Iron Lad</a>
            <a href="heros/ironheart" class="hero-link"><i class="bi bi-chevron-right"></i> Ironheart</a>
          </div>
        </div>
      </div>

      <!-- Lettre J -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJ">
          <span class="letter-icon">J</span>
          <span class="letter-count">4</span>
        </button>
        <div class="collapse" id="collapseJ">
          <div class="hero-list">
            <a href="heros/jeff" class="hero-link"><i class="bi bi-chevron-right"></i> Jeff</a>
            <a href="heros/jessicaJones" class="hero-link"><i class="bi bi-chevron-right"></i> Jessica Jones</a>
            <a href="heros/jubilee" class="hero-link"><i class="bi bi-chevron-right"></i> Jubilee</a>
            <a href="heros/juggernaut" class="hero-link"><i class="bi bi-chevron-right"></i> Juggernaut</a>
          </div>
        </div>
      </div>

      <!-- Lettre K -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseK">
          <span class="letter-icon">K</span>
          <span class="letter-count">9</span>
        </button>
        <div class="collapse" id="collapseK">
          <div class="hero-list">
            <a href="heros/kazar" class="hero-link"><i class="bi bi-chevron-right"></i> Ka-zar</a>
            <a href="heros/kang" class="hero-link"><i class="bi bi-chevron-right"></i> Kang</a>
            <a href="heros/killmonger" class="hero-link"><i class="bi bi-chevron-right"></i> Killmonger</a>
            <a href="heros/kingpin" class="hero-link"><i class="bi bi-chevron-right"></i> Kingpin</a>
            <a href="heros/KittyPride" class="hero-link"><i class="bi bi-chevron-right"></i> Kitty Pride</a>
            <a href="heros/klaw" class="hero-link"><i class="bi bi-chevron-right"></i> Klaw</a>
            <a href="heros/knull" class="hero-link"><i class="bi bi-chevron-right"></i> Knull</a>
            <a href="heros/korg" class="hero-link"><i class="bi bi-chevron-right"></i> Korg</a>
            <a href="heros/kraven" class="hero-link"><i class="bi bi-chevron-right"></i> Kraven</a>
          </div>
        </div>
      </div>

      <!-- Lettre L -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL">
          <span class="letter-icon">L</span>
          <span class="letter-count">7</span>
        </button>
        <div class="collapse" id="collapseL">
          <div class="hero-list">
            <a href="heros/ladySif" class="hero-link"><i class="bi bi-chevron-right"></i> Lady Sif</a>
            <a href="heros/leader" class="hero-link"><i class="bi bi-chevron-right"></i> Leader</a>
            <a href="heros/leech" class="hero-link"><i class="bi bi-chevron-right"></i> Leech</a>
            <a href="heros/livingTribunal" class="hero-link"><i class="bi bi-chevron-right"></i> Living Tribunal</a>
            <a href="heros/lizard" class="hero-link"><i class="bi bi-chevron-right"></i> Lizard</a>
            <a href="heros/lockjaw" class="hero-link"><i class="bi bi-chevron-right"></i> Lockjaw</a>
            <a href="heros/lukeCage" class="hero-link"><i class="bi bi-chevron-right"></i> Luke Cage</a>
          </div>
        </div>
      </div>

      <!-- Lettre M -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseM">
          <span class="letter-icon">M</span>
          <span class="letter-count">23</span>
        </button>
        <div class="collapse" id="collapseM">
          <div class="hero-list">
            <a href="heros/mBaku" class="hero-link"><i class="bi bi-chevron-right"></i> M'Baku</a>
            <a href="heros/modok" class="hero-link"><i class="bi bi-chevron-right"></i> M.O.D.O.K</a>
            <a href="heros/magik" class="hero-link"><i class="bi bi-chevron-right"></i> Magik</a>
            <a href="heros/magneto" class="hero-link"><i class="bi bi-chevron-right"></i> Magneto</a>
            <a href="heros/mantis" class="hero-link"><i class="bi bi-chevron-right"></i> Mantis</a>
            <a href="heros/mariaHill" class="hero-link"><i class="bi bi-chevron-right"></i> Maria Hill</a>
            <a href="heros/masterMold" class="hero-link"><i class="bi bi-chevron-right"></i> Master Mold</a>
            <a href="heros/maximus" class="hero-link"><i class="bi bi-chevron-right"></i> Maximus</a>
            <a href="heros/medusa" class="hero-link"><i class="bi bi-chevron-right"></i> Medusa</a>
            <a href="heros/mightyThor" class="hero-link"><i class="bi bi-chevron-right"></i> Mighty Thor</a>
            <a href="heros/milesMorales" class="hero-link"><i class="bi bi-chevron-right"></i> Miles Morales</a>
            <a href="heros/misterFantastic" class="hero-link"><i class="bi bi-chevron-right"></i> Mister Fantastic</a>
            <a href="heros/misterSinister" class="hero-link"><i class="bi bi-chevron-right"></i> Mister Sinister</a>
            <a href="heros/mistyNight" class="hero-link"><i class="bi bi-chevron-right"></i> Misty Night</a>
            <a href="heros/mojo" class="hero-link"><i class="bi bi-chevron-right"></i> Mojo</a>
            <a href="heros/moonGirl" class="hero-link"><i class="bi bi-chevron-right"></i> Moon Girl</a>
            <a href="heros/moonKnight" class="hero-link"><i class="bi bi-chevron-right"></i> Moon Knight</a>
            <a href="heros/morbius" class="hero-link"><i class="bi bi-chevron-right"></i> Morbius</a>
            <a href="heros/morph" class="hero-link"><i class="bi bi-chevron-right"></i> Morph</a>
            <a href="heros/multiplMan" class="hero-link"><i class="bi bi-chevron-right"></i> Multiple Man</a>
            <a href="heros/mysterio" class="hero-link"><i class="bi bi-chevron-right"></i> Mysterio</a>
            <a href="heros/mystique" class="hero-link"><i class="bi bi-chevron-right"></i> Mystique</a>
          </div>
        </div>
      </div>

      <!-- Lettre N -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseN">
          <span class="letter-icon">N</span>
          <span class="letter-count">8</span>
        </button>
        <div class="collapse" id="collapseN">
          <div class="hero-list">
            <a href="heros/nakia" class="hero-link"><i class="bi bi-chevron-right"></i> Nakia</a>
            <a href="heros/namor" class="hero-link"><i class="bi bi-chevron-right"></i> Namor</a>
            <a href="heros/nebula" class="hero-link"><i class="bi bi-chevron-right"></i> Nebula</a>
            <a href="heros/negasonic" class="hero-link"><i class="bi bi-chevron-right"></i> Negasonic</a>
            <a href="heros/nickFury" class="hero-link"><i class="bi bi-chevron-right"></i> Nick Fury</a>
            <a href="heros/nightCrawler" class="hero-link"><i class="bi bi-chevron-right"></i> Nightcrawler</a>
            <a href="heros/nimrod" class="hero-link"><i class="bi bi-chevron-right"></i> Nimrod</a>
            <a href="heros/nova" class="hero-link"><i class="bi bi-chevron-right"></i> Nova</a>
          </div>
        </div>
      </div>

      <!-- Lettre O -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseO">
          <span class="letter-icon">O</span>
          <span class="letter-count">4</span>
        </button>
        <div class="collapse" id="collapseO">
          <div class="hero-list">
            <a href="heros/odin" class="hero-link"><i class="bi bi-chevron-right"></i> Odin</a>
            <a href="heros/okoye" class="hero-link"><i class="bi bi-chevron-right"></i> Okoye</a>
            <a href="heros/omegaRed" class="hero-link"><i class="bi bi-chevron-right"></i> Omega Red</a>
            <a href="heros/onslaught" class="hero-link"><i class="bi bi-chevron-right"></i> Onslaught</a>
          </div>
        </div>
      </div>

      <!-- Lettre P -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseP">
          <span class="letter-icon">P</span>
          <span class="letter-count">5</span>
        </button>
        <div class="collapse" id="collapseP">
          <div class="hero-list">
            <a href="heros/patriot" class="hero-link"><i class="bi bi-chevron-right"></i> Patriot</a>
            <a href="heros/polaris" class="hero-link"><i class="bi bi-chevron-right"></i> Polaris</a>
            <a href="heros/professorX" class="hero-link"><i class="bi bi-chevron-right"></i> Professor X</a>
            <a href="heros/psylocke" class="hero-link"><i class="bi bi-chevron-right"></i> Psylocke</a>
            <a href="heros/punisher" class="hero-link"><i class="bi bi-chevron-right"></i> Punisher</a>
          </div>
        </div>
      </div>

      <!-- Lettre Q -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ">
          <span class="letter-icon">Q</span>
          <span class="letter-count">3</span>
        </button>
        <div class="collapse" id="collapseQ">
          <div class="hero-list">
            <a href="heros/quake.html" class="hero-link"><i class="bi bi-chevron-right"></i> Quake</a>
            <a href="heros/quiksilver.html" class="hero-link"><i class="bi bi-chevron-right"></i> Quiksilver</a>
            <a href="heros/quinjet.html" class="hero-link"><i class="bi bi-chevron-right"></i> Quinjet</a>
          </div>
        </div>
      </div>

      <!-- Lettre R -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseR">
          <span class="letter-icon">R</span>
          <span class="letter-count">7</span>
        </button>
        <div class="collapse" id="collapseR">
          <div class="hero-list">
            <a href="heros/redSkull" class="hero-link"><i class="bi bi-chevron-right"></i> Red Skull</a>
            <a href="heros/rescue" class="hero-link"><i class="bi bi-chevron-right"></i> Rescue</a>
            <a href="heros/rhino" class="hero-link"><i class="bi bi-chevron-right"></i> Rhino</a>
            <a href="heros/rocketRaccoon" class="hero-link"><i class="bi bi-chevron-right"></i> Rocket Raccoon</a>
            <a href="heros/rockSlide" class="hero-link"><i class="bi bi-chevron-right"></i> Rock Slide</a>
            <a href="heros/rogue" class="hero-link"><i class="bi bi-chevron-right"></i> Rogue</a>
            <a href="heros/ronan" class="hero-link"><i class="bi bi-chevron-right"></i> Ronan</a>
          </div>
        </div>
      </div>

      <!-- Lettre S -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseS">
          <span class="letter-icon">S</span>
          <span class="letter-count">31</span>
        </button>
        <div class="collapse" id="collapseS">
          <div class="hero-list">
            <a href="heros/sabretooth" class="hero-link"><i class="bi bi-chevron-right"></i> Sabretooth</a>
            <a href="heros/sandman" class="hero-link"><i class="bi bi-chevron-right"></i> Sandman</a>
            <a href="heros/sauron" class="hero-link"><i class="bi bi-chevron-right"></i> Sauron</a>
            <a href="heros/scarletWitch" class="hero-link"><i class="bi bi-chevron-right"></i> Scarlet Witch</a>
            <a href="heros/scorpion" class="hero-link"><i class="bi bi-chevron-right"></i> Scorpion</a>
            <a href="heros/sentinel" class="hero-link"><i class="bi bi-chevron-right"></i> Sentinel</a>
            <a href="heros/sentry" class="hero-link"><i class="bi bi-chevron-right"></i> Sentry</a>
            <a href="heros/sera" class="hero-link"><i class="bi bi-chevron-right"></i> Sera</a>
            <a href="heros/shadowKing" class="hero-link"><i class="bi bi-chevron-right"></i> Shadow King</a>
            <a href="heros/shangChi" class="hero-link"><i class="bi bi-chevron-right"></i> Shang-Chi</a>
            <a href="heros/shanna" class="hero-link"><i class="bi bi-chevron-right"></i> Shanna</a>
            <a href="heros/sheHulk" class="hero-link"><i class="bi bi-chevron-right"></i> She-Hulk</a>
            <a href="heros/shocker" class="hero-link"><i class="bi bi-chevron-right"></i> Shocker</a>
            <a href="heros/shuri" class="hero-link"><i class="bi bi-chevron-right"></i> Shuri</a>
            <a href="heros/silk" class="hero-link"><i class="bi bi-chevron-right"></i> Silk</a>
            <a href="heros/silverSurfer" class="hero-link"><i class="bi bi-chevron-right"></i> Silver Surfer</a>
            <a href="heros/snowguard" class="hero-link"><i class="bi bi-chevron-right"></i> Snowguard</a>
            <a href="heros/spectrum" class="hero-link"><i class="bi bi-chevron-right"></i> Spectrum</a>
            <a href="heros/spiderMan" class="hero-link"><i class="bi bi-chevron-right"></i> Spider-Man</a>
            <a href="heros/spiderWoman" class="hero-link"><i class="bi bi-chevron-right"></i> Spider-Woman</a>
            <a href="heros/squirrelGirl" class="hero-link"><i class="bi bi-chevron-right"></i> Squirrel Girl</a>
            <a href="heros/starLord" class="hero-link"><i class="bi bi-chevron-right"></i> Star-Lord</a>
            <a href="heros/stature" class="hero-link"><i class="bi bi-chevron-right"></i> Stature</a>
            <a href="heros/stegron" class="hero-link"><i class="bi bi-chevron-right"></i> Stegron</a>
            <a href="heros/storm" class="hero-link"><i class="bi bi-chevron-right"></i> Storm</a>
            <a href="heros/strongGuy" class="hero-link"><i class="bi bi-chevron-right"></i> Strong Guy</a>
            <a href="heros/sunspot" class="hero-link"><i class="bi bi-chevron-right"></i> Sunspot</a>
            <a href="heros/superSkrull" class="hero-link"><i class="bi bi-chevron-right"></i> Super-Skrull</a>
            <a href="heros/swarm" class="hero-link"><i class="bi bi-chevron-right"></i> Swarm</a>
            <a href="heros/swordMaster" class="hero-link"><i class="bi bi-chevron-right"></i> Sword Master</a>
          </div>
        </div>
      </div>

      <!-- Lettre T -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseT">
          <span class="letter-icon">T</span>
          <span class="letter-count">5</span>
        </button>
        <div class="collapse" id="collapseT">
          <div class="hero-list">
            <a href="heros/thanos" class="hero-link"><i class="bi bi-chevron-right"></i> Thanos</a>
            <a href="heros/thing" class="hero-link"><i class="bi bi-chevron-right"></i> Thing</a>
            <a href="heros/thor" class="hero-link"><i class="bi bi-chevron-right"></i> Thor</a>
            <a href="heros/titania" class="hero-link"><i class="bi bi-chevron-right"></i> Titania</a>
            <a href="heros/typhoidMary" class="hero-link"><i class="bi bi-chevron-right"></i> Typhoid Mary</a>
          </div>
        </div>
      </div>

      <!-- Lettre U -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseU">
          <span class="letter-icon">U</span>
          <span class="letter-count">2</span>
        </button>
        <div class="collapse" id="collapseU">
          <div class="hero-list">
            <a href="heros/uatu" class="hero-link"><i class="bi bi-chevron-right"></i> Uatu</a>
            <a href="heros/ultron" class="hero-link"><i class="bi bi-chevron-right"></i> Ultron</a>
          </div>
        </div>
      </div>

      <!-- Lettre V -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseV">
          <span class="letter-icon">V</span>
          <span class="letter-count">5</span>
        </button>
        <div class="collapse" id="collapseV">
          <div class="hero-list">
            <a href="heros/valkyrie" class="hero-link"><i class="bi bi-chevron-right"></i> Valkyrie</a>
            <a href="heros/venom" class="hero-link"><i class="bi bi-chevron-right"></i> Venom</a>
            <a href="heros/viper" class="hero-link"><i class="bi bi-chevron-right"></i> Viper</a>
            <a href="heros/vision" class="hero-link"><i class="bi bi-chevron-right"></i> Vision</a>
            <a href="heros/vulture" class="hero-link"><i class="bi bi-chevron-right"></i> Vulture</a>
          </div>
        </div>
      </div>

      <!-- Lettre W -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseW">
          <span class="letter-icon">W</span>
          <span class="letter-count">8</span>
        </button>
        <div class="collapse" id="collapseW">
          <div class="hero-list">
            <a href="heros/warpath" class="hero-link"><i class="bi bi-chevron-right"></i> Warpath</a>
            <a href="heros/wasp" class="hero-link"><i class="bi bi-chevron-right"></i> Wasp</a>
            <a href="heros/wave" class="hero-link"><i class="bi bi-chevron-right"></i> Wave</a>
            <a href="heros/whiteQueen" class="hero-link"><i class="bi bi-chevron-right"></i> White Queen</a>
            <a href="heros/WhiteTiger" class="hero-link"><i class="bi bi-chevron-right"></i> White Tiger</a>
            <a href="heros/wolfbane" class="hero-link"><i class="bi bi-chevron-right"></i> Wolfbane</a>
            <a href="heros/wolwerine" class="hero-link"><i class="bi bi-chevron-right"></i> Wolverine</a>
            <a href="heros/wong" class="hero-link"><i class="bi bi-chevron-right"></i> Wong</a>
          </div>
        </div>
      </div>

      <!-- Lettre X -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseX">
          <span class="letter-icon">X</span>
          <span class="letter-count">1</span>
        </button>
        <div class="collapse" id="collapseX">
          <div class="hero-list">
            <a href="https://m.media-amazon.com/images/I/613KXU8O5pL._AC_UF894,1000_QL80_.jpg" target="_blank" class="hero-link"><i class="bi bi-chevron-right"></i> Je s'appelle Groot</a>
          </div>
        </div>
      </div>

      <!-- Lettre Y -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseY">
          <span class="letter-icon">Y</span>
          <span class="letter-count">2</span>
        </button>
        <div class="collapse" id="collapseY">
          <div class="hero-list">
            <a href="heros/yellowjacket" class="hero-link"><i class="bi bi-chevron-right"></i> Yellowjacket</a>
            <a href="heros/yondu" class="hero-link"><i class="bi bi-chevron-right"></i> Yondu</a>
          </div>
        </div>
      </div>

      <!-- Lettre Z -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZ">
          <span class="letter-icon">Z</span>
          <span class="letter-count">2</span>
        </button>
        <div class="collapse" id="collapseZ">
          <div class="hero-list">
            <a href="heros/zabu" class="hero-link"><i class="bi bi-chevron-right"></i> Zabu</a>
            <a href="heros/zero" class="hero-link"><i class="bi bi-chevron-right"></i> Zero</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Logout button
document.getElementById('logoutBtn').addEventListener('click', function(e) {
  e.preventDefault();
  alert('Déconnexion réussie !');
});


document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.btn-letter');
    
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-bs-target');
            const targetCollapse = document.querySelector(targetId);
            
            // Fermer tous les autres collapses ouverts
            document.querySelectorAll('.collapse.show').forEach(collapse => {
                if (collapse !== targetCollapse) {
                    bootstrap.Collapse.getInstance(collapse)?.hide();
                }
            });
        });
    });
});
</script>
</body>
</html>