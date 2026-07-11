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

    <!-- Lettre A -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA">
          <span class="letter-icon">A</span>
          <span class="letter-count">16</span>
        </button>
        <div class="collapse" id="collapseA">
          <div class="hero-list">
            <a href="{{ url('/heros/abomination') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Abomination</a>
            <a href="{{ url('/heros/absorbing-man') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Absorbing Man</a>
            <a href="{{ url('/heros/adam-warlock') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Adam Warlock</a>
            <a href="{{ url('/heros/aero') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Aero</a>
            <a href="{{ url('/heros/agatha-harkness') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Agatha Harkness</a>
            <a href="{{ url('/heros/ajax') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ajax</a>
            <a href="{{ url('/heros/ancien') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ancien</a>
            <a href="{{ url('/heros/america-chavez') }}" class="hero-link"><i class="bi bi-chevron-right"></i> America Chavez</a>
            <a href="{{ url('/heros/angel') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Angel</a>
            <a href="{{ url('/heros/annihilus') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Annihilus</a>
            <a href="{{ url('/heros/ant-man-hank-pym') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ant Man (Hank Pym)</a>
            <a href="{{ url('/heros/ant-man-scott-lang') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ant Man (Scott Lang)</a>
            <a href="{{ url('/heros/apocalypse') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Apocalypse</a>
            <a href="{{ url('/heros/armor') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Armor</a>
            <a href="{{ url('/heros/arnim-zola') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Arnim Zola</a>
            <a href="{{ url('/heros/attuma') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Attuma</a>
          </div>
        </div>
      </div>

      <!-- Lettre B -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB">
          <span class="letter-icon">B</span>
          <span class="letter-count">14</span>
        </button>
        <div class="collapse" id="collapseB">
          <div class="hero-list">
            <a href="{{ url('/heros/baron-mordo') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Baron Mordo</a>
            <a href="{{ url('/heros/baron-zemo') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Baron Zemo</a>
            <a href="{{ url('/heros/bast') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Bast</a>
            <a href="{{ url('/heros/beast') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Beast</a>
            <a href="{{ url('/heros/bishop') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Bishop</a>
            <a href="{{ url('/heros/black-bolt') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Black Bolt</a>
            <a href="{{ url('/heros/black-cat') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Black Cat</a>
            <a href="{{ url('/heros/black-panther') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Black Panther</a>
            <a href="{{ url('/heros/black-widow') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Black Widow</a>
            <a href="{{ url('/heros/blade') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Blade</a>
            <a href="{{ url('/heros/blue-marvel') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Blue Marvel</a>
            <a href="{{ url('/heros/brood') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Brood</a>
            <a href="{{ url('/heros/bucky-barnes') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Bucky Barnes</a>
            <a href="{{ url('/heros/bullseye') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Bullseye</a>
          </div>
        </div>
      </div>

      <!-- Lettre C -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC">
          <span class="letter-icon">C</span>
          <span class="letter-count">17</span>
        </button>
        <div class="collapse" id="collapseC">
          <div class="hero-list">
            <a href="{{ url('/heros/cable') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Cable</a>
            <a href="{{ url('/heros/cannonball') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Cannonball</a>
            <a href="{{ url('/heros/captain-america') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Captain America</a>
            <a href="{{ url('/heros/captain-marvel') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Captain Marvel</a>
            <a href="{{ url('/heros/carnage') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Carnage</a>
            <a href="{{ url('/heros/cassandra-nova') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Cassandra Nova</a>
            <a href="{{ url('/heros/cerebro') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Cerebro</a>
            <a href="{{ url('/heros/charles-xavier') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Charles Xavier</a>
            <a href="{{ url('/heros/cloak') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Cloak</a>
            <a href="{{ url('/heros/coleen-wing') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Coleen Wing</a>
            <a href="{{ url('/heros/collector') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Collector</a>
            <a href="{{ url('/heros/colossus') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Colossus</a>
            <a href="{{ url('/heros/copycat') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Copycat</a>
            <a href="{{ url('/heros/cosmo') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Cosmo</a>
            <a href="{{ url('/heros/crossbones') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Crossbones</a>
            <a href="{{ url('/heros/crystal') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Crystal</a>
            <a href="{{ url('/heros/cyclope') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Cyclope</a>
          </div>
        </div>
      </div>

      <!-- Lettre D -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseD">
          <span class="letter-icon">D</span>
          <span class="letter-count">17</span>
        </button>
        <div class="collapse" id="collapseD">
          <div class="hero-list">
            <a href="{{ url('/heros/dagger') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Dagger</a>
            <a href="{{ url('/heros/daredevil') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Daredevil</a>
            <a href="{{ url('/heros/darkhawk') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Darkhawk</a>
            <a href="{{ url('/heros/dazzler') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Dazzler</a>
            <a href="{{ url('/heros/deadpool') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Deadpool</a>
            <a href="{{ url('/heros/death') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Death</a>
            <a href="{{ url('/heros/deathlock') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Deathlock</a>
            <a href="{{ url('/heros/debrii') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Debrii</a>
            <a href="{{ url('/heros/destroyer') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Destroyer</a>
            <a href="{{ url('/heros/devil-dinosaur') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Devil Dinosaur</a>
            <a href="{{ url('/heros/doctor-doom') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Doctor Doom</a>
            <a href="{{ url('/heros/doctor-octopus') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Doctor Octopus</a>
            <a href="{{ url('/heros/doctor-strange') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Doctor Strange</a>
            <a href="{{ url('/heros/domino') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Domino</a>
            <a href="{{ url('/heros/dormammu') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Dormammu</a>
            <a href="{{ url('/heros/dracula') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Dracula</a>
            <a href="{{ url('/heros/drax') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Drax</a>
          </div>
        </div>
      </div>

      <!-- Lettre E -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseE">
          <span class="letter-icon">E</span>
          <span class="letter-count">5</span>
        </button>
        <div class="collapse" id="collapseE">
          <div class="hero-list">
            <a href="{{ url('/heros/ebony-maw') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ebony Maw</a>
            <a href="{{ url('/heros/electro') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Electro</a>
            <a href="{{ url('/heros/elektra') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Elektra</a>
            <a href="{{ url('/heros/emma-frost') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Emma Frost</a>
            <a href="{{ url('/heros/enchantress') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Enchantress</a>
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
            <a href="{{ url('/heros/falcon') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Falcon</a>
            <a href="{{ url('/heros/forge') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Forge</a>
          </div>
        </div>
      </div>

      <!-- Lettre G -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseG">
          <span class="letter-icon">G</span>
          <span class="letter-count">8</span>
        </button>
        <div class="collapse" id="collapseG">
          <div class="hero-list">
            <a href="{{ url('/heros/galactus') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Galactus</a>
            <a href="{{ url('/heros/gambit') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Gambit</a>
            <a href="{{ url('/heros/gamora') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Gamora</a>
            <a href="{{ url('/heros/ghost') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ghost</a>
            <a href="{{ url('/heros/ghost-rider') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ghost Rider</a>
            <a href="{{ url('/heros/gorr') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Gorr</a>
            <a href="{{ url('/heros/green-goblin') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Green Goblin</a>
            <a href="{{ url('/heros/groot') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Groot</a>
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
            <a href="{{ url('/heros/havok') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Havok</a>
            <a href="{{ url('/heros/hawkeye') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Hawkeye</a>
            <a href="{{ url('/heros/hazmat') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Hazmat</a>
            <a href="{{ url('/heros/heimdall') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Heimdall</a>
            <a href="{{ url('/heros/hela') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Hela</a>
            <a href="{{ url('/heros/high-evolutionary') }}" class="hero-link"><i class="bi bi-chevron-right"></i> High Evolutionnary</a>
            <a href="{{ url('/heros/hit-monkey') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Hit Monkey</a>
            <a href="{{ url('/heros/hobgoblin') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Hobgoblin</a>
            <a href="{{ url('/heros/hood') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Hood</a>
            <a href="{{ url('/heros/hope-summers') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Hope Summers</a>
            <a href="{{ url('/heros/howard-the-duck') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Howard The Duck</a>
            <a href="{{ url('/heros/hulk') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Hulk</a>
            <a href="{{ url('/heros/human-torch') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Human Torch</a>
          </div>
        </div>
      </div>

      <!-- Lettre I -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseI">
          <span class="letter-icon">I</span>
          <span class="letter-count">7</span>
        </button>
        <div class="collapse" id="collapseI">
          <div class="hero-list">
            <a href="{{ url('/heros/ice-man') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ice Man</a>
            <a href="{{ url('/heros/infinaut') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Infinaut</a>
            <a href="{{ url('/heros/invisible-woman') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Invisible Woman</a>
            <a href="{{ url('/heros/iron-fist') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Iron Fist</a>
            <a href="{{ url('/heros/iron-lad') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Iron Lad</a>
            <a href="{{ url('/heros/iron-man') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Iron Man</a>
            <a href="{{ url('/heros/ironheart') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ironheart</a>
          </div>
        </div>
      </div>

      <!-- Lettre J -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJ">
          <span class="letter-icon">J</span>
          <span class="letter-count">6</span>
        </button>
        <div class="collapse" id="collapseJ">
          <div class="hero-list">
            <a href="{{ url('/heros/jane-foster') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Jane Foster</a>
            <a href="{{ url('/heros/jean-grey') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Jean Grey</a>
            <a href="{{ url('/heros/jeff') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Jeff</a>
            <a href="{{ url('/heros/jessica-jones') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Jessica Jones</a>
            <a href="{{ url('/heros/jubilee') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Jubilee</a>
            <a href="{{ url('/heros/juggernaut') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Juggernaut</a>
          </div>
        </div>
      </div>

      <!-- Lettre K -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseK">
          <span class="letter-icon">K</span>
          <span class="letter-count">11</span>
        </button>
        <div class="collapse" id="collapseK">
          <div class="hero-list">
            <a href="{{ url('/heros/ka-zar') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ka-Zar</a>
            <a href="{{ url('/heros/kamala-khan') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Kamala Khan</a>
            <a href="{{ url('/heros/kang') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Kang</a>
            <a href="{{ url('/heros/kate-bishop') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Kate Bishop</a>
            <a href="{{ url('/heros/killmonger') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Killmonger</a>
            <a href="{{ url('/heros/kingpin') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Kingpin</a>
            <a href="{{ url('/heros/kitty-pryde') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Kitty Pryde</a>
            <a href="{{ url('/heros/klaw') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Klaw</a>
            <a href="{{ url('/heros/knull') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Knull</a>
            <a href="{{ url('/heros/korg') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Korg</a>
            <a href="{{ url('/heros/kraven') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Kraven</a>
          </div>
        </div>
      </div>

      <!-- Lettre L -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseL">
          <span class="letter-icon">L</span>
          <span class="letter-count">8</span>
        </button>
        <div class="collapse" id="collapseL">
          <div class="hero-list">
            <a href="{{ url('/heros/leader') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Leader</a>
            <a href="{{ url('/heros/leech') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Leech</a>
            <a href="{{ url('/heros/legion') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Legion</a>
            <a href="{{ url('/heros/living-tribunal') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Living Tribunal</a>
            <a href="{{ url('/heros/lizard') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Lizard</a>
            <a href="{{ url('/heros/lockjaw') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Lockjaw</a>
            <a href="{{ url('/heros/loki') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Loki</a>
            <a href="{{ url('/heros/luke-cage') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Luke Cage</a>
          </div>
        </div>
      </div>

      <!-- Lettre M -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseM">
          <span class="letter-icon">M</span>
          <span class="letter-count">24</span>
        </button>
        <div class="collapse" id="collapseM">
          <div class="hero-list">
            <a href="{{ url('/heros/magik') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Magik</a>
            <a href="{{ url('/heros/magneto') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Magneto</a>
            <a href="{{ url('/heros/mantis') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Mantis</a>
            <a href="{{ url('/heros/maria-hill') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Maria Hill</a>
            <a href="{{ url('/heros/master-mold') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Master Mold</a>
            <a href="{{ url('/heros/maximus') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Maximus</a>
            <a href="{{ url('/heros/mbaku') }}" class="hero-link"><i class="bi bi-chevron-right"></i> M'Baku</a>
            <a href="{{ url('/heros/medusa') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Medusa</a>
            <a href="{{ url('/heros/mephisto') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Mephisto</a>
            <a href="{{ url('/heros/miles-morales') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Miles Morales</a>
            <a href="{{ url('/heros/mister-fantastic') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Mister Fantastic</a>
            <a href="{{ url('/heros/mister-negative') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Mister Negative</a>
            <a href="{{ url('/heros/mister-sinister') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Mister Sinister</a>
            <a href="{{ url('/heros/misty-knight') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Misty Knight</a>
            <a href="{{ url('/heros/modok') }}" class="hero-link"><i class="bi bi-chevron-right"></i> M.O.D.O.K</a>
            <a href="{{ url('/heros/mojo') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Mojo</a>
            <a href="{{ url('/heros/monica-rambeau') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Monica Rambeau</a>
            <a href="{{ url('/heros/moon-girl') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Moon Girl</a>
            <a href="{{ url('/heros/moon-knight') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Moon Knight</a>
            <a href="{{ url('/heros/morbius') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Morbius</a>
            <a href="{{ url('/heros/morph') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Morph</a>
            <a href="{{ url('/heros/multiple-man') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Multiple Man</a>
            <a href="{{ url('/heros/mysterio') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Mysterio</a>
            <a href="{{ url('/heros/mystique') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Mystique</a>
          </div>
        </div>
      </div>

      <!-- Lettre N -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseN">
          <span class="letter-icon">N</span>
          <span class="letter-count">7</span>
        </button>
        <div class="collapse" id="collapseN">
          <div class="hero-list">
            <a href="{{ url('/heros/nakia') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Nakia</a>
            <a href="{{ url('/heros/namor') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Namor</a>
            <a href="{{ url('/heros/nebula') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Nebula</a>
            <a href="{{ url('/heros/negasonic') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Negasonic</a>
            <a href="{{ url('/heros/nick-fury') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Nick Fury</a>
            <a href="{{ url('/heros/nightcrawler') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Nightcrawler</a>
            <a href="{{ url('/heros/nimrod') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Nimrod</a>
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
            <a href="{{ url('/heros/odin') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Odin</a>
            <a href="{{ url('/heros/okoye') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Okoye</a>
            <a href="{{ url('/heros/omega-red') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Omega Red</a>
            <a href="{{ url('/heros/onslaught') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Onslaught</a>
          </div>
        </div>
      </div>

      <!-- Lettre P -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseP">
          <span class="letter-icon">P</span>
          <span class="letter-count">6</span>
        </button>
        <div class="collapse" id="collapseP">
          <div class="hero-list">
            <a href="{{ url('/heros/patriot') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Patriot</a>
            <a href="{{ url('/heros/peggy-carter') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Peggy Carter</a>
            <a href="{{ url('/heros/phil-coulson') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Phil Coulson</a>
            <a href="{{ url('/heros/polaris') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Polaris</a>
            <a href="{{ url('/heros/psylocke') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Psylocke</a>
            <a href="{{ url('/heros/punisher') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Punisher</a>
          </div>
        </div>
      </div>

      <!-- Lettre Q -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQ">
          <span class="letter-icon">Q</span>
          <span class="letter-count">2</span>
        </button>
        <div class="collapse" id="collapseQ">
          <div class="hero-list">
            <a href="{{ url('/heros/quake') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Quake</a>
            <a href="{{ url('/heros/quicksilver') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Quicksilver</a>
          </div>
        </div>
      </div>

      <!-- Lettre R -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseR">
          <span class="letter-icon">R</span>
          <span class="letter-count">9</span>
        </button>
        <div class="collapse" id="collapseR">
          <div class="hero-list">
            <a href="{{ url('/heros/red-guardian') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Red Guardian</a>
            <a href="{{ url('/heros/red-hulk') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Red Hulk</a>
            <a href="{{ url('/heros/red-skull') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Red Skull</a>
            <a href="{{ url('/heros/rescue') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Rescue</a>
            <a href="{{ url('/heros/rhino') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Rhino</a>
            <a href="{{ url('/heros/rocket-racoon') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Rocket Racoon</a>
            <a href="{{ url('/heros/rockslide') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Rockslide</a>
            <a href="{{ url('/heros/rogue') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Rogue</a>
            <a href="{{ url('/heros/ronan') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ronan</a>
          </div>
        </div>
      </div>

      <!-- Lettre S -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseS">
          <span class="letter-icon">S</span>
          <span class="letter-count">34</span>
        </button>
        <div class="collapse" id="collapseS">
          <div class="hero-list">
            <a href="{{ url('/heros/sabretooth') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Sabretooth</a>
            <a href="{{ url('/heros/sandman') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Sandman</a>
            <a href="{{ url('/heros/sauron') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Sauron</a>
            <a href="{{ url('/heros/scarlet-witch') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Scarlet Witch</a>
            <a href="{{ url('/heros/scorpion') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Scorpion</a>
            <a href="{{ url('/heros/scream') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Scream</a>
            <a href="{{ url('/heros/sentinel') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Sentinel</a>
            <a href="{{ url('/heros/sentry') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Sentry</a>
            <a href="{{ url('/heros/sera') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Sera</a>
            <a href="{{ url('/heros/shadow-king') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Shadow King</a>
            <a href="{{ url('/heros/shang-chi') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Shang-Chi</a>
            <a href="{{ url('/heros/shanna') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Shanna</a>
            <a href="{{ url('/heros/sharon-carter') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Sharon Carter</a>
            <a href="{{ url('/heros/she-hulk') }}" class="hero-link"><i class="bi bi-chevron-right"></i> She-Hulk</a>
            <a href="{{ url('/heros/shocker') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Shocker</a>
            <a href="{{ url('/heros/shuri') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Shuri</a>
            <a href="{{ url('/heros/sif') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Sif</a>
            <a href="{{ url('/heros/silk') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Silk</a>
            <a href="{{ url('/heros/silver-sable') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Silver Sable</a>
            <a href="{{ url('/heros/silver-surfer') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Silver Surfer</a>
            <a href="{{ url('/heros/skaar') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Skaar</a>
            <a href="{{ url('/heros/snowguard') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Snowguard</a>
            <a href="{{ url('/heros/spider-man') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Spider-Man</a>
            <a href="{{ url('/heros/spider-woman') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Spider-Woman</a>
            <a href="{{ url('/heros/squirrel-girl') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Squirrel Girl</a>
            <a href="{{ url('/heros/star-lord') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Star-Lord</a>
            <a href="{{ url('/heros/stature') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Stature</a>
            <a href="{{ url('/heros/stegron') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Stegron</a>
            <a href="{{ url('/heros/storm') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Storm</a>
            <a href="{{ url('/heros/strong-guy') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Strong Guy</a>
            <a href="{{ url('/heros/sunspot') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Sunspot</a>
            <a href="{{ url('/heros/super-skrull') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Super-Skrull</a>
            <a href="{{ url('/heros/surtur') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Surtur</a>
            <a href="{{ url('/heros/swarm') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Swarm</a>
            <a href="{{ url('/heros/sword-master') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Sword Master</a>
          </div>
        </div>
      </div>

      <!-- Lettre T -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseT">
          <span class="letter-icon">T</span>
          <span class="letter-count">7</span>
        </button>
        <div class="collapse" id="collapseT">
          <div class="hero-list">
            <a href="{{ url('/heros/taskmaster') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Taskmaster</a>
            <a href="{{ url('/heros/thanos') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Thanos</a>
            <a href="{{ url('/heros/thing') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Thing</a>
            <a href="{{ url('/heros/thor') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Thor</a>
            <a href="{{ url('/heros/titania') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Titania</a>
            <a href="{{ url('/heros/toxin') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Toxin</a>
            <a href="{{ url('/heros/typhoid-mary') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Typhoid Mary</a>
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
            <a href="{{ url('/heros/uatu') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Uatu</a>
            <a href="{{ url('/heros/ultron') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Ultron</a>
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
            <a href="{{ url('/heros/valkyrie') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Valkyrie</a>
            <a href="{{ url('/heros/venom') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Venom</a>
            <a href="{{ url('/heros/viper') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Viper</a>
            <a href="{{ url('/heros/vision') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Vision</a>
            <a href="{{ url('/heros/vulture') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Vulture</a>
          </div>
        </div>
      </div>

      <!-- Lettre W -->
      <div class="letter-card">
        <button class="btn-letter" type="button" data-bs-toggle="collapse" data-bs-target="#collapseW">
          <span class="letter-icon">W</span>
          <span class="letter-count">9</span>
        </button>
        <div class="collapse" id="collapseW">
          <div class="hero-list">
            <a href="{{ url('/heros/war-machine') }}" class="hero-link"><i class="bi bi-chevron-right"></i> War Machine</a>
            <a href="{{ url('/heros/warpath') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Warpath</a>
            <a href="{{ url('/heros/wasp') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Wasp</a>
            <a href="{{ url('/heros/wave') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Wave</a>
            <a href="{{ url('/heros/werewolf') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Werewolf</a>
            <a href="{{ url('/heros/white-tiger') }}" class="hero-link"><i class="bi bi-chevron-right"></i> White Tiger</a>
            <a href="{{ url('/heros/wolfsbane') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Wolfsbane</a>
            <a href="{{ url('/heros/wolverine') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Wolverine</a>
            <a href="{{ url('/heros/wong') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Wong</a>
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
            <a href="{{ url('/heros/yelena-belova') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Yelena Belova</a>
            <a href="{{ url('/heros/yondu') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Yondu</a>
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
            <a href="{{ url('/heros/zabu') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Zabu</a>
            <a href="{{ url('/heros/zero') }}" class="hero-link"><i class="bi bi-chevron-right"></i> Zero</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection