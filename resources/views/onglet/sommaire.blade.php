@extends('layouts.app')

@section('no-searchbar') {{-- cette section vide empêche l'affichage de la barre de recherche --}}
@endsection

@section('background-class', 'bg-image')

@section('content')
<div class="container py-5">
  <div class="sommaire-container">
    <div class="sommaire-header text-center mb-4">
      <h2><i class="bi bi-book-fill"></i> Sommaire des Héros Marvel</h2>
      <p>Parcourez l'encyclopédie par ordre alphabétique</p>
    </div>

    <div class="alphabet-grid">

      {{-- Lettre A --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA">
          <span class="letter-icon">A</span>
          <span class="letter-count">15</span>
        </button>
        <div class="collapse" id="collapseA">
          <div class="hero-list">
            <a href="{{ url('/heros/abomination') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Abomination</a>
            <a href="{{ url('/heros/absorbingMan') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Absorbing Man</a>
            <a href="{{ url('/heros/adamWarlock') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Adam Warlock</a>
            <a href="{{ url('/heros/aero') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Aero</a>
            <a href="{{ url('/heros/agathaHarkness') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Agatha Harkness</a>
            <a href="{{ url('/heros/agent13') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Agent 13</a>
            <a href="{{ url('/heros/agentCoulson') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Agent Coulson</a>
            <a href="{{ url('/heros/americaChavez') }}" class="hero-link"><i class="bi bi-chevron-right"></i> America Chavez</a>
            <a href="{{ url('/heros/angel') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Angel</a>
            <a href="{{ url('/heros/angela') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Angela</a>
            <a href="{{ url('/heros/antMan') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ant Man</a>
            <a href="{{ url('/heros/apocalypse') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Apocalypse</a>
            <a href="{{ url('/heros/armor') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Armor</a>
            <a href="{{ url('/heros/arnimZola') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Arnim Zola</a>
            <a href="{{ url('/heros/attuma') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Attuma</a>
          </div>
        </div>
      </div>

      {{-- Lettre B --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB">
          <span class="letter-icon">B</span>
          <span class="letter-count">12</span>
        </button>
        <div class="collapse" id="collapseB">
          <div class="hero-list">
            <a href="{{ url('/heros/baronMordo') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Baron Mordo</a>
            <a href="{{ url('/heros/bast') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Bast</a>
            <a href="{{ url('/heros/beast') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Beast</a>
            <a href="{{ url('/heros/bishop') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Bishop</a>
            <a href="{{ url('/heros/blackBolt') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Black Bolt</a>
            <a href="{{ url('/heros/blackCat') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Black Cat</a>
            <a href="{{ url('/heros/blackPanther') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Black Panther</a>
            <a href="{{ url('/heros/blackWidow') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Black Widow</a>
            <a href="{{ url('/heros/blade') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Blade</a>
            <a href="{{ url('/heros/blueMarvel') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Blue Marvel</a>
            <a href="{{ url('/heros/brood') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Brood</a>
            <a href="{{ url('/heros/buckyBarnes') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Bucky Barnes</a>
          </div>
        </div>
      </div>

      {{-- Lettre C --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC">
          <span class="letter-icon">C</span>
          <span class="letter-count">13</span>
        </button>
        <div class="collapse" id="collapseC">
          <div class="hero-list">
            <a href="{{ url('/heros/cable') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Cable</a>
            <a href="{{ url('/heros/captainAmerica') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Captain America</a>
            <a href="{{ url('/heros/captainMarvel') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Captain Marvel</a>
            <a href="{{ url('/heros/carnage') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Carnage</a>
            <a href="{{ url('/heros/cerebro') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Cerebro</a>
            <a href="{{ url('/heros/cloak') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Cloak</a>
            <a href="{{ url('/heros/coleenWing') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Coleen Wing</a>
            <a href="{{ url('/heros/collector') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Collector</a>
            <a href="{{ url('/heros/colossus') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Colossus</a>
            <a href="{{ url('/heros/cosmo') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Cosmo</a>
            <a href="{{ url('/heros/crossbones') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Crossbones</a>
            <a href="{{ url('/heros/crystal') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Crystal</a>
            <a href="{{ url('/heros/cyclops') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Cyclops</a>
          </div>
        </div>
      </div>

      {{-- Lettre D --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseD">
          <span class="letter-icon">D</span>
          <span class="letter-count">5</span>
        </button>
        <div class="collapse" id="collapseD">
          <div class="hero-list">
            <a href="{{ url('/heros/daredevil') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Daredevil</a>
            <a href="{{ url('/heros/deadpool') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Deadpool</a>
            <a href="{{ url('/heros/doctorDoom') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Doctor Doom</a>
            <a href="{{ url('/heros/doctorStrange') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Doctor Strange</a>
            <a href="{{ url('/heros/drax') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Drax</a>
          </div>
        </div>
      </div>

      {{-- Lettre E --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseE">
          <span class="letter-icon">E</span>
          <span class="letter-count">3</span>
        </button>
        <div class="collapse" id="collapseE">
          <div class="hero-list">
            <a href="{{ url('/heros/elektra') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Elektra</a>
            <a href="{{ url('/heros/echo') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Echo</a>
            <a href="{{ url('/heros/everettRoss') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Everett Ross</a>
          </div>
        </div>
      </div>

      {{-- Lettre F --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseF">
          <span class="letter-icon">F</span>
          <span class="letter-count">4</span>
        </button>
        <div class="collapse" id="collapseF">
          <div class="hero-list">
            <a href="{{ url('/heros/falcon') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Falcon</a>
            <a href="{{ url('/heros/fandral') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Fandral</a>
            <a href="{{ url('/heros/finFangFoom') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Fin Fang Foom</a>
            <a href="{{ url('/heros/flashThompson') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Flash Thompson</a>
          </div>
        </div>
      </div>

      {{-- Lettre G --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseG">
          <span class="letter-icon">G</span>
          <span class="letter-count">4</span>
        </button>
        <div class="collapse" id="collapseG">
          <div class="hero-list">
            <a href="{{ url('/heros/gamora') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Gamora</a>
            <a href="{{ url('/heros/gargoyle') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Gargoyle</a>
            <a href="{{ url('/heros/ghostRider') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ghost Rider</a>
            <a href="{{ url('/heros/groot') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Groot</a>
          </div>
        </div>
      </div>

      {{-- Lettre H --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseH">
          <span class="letter-icon">H</span>
          <span class="letter-count">3</span>
        </button>
        <div class="collapse" id="collapseH">
          <div class="hero-list">
            <a href="{{ url('/heros/hela') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Hela</a>
            <a href="{{ url('/heros/hawkeye') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Hawkeye</a>
            <a href="{{ url('/heros/hulk') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Hulk</a>
          </div>
        </div>
      </div>

      {{-- Lettre I --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseI">
          <span class="letter-icon">I</span>
          <span class="letter-count">2</span>
        </button>
        <div class="collapse" id="collapseI">
          <div class="hero-list">
            <a href="{{ url('/heros/ironFist') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Iron Fist</a>
            <a href="{{ url('/heros/ironMan') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Iron Man</a>
          </div>
        </div>
      </div>

      {{-- Lettre J --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJ">
          <span class="letter-icon">J</span>
          <span class="letter-count">2</span>
        </button>
        <div class="collapse" id="collapseJ">
          <div class="hero-list">
            <a href="{{ url('/heros/janeFoster') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Jane Foster</a>
            <a href="{{ url('/heros/jessicaJones') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Jessica Jones</a>
          </div>
        </div>
      </div>

      {{-- Lettre K --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseK">
          <span class="letter-icon">K</span>
          <span class="letter-count">1</span>
        </button>
        <div class="collapse" id="collapseK">
          <div class="hero-list">
            <a href="{{ url('/heros/kang') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Kang</a>
          </div>
        </div>
      </div>

      {{-- Lettre L --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL">
          <span class="letter-icon">L</span>
          <span class="letter-count">3</span>
        </button>
        <div class="collapse" id="collapseL">
          <div class="hero-list">
            <a href="{{ url('/heros/loki') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Loki</a>
            <a href="{{ url('/heros/lukeCage') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Luke Cage</a>
            <a href="{{ url('/heros/ladySif') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Lady Sif</a>
          </div>
        </div>
      </div>

      {{-- Lettre M --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseM">
          <span class="letter-icon">M</span>
          <span class="letter-count">4</span>
        </button>
        <div class="collapse" id="collapseM">
          <div class="hero-list">
            <a href="{{ url('/heros/magneto') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Magneto</a>
            <a href="{{ url('/heros/milesMorales') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Miles Morales</a>
            <a href="{{ url('/heros/misterFantastic') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Mister Fantastic</a>
            <a href="{{ url('/heros/moonKnight') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Moon Knight</a>
          </div>
        </div>
      </div>

      {{-- Lettre N --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseN">
          <span class="letter-icon">N</span>
          <span class="letter-count">2</span>
        </button>
        <div class="collapse" id="collapseN">
          <div class="hero-list">
            <a href="{{ url('/heros/nova') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Nova</a>
            <a href="{{ url('/heros/nightcrawler') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Nightcrawler</a>
          </div>
        </div>
      </div>

      {{-- Lettre O --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseO">
          <span class="letter-icon">O</span>
          <span class="letter-count">1</span>
        </button>
        <div class="collapse" id="collapseO">
          <div class="hero-list">
            <a href="{{ url('/heros/onyx') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Onyx</a>
          </div>
        </div>
      </div>

      {{-- Lettre P --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseP">
          <span class="letter-icon">P</span>
          <span class="letter-count">4</span>
        </button>
        <div class="collapse" id="collapseP">
          <div class="hero-list">
            <a href="{{ url('/heros/pepperPotts') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Pepper Potts</a>
            <a href="{{ url('/heros/punisher') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Punisher</a>
            <a href="{{ url('/heros/professorX') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Professor X</a>
            <a href="{{ url('/heros/pegasus') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Pegasus</a>
          </div>
        </div>
      </div>

      {{-- Lettre Q --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ">
          <span class="letter-icon">Q</span>
          <span class="letter-count">1</span>
        </button>
        <div class="collapse" id="collapseQ">
          <div class="hero-list">
            <a href="{{ url('/heros/quetzalcoatl') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Quetzalcoatl</a>
          </div>
        </div>
      </div>

      {{-- Lettre R --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseR">
          <span class="letter-icon">R</span>
          <span class="letter-count">3</span>
        </button>
        <div class="collapse" id="collapseR">
          <div class="hero-list">
            <a href="{{ url('/heros/rocketRaccoon') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Rocket Raccoon</a>
            <a href="{{ url('/heros/rhino') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Rhino</a>
            <a href="{{ url('/heros/raven') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Raven</a>
          </div>
        </div>
      </div>

      {{-- Lettre S --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseS">
          <span class="letter-icon">S</span>
          <span class="letter-count">5</span>
        </button>
        <div class="collapse" id="collapseS">
          <div class="hero-list">
            <a href="{{ url('/heros/spiderMan') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Spider-Man</a>
            <a href="{{ url('/heros/steveRogers') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Steve Rogers</a>
            <a href="{{ url('/heros/storm') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Storm</a>
            <a href="{{ url('/heros/silverSurfer') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Silver Surfer</a>
            <a href="{{ url('/heros/shuri') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Shuri</a>
          </div>
        </div>
      </div>

      {{-- Lettre T --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseT">
          <span class="letter-icon">T</span>
          <span class="letter-count">4</span>
        </button>
        <div class="collapse" id="collapseT">
          <div class="hero-list">
            <a href="{{ url('/heros/thor') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Thor</a>
            <a href="{{ url('/heros/tonyStark') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Tony Stark</a>
            <a href="{{ url('/heros/tigra') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Tigra</a>
            <a href="{{ url('/heros/tessaThompson') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Tessa Thompson</a>
          </div>
        </div>
      </div>

      {{-- Lettre U --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseU">
          <span class="letter-icon">U</span>
          <span class="letter-count">1</span>
        </button>
        <div class="collapse" id="collapseU">
          <div class="hero-list">
            <a href="{{ url('/heros/ultron') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ultron</a>
          </div>
        </div>
      </div>

      {{-- Lettre V --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseV">
          <span class="letter-icon">V</span>
          <span class="letter-count">2</span>
        </button>
        <div class="collapse" id="collapseV">
          <div class="hero-list">
            <a href="{{ url('/heros/vision') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Vision</a>
            <a href="{{ url('/heros/valkyrie') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Valkyrie</a>
          </div>
        </div>
      </div>

      {{-- Lettre W --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseW">
          <span class="letter-icon">W</span>
          <span class="letter-count">2</span>
        </button>
        <div class="collapse" id="collapseW">
          <div class="hero-list">
            <a href="{{ url('/heros/wolverine') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Wolverine</a>
            <a href="{{ url('/heros/warMachine') }}" class="hero-link"><i class="bi bi-chevron-right"></i> War Machine</a>
          </div>
        </div>
      </div>

      {{-- Lettre X --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseX">
          <span class="letter-icon">X</span>
          <span class="letter-count">2</span>
        </button>
        <div class="collapse" id="collapseX">
          <div class="hero-list">
            <a href="{{ url('/heros/x23') }}" class="hero-link"><i class="bi bi-chevron-right"></i> X-23</a>
            <a href="{{ url('/heros/xavier') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Xavier</a>
          </div>
        </div>
      </div>

      {{-- Lettre Y --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseY">
          <span class="letter-icon">Y</span>
          <span class="letter-count">1</span>
        </button>
        <div class="collapse" id="collapseY">
          <div class="hero-list">
            <a href="{{ url('/heros/yelenaBelova') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Yelena Belova</a>
          </div>
        </div>
      </div>

      {{-- Lettre Z --}}
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZ">
          <span class="letter-icon">Z</span>
          <span class="letter-count">1</span>
        </button>
        <div class="collapse" id="collapseZ">
          <div class="hero-list">
            <a href="{{ url('/heros/zarathos') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Zarathos</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
