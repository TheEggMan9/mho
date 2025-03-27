let names = [
    "abomination",
    "absorbing man",
    "adam warlock",
    "aero",
    "agatha harkness",
    "agent 13",
    "agent coulson",
    "america chavez",
    "angel",
    "angela",
    "ant man",
    "apocalypse",
    "armor",
    "arnim zola",
    "attuma",
    "baron mordo",
    "bast",
    "beast",
    "bishop",
    "black bolt",
    "black cat",
    "black panther",
    "black widow",
    "blade",
    "blue marvel",
    "brood",
    "bucky barnes",
    "cable",
    "captain america",
    "captain marvel",
    "carnage",
    "cerebro",
    "cloak",
    "coleen wing",
    "collector",
    "colossus",
    "cosmo",
    "crossbones",
    "crystal",
    "cyclops",
    "dagger",
    "daredevil",
    "darkhawk",
    "dazzler",
    "deadpool",
    "death",
    "deathlok",
    "debrii",
    "destroyer",
    "devil dinosaur",
    "doctor doom",
    "doctor octopus",
    "doctor strange",
    "domino",
    "dracula",
    "drax",
    "ebony maw",
    "electro",
    "elektra",
    "enchantress",
    "falcon",
    "forge",
    "galactus",
    "gambit",
    "gamora",
    "ghost",
    "ghost rider",
    "green goblin",
    "groot",
    "hawkeye",
    "hazmat",
    "heimdall",
    "hela",
    "helicarrier",
    "high evolutionary",
    "hit monkey",
    "hobgoblin",
    "hood",
    "howard the duck",
    "hulk",
    "hulkbuster",
    "human torch",
    "ice man",
    "invisible woman",
    "iron fist",
    "iron lad",
    "iron man",
    "ironheart",
    "jeff",
    "jessica jones",
    "jubilee",
    "juggernaut",
    "ka-zar",
    "kang",
    "killmonger",
    "kingpin",
    "kitty  pryde",
    "klaw",
    "knull",
    "korg",
    "kraven",
    "Lady sif",
    "leader",
    "leech",
    "living tribunal",
    "lizard",
    "lockjaw",
    "luke cage",
    "m'Baku",
    "modok",
    "magik",
    "magneto",
    "mantis",
    "maria hill",
    "master mold",
    "maximus",
    "medusa",
    "mighty thor",
    "miles morales",
    "mister fantastic",
    "mister negative",
    "mister sinister",
    "misty night",
    "mojo",
    "moon girl",
    "moon knight",
    "morbius",
    "morph",
    "multiple man",
    "mysterio",
    "mystique",
    "nakia",
    "namor",
    "nebula",
    "negasonic",
    "nick fury",
    "nightcrawler",
    "nimrod",
    "nova",
    "odin",
    "okoye",
    "omega red",
    "onslaught",
    "orka",
    "patriot",
    "polaris",
    "professor x",
    "psylocke",
    "punisher",
    "quake",
    "quiksilver",
    "quinjet",
    "red skull",
    "rescue",
    "rhino",
    "rocket raccoon",
    "rock slide",
    "rogue",
    "ronan",
    "sabretooth",
    "sandman",
    "sauron",
    "scarlet witch",
    "scorpion",
    "sentinel",
    "sentry",
    "sera",
    "shadow king",
    "shang-chi",
    "shanna",
    "she-hulk",
    "shocker",
    "shuri",
    "silk",
    "silver surfer",
    "snowguard",
    "spectrum",
    "spider-man",
    "spider-woman",
    "squirrel girl",
    "star-Lord",
    "stature",
    "stegron",
    "storm",
    "strong Guy",
    "sunspot",
    "super-skurll",
    "swarm",
    "sword master",
    "taskmaster",
    "thanos",
    "thing",
    "thor",
    "titania",
    "typhoid mary",
    "uatu",
    "ultron",
    "valkyrie",
    "venom",
    "viper",
    "vision",
    "vulture",
    "warpath",
    "wasp",
    "wave",
    "white queen",
    "white tiger",
    "wolfbane",
    "wolverine",
    "wong",
    "yellowjacket",
    "yondu",
    "zabu",
    "zero",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
    "",
];
let sortedNames = names.sort();
let input = document.getElementById("input");

input.addEventListener("keyup", (e) => {
    removeElements();
    for (let i of sortedNames) {
        if (
            i.toLowerCase().startsWith(input.value.toLowerCase()) &&
            input.value != ""
        ) {
            let listItem = document.createElement("li");
            listItem.classList.add("list-group-item", "list-items");
            listItem.style.cursor = "pointer";
            listItem.setAttribute("onclick", "redirectToPage('" + i + "')");

            listItem.style.backgroundColor = "#f8f9fa"; // Couleur de fond pour la liste
            listItem.style.color = "#343a40"; // Couleur de texte

            listItem.onmouseover = function () {
                this.style.backgroundColor = "#007bff"; // Couleur de fond au survol
                this.style.color = "white"; // Couleur de texte au survol
            };
            listItem.onmouseout = function () {
                this.style.backgroundColor = "#f8f9fa";
                this.style.color = "#343a40";
            };

            let word = "<b>" + i.substr(0, input.value.length) + "</b>";
            word += i.substr(input.value.length);
            listItem.innerHTML = word;
            document.querySelector(".list").appendChild(listItem);
        }
    }
});

function redirectToPage(value) {
    // Rediriger l'utilisateur vers différentes pages en fonction de la suggestion sélectionnée
    if (value === "abomination") {
        window.location.href = "/mho/public/heros/abomination";
    }
    if (value === "absorbing man") {
        window.location.href = "/mho/public/heros/absorbingMan";
    }
    if (value === "adam warlock") {
        window.location.href = "/mho/public/heros/adamWarlock";
    }
    if (value === "aero") {
        window.location.href = "/mho/public/heros/aero";
    }
    if (value === "agatha harkness") {
        window.location.href = "/mho/public/heros/agathaHarkness";
    }
    if (value === "agent 13") {
        window.location.href = "/mho/public/heros/agent13";
    }
    if (value === "agent coulson") {
        window.location.href = "/mho/public/heros/agentCoulson";
    }
    if (value === "america chavez") {
        window.location.href = "/mho/public/heros/americaChavez";
    }
    if (value === "angel") {
        window.location.href = "/mho/public/heros/angel";
    }
    if (value === "angela") {
        window.location.href = "/mho/public/heros/angela";
    }
    if (value === "ant man") {
        window.location.href = "/mho/public/heros/antMan";
    }
    if (value === "apocalypse") {
        window.location.href = "/mho/public/heros/apocalypse";
    }
    if (value === "armor") {
        window.location.href = "/mho/public/heros/armor";
    }
    if (value === "arnim zola") {
        window.location.href = "/mho/public/heros/arnimZola";
    }
    if (value === "attuma") {
        window.location.href = "/mho/public/heros/attuma";
    }
    if (value === "baron mordo") {
        window.location.href = "/mho/public/heros/baronMordo";
    }
    if (value === "bast") {
        window.location.href = "/mho/public/heros/bast";
    }
    if (value === "beast") {
        window.location.href = "/mho/public/heros/beast";
    }
    if (value === "bishop") {
        window.location.href = "/mho/public/heros/bishop";
    }
    if (value === "black bolt") {
        window.location.href = "/mho/public/heros/blackBolt";
    }
    if (value === "black cat") {
        window.location.href = "/mho/public/heros/blackCat";
    }
    if (value === "black panther") {
        window.location.href = "/mho/public/heros/blackPanther";
    }
    if (value === "black widow") {
        window.location.href = "/mho/public/heros/blackWidow";
    }
    if (value === "blade") {
        window.location.href = "/mho/public/heros/blade";
    }
    if (value === "blue marvel") {
        window.location.href = "/mho/public/heros/blueMarvel";
    }
    if (value === "brood") {
        window.location.href = "/mho/public/heros/brood";
    }
    if (value === "bucky barnes") {
        window.location.href = "/mho/public/heros/buckyBarnes";
    }
    if (value === "cable") {
        window.location.href = "/mho/public/heros/cable";
    }
    if (value === "captain america") {
        window.location.href = "/mho/public/heros/captainAmerica";
    }
    if (value === "captain marvel") {
        window.location.href = "/mho/public/heros/captainMarvel";
    }
    if (value === "carnage") {
        window.location.href = "/mho/public/heros/carnage";
    }
    if (value === "cerebro") {
        window.location.href = "/mho/public/heros/cerebro";
    }
    if (value === "cloak") {
        window.location.href = "/mho/public/heros/cloak";
    }
    if (value === "coleen wing") {
        window.location.href = "/mho/public/heros/coleenWing";
    }
    if (value === "collector") {
        window.location.href = "/mho/public/heros/collector";
    }
    if (value === "colossus") {
        window.location.href = "/mho/public/heros/colossus";
    }
    if (value === "cosmo") {
        window.location.href = "/mho/public/heros/cosmo";
    }
    if (value === "crossbones") {
        window.location.href = "/mho/public/heros/crossbones";
    }
    if (value === "crystal") {
        window.location.href = "/mho/public/heros/crystal";
    }
    if (value === "cyclops") {
        window.location.href = "/mho/public/heros/cyclops";
    }
    if (value === "dagger") {
        window.location.href = "/mho/public/heros/dagger";
    }
    if (value === "daredevil") {
        window.location.href = "/mho/public/heros/daredevil";
    }
    if (value === "darkhawk") {
        window.location.href = "/mho/public/heros/darkhawk";
    }
    if (value === "dazzler") {
        window.location.href = "/mho/public/heros/dazzler";
    }
    if (value === "deadpool") {
        window.location.href = "/mho/public/heros/deadpool";
    }
    if (value === "death") {
        window.location.href = "/mho/public/heros/death";
    }
    if (value === "deathlok") {
        window.location.href = "/mho/public/heros/deathlok";
    }
    if (value === "debrii") {
        window.location.href = "/mho/public/heros/debrii";
    }
    if (value === "destroyer") {
        window.location.href = "/mho/public/heros/destroyer";
    }
    if (value === "devil dinosaur") {
        window.location.href = "/mho/public/heros/devilDinosaur";
    }
    if (value === "doctor doom") {
        window.location.href = "/mho/public/heros/doctorDoom";
    }
    if (value === "doctor octopus") {
        window.location.href = "/mho/public/heros/doctorOctopus";
    }
    if (value === "doctor strange") {
        window.location.href = "/mho/public/heros/doctorStrange";
    }
    if (value === "domino") {
        window.location.href = "/mho/public/heros/domino";
    }
    if (value === "dracula") {
        window.location.href = "/mho/public/heros/dracula";
    }
    if (value === "drax") {
        window.location.href = "/mho/public/heros/drax";
    }
    if (value === "ebony maw") {
        window.location.href = "/mho/public/heros/ebonyMaw";
    }
    if (value === "electro") {
        window.location.href = "/mho/public/heros/electro";
    }
    if (value === "elektra") {
        window.location.href = "/mho/public/heros/elektra";
    }
    if (value === "enchantress") {
        window.location.href = "/mho/public/heros/enchantress";
    }
    if (value === "falcon") {
        window.location.href = "/mho/public/heros/falcon";
    }
    if (value === "forge") {
        window.location.href = "/mho/public/heros/forge";
    }
    if (value === "galactus") {
        window.location.href = "/mho/public/heros/galactus";
    }
    if (value === "gambit") {
        window.location.href = "/mho/public/heros/gambit";
    }
    if (value === "gamora") {
        window.location.href = "/mho/public/heros/gamora";
    }
    if (value === "ghost") {
        window.location.href = "/mho/public/heros/ghost";
    }
    if (value === "ghost rider") {
        window.location.href = "/mho/public/heros/ghostRider";
    }
    if (value === "green goblin") {
        window.location.href = "/mho/public/heros/greenGoblin";
    }
    if (value === "groot") {
        window.location.href = "/mho/public/heros/groot";
    }
    if (value === "hawkeye") {
        window.location.href = "/mho/public/heros/hawkeye";
    }
    if (value === "hazmat") {
        window.location.href = "/mho/public/heros/hazmat";
    }
    if (value === "heimdall") {
        window.location.href = "/mho/public/heros/heimdall";
    }
    if (value === "hela") {
        window.location.href = "/mho/public/heros/hela";
    }
    if (value === "helicarrier") {
        window.location.href = "/mho/public/heros/helicarrier";
    }
    if (value === "high evolutionary") {
        window.location.href = "/mho/public/heros/highEvolutionary";
    }
    if (value === "hit monkey") {
        window.location.href = "/mho/public/heros/hitMonkey";
    }
    if (value === "hobgoblin") {
        window.location.href = "/mho/publicheros/hobgoblin";
    }
    if (value === "hood") {
        window.location.href = "/mho/public/heros/hood";
    }
    if (value === "howard the duck") {
        window.location.href = "/mho/public/heros/howardTheDuck";
    }
    if (value === "hulk") {
        window.location.href = "/mho/public/heros/hulk";
    }
    if (value === "hulkbuster") {
        window.location.href = "/mho/public/heros/hulkbuster";
    }
    if (value === "human torch") {
        window.location.href = "/mho/public/heros/humanTorch";
    }
    if (value === "ice man") {
        window.location.href = "/mho/public/heros/iceMan";
    }
    if (value === "invisible woman") {
        window.location.href = "/mho/public/heros/invisibleWoman";
    }
    if (value === "iron fist") {
        window.location.href = "/mho/public/heros/ironFist";
    }
    if (value === "iron lad") {
        window.location.href = "/mho/public/heros/ironLad";
    }
    if (value === "iron man") {
        window.location.href = "/mho/public/heros/ironMan";
    }
    if (value === "ironheart") {
        window.location.href = "/mho/public/heros/ironheart";
    }
    if (value === "jeff") {
        window.location.href = "/mho/public/heros/jeff";
    }
    if (value === "jessica jones") {
        window.location.href = "/mho/public/heros/jessicaJones";
    }
    if (value === "kang") {
        window.location.href = "/mho/public/heros/kang";
    }
    if (value === "killmonger") {
        window.location.href = "/mho/public/heros/killmonger";
    }
    if (value === "kingpin") {
        window.location.href = "/mho/public/heros/kingpin";
    }
    if (value === "kitty Pride") {
        window.location.href = "/mho/public/heros/kittyPride";
    }
    if (value === "klaw") {
        window.location.href = "/mho/public/heros/klaw";
    }
    if (value === "knull") {
        window.location.href = "/mho/public/heros/knull";
    }
    if (value === "korg") {
        window.location.href = "/mho/public/heros/korg";
    }
    if (value === "kraven") {
        window.location.href = "/mho/public/heros/kraven";
    }
    if (value === "lady sif") {
        window.location.href = "/mho/public/heros/ladiSif";
    }
    if (value === "leader") {
        window.location.href = "/mho/public/heros/leader";
    }
    if (value === "leech") {
        window.location.href = "/mho/public/heros/leech";
    }
    if (value === "living tribunal") {
        window.location.href = "/mho/public/heros/LivingTribunal";
    }
    if (value === "lizard") {
        window.location.href = "/mho/public/heros/lizard";
    }
    if (value === "lockjaw") {
        window.location.href = "/mho/public/heros/lockjaw";
    }
    if (value === "luke Cage") {
        window.location.href = "/mho/public/heros/lukeCage";
    }
    if (value === "m'baku") {
        window.location.href = "/mho/public/heros/mBaku";
    }
    if (value === "modok") {
        window.location.href = "/mho/public/heros/modok";
    }
    if (value === "magik") {
        window.location.href = "/mho/public/heros/magik";
    }
    if (value === "magneto") {
        window.location.href = "/mho/public/heros/magneto";
    }
    if (value === "mantis") {
        window.location.href = "/mho/public/heros/mantis";
    }
    if (value === "maria Hill") {
        window.location.href = "/mho/public/heros/mariaHill";
    }
    if (value === "master Mold") {
        window.location.href = "/mho/public/heros/masterMold";
    }
    if (value === "maximus") {
        window.location.href = "/mho/public/heros/maximus";
    }
    if (value === "medusa") {
        window.location.href = "/mho/public/heros/medusa";
    }
    if (value === "mighty thor") {
        window.location.href = "/mho/public/heros/mightyThor";
    }
    if (value === "miles morales") {
        window.location.href = "/mho/public/heros/milesMorales";
    }
    if (value === "mister fantastic") {
        window.location.href = "/mho/public/heros/misterFantastic";
    }
    if (value === "mister negative") {
        window.location.href = "/mho/public/heros/misterNegative";
    }
    if (value === "mister sinister") {
        window.location.href = "/mho/public/heros/misterSinister";
    }
    if (value === "misty ignht") {
        window.location.href = "/mho/public/heros/mistyNight";
    }
    if (value === "mojo") {
        window.location.href = "/mho/public/heros/mojo";
    }
    if (value === "moon girl") {
        window.location.href = "/mho/public//heros/moonGirl";
    }
    if (value === "moon knight") {
        window.location.href = "/mho/public/heros/moonKnight";
    }
    if (value === "morbius") {
        window.location.href = "/mho/public/heros/morbius";
    }
    if (value === "morph") {
        window.location.href = "/mho/public/heros/morph";
    }
    if (value === "multiple man") {
        window.location.href = "/mho/public/heros/multipleMan";
    }
    if (value === "mysterio") {
        window.location.href = "/mho/public/heros/mysterio";
    }
    if (value === "mystique") {
        window.location.href = "/mho/public/heros/mystique";
    }
    if (value === "nakia") {
        window.location.href = "/mho/public/heros/nakia";
    }
    if (value === "namor") {
        window.location.href = "/mho/public/heros/namor";
    }
    if (value === "nebula") {
        window.location.href = "/mho/public/heros/nebula";
    }
    if (value === "negasonic") {
        window.location.href = "/mho/public/heros/negasonic";
    }
    if (value === "nick fury") {
        window.location.href = "/mho/public/heros/nickFury";
    }
    if (value === "nightcrawler") {
        window.location.href = "/mho/public/heros/nightcrawler";
    }
    if (value === "nimrod") {
        window.location.href = "/mho/public/heros/nimrod";
    }
    if (value === "okoye") {
        window.location.href = "/mho/public/heros/okoye";
    }
    if (value === "omega red") {
        window.location.href = "/mho/public/heros/omegaRed";
    }
    if (value === "onslaught") {
        window.location.href = "/mho/public/heros/onslaught";
    }
    if (value === "orka") {
        window.location.href = "/mho/public/heros/orka";
    }
    if (value === "patriot") {
        window.location.href = "/mho/public/heros/patriot";
    }
    if (value === "polaris") {
        window.location.href = "/mho/public/heros/polaris";
    }
    if (value === "professor x") {
        window.location.href = "/mho/public/heros/professorX";
    }
    if (value === "psylocke") {
        window.location.href = "/mho/public/heros/psylocke";
    }
    if (value === "punisher") {
        window.location.href = "/mho/public/heros/punisher";
    }
    if (value === "quake") {
        window.location.href = "/mho/public/heros/quake";
    }
    if (value === "quicksilver") {
        window.location.href = "/mho/public/heros/quicksilver";
    }
    if (value === "qunijet") {
        window.location.href = "/mho/public/heros/quinjet";
    }
    if (value === "red skull") {
        window.location.href = "/mho/public/heros/redSkull";
    }
    if (value === "rescue") {
        window.location.href = "/mho/public/heros/rescue";
    }
    if (value === "rhino") {
        window.location.href = "/mho/public/heros/rhino";
    }
    if (value === "rocket raccoon") {
        window.location.href = "/mho/public/heros/rocketRacoon";
    }
    if (value === "rokslide") {
        window.location.href = "/mho/public/heros/rokslide";
    }
    if (value === "rogue") {
        window.location.href = "/mho/public/heros/rogue";
    }
    if (value === "ronan") {
        window.location.href = "/mho/public/heros/ronan";
    }
    if (value === "sabretooth") {
        window.location.href = "/mho/public/heros/sabretooth";
    }
    if (value === "sandman") {
        window.location.href = "/mho/public/heros/sandman";
    }
    if (value === "sauron") {
        window.location.href = "/mho/public/heros/sauron";
    }
    if (value === "scarlet Witch ") {
        window.location.href = "/mho/public/heros/scarletWitch";
    }
    if (value === "scorpion") {
        window.location.href = "/mho/public/heros/scorpion";
    }
    if (value === "sentinel") {
        window.location.href = "/mho/public/heros/sentinel";
    }
    if (value === "sentry") {
        window.location.href = "/mho/public/heros/sentry";
    }
    if (value === "sera") {
        window.location.href = "/mho/public/heros/sera";
    }
    if (value === "shadow king") {
        window.location.href = "/mho/public/heros/shadowKing";
    }
    if (value === "shang-Chi") {
        window.location.href = "/mho/public/heros/shangChi";
    }
    if (value === "shanna") {
        window.location.href = "/mho/public/heros/shanna";
    }
    if (value === "she-hulk") {
        window.location.href = "/mho/public/heros/sheHulk";
    }
    if (value === "shocker") {
        window.location.href = "/mho/public/heros/shocker";
    }
    if (value === "shuri") {
        window.location.href = "/mho/public/heros/shuri";
    }
    if (value === "silk") {
        window.location.href = "/mho/public/heros/silk";
    }
    if (value === "silver surfer") {
        window.location.href = "/mho/public/heros/silverSurfer";
    }
    if (value === "snowguard") {
        window.location.href = "/mho/public/heros/snowguard";
    }
    if (value === "spectrum") {
        window.location.href = "/mho/public/heros/spectrum";
    }
    if (value === "spider-man") {
        window.location.href = "/mho/public/heros/spiderMan";
    }
    if (value === "spider-woman") {
        window.location.href = "/mho/public/heros/spiderWoman";
    }
    if (value === "squirrel girl") {
        window.location.href = "/mho/public/heros/squirrelGirl";
    }
    if (value === "star lord") {
        window.location.href = "/mho/public/heros/starLord";
    }
    if (value === "stature") {
        window.location.href = "/mho/public/heros/stature";
    }
    if (value === "stegron") {
        window.location.href = "/mho/public/heros/stegron";
    }
    if (value === "storm") {
        window.location.href = "/mho/public/heros/storm";
    }
    if (value === "strong guy") {
        window.location.href = "/mho/public/heros/strongGuy";
    }
    if (value === "sunspot") {
        window.location.href = "/mho/public/heros/sunspot";
    }
    if (value === "super skrull") {
        window.location.href = "/mho/public/heros/superSkrull";
    }
    if (value === "swarm") {
        window.location.href = "/mho/public/heros/swarm";
    }
    if (value === "sword Master") {
        window.location.href = "/mho/public/heros/swordMaster";
    }
    if (value === "taskmaster") {
        window.location.href = "/mho/public/heros/taskmaster";
    }
    if (value === "thanos") {
        window.location.href = "/mho/public/heros/thanos";
    }
    if (value === "thing") {
        window.location.href = "/mho/public/heros/thing";
    }
    if (value === "thor") {
        window.location.href = "/mho/public/heros/thor";
    }
    if (value === "titania") {
        window.location.href = "/mho/public/heros/titania";
    }
    if (value === "typhoid mary") {
        window.location.href = "/mho/public/heros/typhoidMary";
    }
    if (value === "uatu") {
        window.location.href = "/mho/public/heros/uatu";
    }
    if (value === "ultron") {
        window.location.href = "/mho/public/heros/ultron";
    }
    if (value === "valkyrie") {
        window.location.href = "/mho/public/heros/valkyrie";
    }
    if (value === "venom") {
        window.location.href = "/mho/public/heros/venom";
    }
    if (value === "viper") {
        window.location.href = "/mho/public/heros/viper";
    }
    if (value === "vision") {
        window.location.href = "/mho/public/heros/vision";
    }
    if (value === "vulture") {
        window.location.href = "/mho/public/heros/vulture";
    }
    if (value === "warpath") {
        window.location.href = "/mho/public/heros/warpath";
    }
    if (value === "wasp") {
        window.location.href = "/mho/public/heros/wasp";
    }
    if (value === "wave") {
        window.location.href = "/mho/public/heros/wave";
    }
    if (value === "white Queen") {
        window.location.href = "/mho/public/heros/whiteQueen";
    }
    if (value === "white Tiger") {
        window.location.href = "/mho/public/heros/whiteTiger";
    }
    if (value === "wolfsbane") {
        window.location.href = "/mho/public/heros/wolfsbane";
    }
    if (value === "wolwerine") {
        window.location.href = "/mho/public/heros/wolwerine";
    }
    if (value === "wong") {
        window.location.href = "/mho/public/heros/wong";
    }
    if (value === "yellowjacket") {
        window.location.href = "/mho/public/heros/yellowjacket";
    }
    if (value === "yondu") {
        window.location.href = "/mho/public/heros/yondu";
    }
    if (value === "zabu") {
        window.location.href = "/mho/public/heros/zabu";
    }
    if (value === "zero") {
        window.location.href = "/mho/public/heros/zero";
    }

    removeElements();
}

function removeElements() {
    let items = document.querySelectorAll(".list-items");
    items.forEach((item) => {
        item.remove();
    });
}

input.addEventListener("keyup", (e) => {
    if (e.keyCode === 13) {
        let inputValue = input.value.trim();
        if (inputValue !== "") {
            redirectToPage(inputValue);
        }
    }
});
