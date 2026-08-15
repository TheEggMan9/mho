// Récupérer mes 3 blocks div HTML (le header, la div questions et la div result)
let header_screen = document.getElementById("header_screen");
let questions_screen = document.getElementById("questions_screen");
let result_screen = document.getElementById("result_screen");

// Etablir la fonction Quiz permettant d'ajouter des questions et de voir combien de bonnes réponse le user a
function Quiz() {
    this.questions = [];
    this.nbrCorrects = 0;
    this.indexCurrentQuestion = 0;

    // Ajouts de questions
    this.addQuestion = function (question) {
        this.questions.push(question);
    };

    // Fonction servant à passer à la question suivante s'il y en a une, sinon ça affiche le résultat final
    this.displayCurrentQuestion = function () {
        if (this.indexCurrentQuestion < this.questions.length) {
            this.questions[this.indexCurrentQuestion].getElement(
                this.indexCurrentQuestion + 1,
                this.questions.length,
            );
        } else {
            questions_screen.style.display = "none";
            document.querySelector(".question-container").style.display =
                "none";

            let NbrCorrectUser = document.querySelector("#nbrCorrects");
            NbrCorrectUser.textContent = quiz.nbrCorrects;
            result_screen.style.display = "block";
        }
    };
}

// Fonction Question permettant de créer les questions avec le titre, les réponses et la réponse correcte
function Question(title, answers, correctAnswers) {
    ((this.title = title),
        (this.answers = answers),
        (this.correctAnswers = correctAnswers),
        // Mise en place et structuration du HTML et CSS pour mes questions
        (this.getElement = function (indexQuestion, nbrOfQuestions) {
            let questionTitle = document.createElement("h3");
            questionTitle.classList.add("title_questions");
            questionTitle.textContent = this.title;

            questions_screen.append(questionTitle);

            let questionAnswer = document.createElement("ul");
            questionAnswer.classList.add("list_questions");

            this.answers.forEach((answer, index) => {
                let answerElement = document.createElement("li");
                answerElement.classList.add("answers");
                answerElement.textContent = answer;
                answerElement.id = index + 1;
                answerElement.addEventListener("click", this.checkAnswer);

                questionAnswer.append(answerElement);
            });

            let questionNumber = document.createElement("h4");
            questionNumber.classList.add("avancement_question");
            questionNumber.textContent =
                "Questions : " + indexQuestion + "/" + nbrOfQuestions;

            questions_screen.append(questionNumber);

            questions_screen.append(questionAnswer);
        }));

    ((this.addAnswer = function (answer) {
        this.answers.push(answer);
    }),
        (this.checkAnswer = (e) => {
            let answerSelect = e.target;
            if (this.isCorrectAnswer(answerSelect.id)) {
                answerSelect.classList.add("answersCorrect");
                quiz.nbrCorrects++;
            } else {
                answerSelect.classList.add("answersWrong");
                let RightAnswers = this.correctAnswers.map((index) =>
                    document.getElementById(index),
                );
                RightAnswers.forEach((RightAnswer) => {
                    RightAnswer.classList.add("answersCorrect");
                });
            }

            const allCorrectAnswersSelected = this.correctAnswers.every(
                (index) => {
                    return document
                        .getElementById(index)
                        .classList.contains("answersCorrect");
                },
            );

            if (allCorrectAnswersSelected) {
                setTimeout(function () {
                    questions_screen.textContent = "";
                    quiz.indexCurrentQuestion++;
                    quiz.displayCurrentQuestion();
                }, 2000);
            }
        }));

    this.isCorrectAnswer = function (answerUser) {
        return this.correctAnswers.includes(parseInt(answerUser));
    };
}
// ============================================================
// BANQUE DE 50 QUESTIONS - NIVEAU MOYEN
// Format : { title, answers: [3 propositions], correct: index 0-based }
// ============================================================
const questionBank = [
    {
        title: "À quelle équipe appartient Super Skrull ?",
        answers: ["La tribu Jabari", "Le S.H.I.E.L.D.", "L'Empire Skrull"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Klaw ?",
        answers: ["Les New Mutants", "Aucune équipe fixe", "L'Empire Kree"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Onslaught ?",
        answers: [
            "Fusion psychique de Xavier et Magneto",
            "Adam Warlock",
            "Roderick Kingsley",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Mystique ?",
        answers: [
            "Ses griffes et son facteur guérisseur",
            "La manipulation cellulaire absolue",
            "La métamorphose totale",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Ebony Maw ?",
        answers: [
            "Une persuasion psychique redoutable",
            "Une intangibilité technologique",
            "Charger des objets d'énergie cinétique",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Iron Lad ?",
        answers: [
            "Le Marteau Cosmique kree",
            "La possession psychique astrale",
            "Une armure inspirée de Kang",
        ],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Baron Mordo ?",
        answers: ["Lorna Dane", "Karl Mordo", "America Chavez"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Kang ?",
        answers: [
            "Voler grâce à ses ailes naturelles",
            "Une technologie du futur et le voyage temporel",
            "Manier le pouvoir de Mjolnir",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Ghost Rider ?",
        answers: [
            "Voler grâce à ses ailes naturelles",
            "Une force et une régénération reptiliennes",
            "Le pacte avec Mephisto",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Rhino ?",
        answers: ["Spider-Man", "Rand Enterprises corrupteurs", "Ultron"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Quake ?",
        answers: ["Le S.H.I.E.L.D.", "Les Gardiens de la Galaxie", "A.I.M."],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Hela ?",
        answers: [
            "Régner sur le royaume des morts",
            "Une force sous-marine colossale",
            "Le pacte avec Mephisto",
        ],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Mbaku ?",
        answers: ["M'Baku", "James Rhodes", "Ebony Maw"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Odin ?",
        answers: ["Roberto da Costa", "Frank Castle", "Odin Borson"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Deathlock ?",
        answers: ["Apocalypse", "Roxxon", "Beatrice Hunter"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Punisher ?",
        answers: [
            "Son arsenal d'armes à feu",
            "Une force surhumaine par potion mystique",
            "Le contrôle de la météo",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Magik ?",
        answers: ["Les New Mutants", "Les Midnight Sons", "X-Force"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Scorpion ?",
        answers: ["Peggy Carter", "Erik Lehnsherr", "Mac Gargan"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Mister Sinister ?",
        answers: [
            "Une force sous-marine colossale",
            "Se téléporter avec ses compagnons",
            "La manipulation génétique et le clonage",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Crystal ?",
        answers: ["Aucune équipe fixe", "L'Ordre Noir", "Les Inhumains"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Rogue ?",
        answers: [
            "Convertir le son en lumière",
            "Absorber pouvoirs et souvenirs par contact",
            "Un bras bionique surpuissant",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Omega Red ?",
        answers: [
            "La maîtrise parfaite des arts martiaux",
            "La manipulation génétique et le clonage",
            "Des tentacules de carbonadium",
        ],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Bishop ?",
        answers: ["Lucas Bishop", "Pietro Maximoff", "Daisy Johnson"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Havok ?",
        answers: [
            "Transformer son corps en sable",
            "Une magie démoniaque",
            "Émettre des rayons de plasma",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Shadow King ?",
        answers: ["Black Bolt", "Les X-Men", "Professeur X"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Crâne rouge ?",
        answers: [
            "Une doctrine nazie et un génie tactique",
            "Ses rayons oculaires",
            "Une sorcellerie ancienne",
        ],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Dracula ?",
        answers: ["Lorna Dane", "James Rhodes", "Vlad Dracula"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Sandman ?",
        answers: ["Fitzroy", "Spider-Man", "Dracula"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Rocket Racoon ?",
        answers: ["Dracula", "Thanos", "Blade"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Crystal ?",
        answers: ["Maximus", "Iron Man", "Hydra"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Sif ?",
        answers: [
            "Une maîtrise du combat asgardien",
            "Ses pistolets à éléments",
            "Générer de la malchance autour d'elle",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Scorpion ?",
        answers: [
            "Des illusions et effets spéciaux",
            "Une magie de séduction et d'illusion asgardienne",
            "Une queue mécanique venimeuse",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Misty Knight ?",
        answers: [
            "Rand Enterprises corrupteurs",
            "Captain America",
            "Fantastic Four",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Bishop ?",
        answers: ["Bastion", "Enchantress", "Fitzroy"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Kingpin ?",
        answers: ["Daredevil", "Namor", "Magneto"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Odin ?",
        answers: [
            "Une puissance divine asgardienne",
            "Créer des plasmoïdes lumineux",
            "Une armure inspirée de Kang",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Polaris ?",
        answers: ["Les X-Men", "Le S.H.I.E.L.D.", "Aucune équipe fixe"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Dazzler ?",
        answers: [
            "Une force vampirique ancestrale",
            "Convertir le son en lumière",
            "Une précision de tir absolue",
        ],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Sunspot ?",
        answers: ["Lucas Bishop", "Vlad Dracula", "Roberto da Costa"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Dagger ?",
        answers: [
            "Ses talents de stratège et d'agent",
            "Projeter des poignards de lumière",
            "Une magie démoniaque",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Magneto ?",
        answers: ["Professeur X", "Cottonmouth", "Ronan"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Angel ?",
        answers: ["Captain America", "Les X-Men", "Apocalypse"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Iron Lad ?",
        answers: ["Doctor Doom", "T-Ray", "Kang"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Nightcrawler ?",
        answers: ["Elektra Natchios", "Ebony Maw", "Kurt Wagner"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Rhino ?",
        answers: ["Les X-Men", "Aucune équipe fixe", "Dora Milaje"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Living Tribunal ?",
        answers: ["A.I.M.", "Aucune équipe fixe", "Les Gardiens de la Galaxie"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Hobgoblin ?",
        answers: ["Malice", "Spider-Man", "Captain America"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Bishop ?",
        answers: ["Les X-Men", "Hydra", "Les New Mutants"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Black Bolt ?",
        answers: ["Les New Mutants", "Les Inhumains", "Les Thunderbolts"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Abomination ?",
        answers: ["Black Bolt", "Hulk", "Mister Sinister"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Doctor Octopus ?",
        answers: ["Michael Morbius", "America Chavez", "Otto Octavius"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Nick Fury ?",
        answers: ["L'Empire Skrull", "Le S.H.I.E.L.D.", "X-Force"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Nick Fury ?",
        answers: ["Attuma", "Killmonger", "Hydra"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Iron Lad ?",
        answers: ["Les Elders de l'Univers", "Hydra", "Young Avengers"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Sabretooth ?",
        answers: [
            "Un katana psychique",
            "Ses griffes et son facteur guérisseur",
            "Un intellect surdéveloppé et des rayons mentaux",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Omega Red ?",
        answers: ["Inventor", "Wolverine", "Malekith"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Onslaught ?",
        answers: [
            "La force du dieu-singe Gorilla blanc",
            "Une puissance psionique dévastatrice",
            "Générer des ondes sismiques",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Sharon Carter ?",
        answers: [
            "Absorber les propriétés de la matière touchée",
            "Ses talents d'espionne du S.H.I.E.L.D.",
            "Une magie de séduction et d'illusion asgardienne",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Maximus ?",
        answers: [
            "Une empathie psychique et des arts martiaux",
            "Un génie manipulateur",
            "Transformer son corps en métal organique",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Storm ?",
        answers: [
            "Un corps constitué de son vibranium",
            "Absorber l'énergie vitale d'autrui",
            "Le contrôle de la météo",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Kraven ?",
        answers: [
            "Contrôler une dimension télévisuelle",
            "Des tentacules de carbonadium",
            "Une force surhumaine par potion mystique",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Angel ?",
        answers: ["Les X-Men", "Young Avengers", "Le S.H.I.E.L.D."],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Mbaku ?",
        answers: [
            "Contrôler ses cheveux préhensiles",
            "Un intellect surdéveloppé et des rayons mentaux",
            "La force du dieu-singe Gorilla blanc",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Psylocke ?",
        answers: [
            "Une force vampirique ancestrale",
            "Son arc et sa précision",
            "Un katana psychique",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Maria Hill ?",
        answers: [
            "Une force et une régénération gamma",
            "Absorber l'énergie vitale d'autrui",
            "Ses talents de commandement du S.H.I.E.L.D.",
        ],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Bullseye ?",
        answers: ["Lester", "Peter Quill", "Piotr Rasputin"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Moon Knight ?",
        answers: [
            "Transformer son corps en métal organique",
            "La bénédiction du dieu Khonshu",
            "Une maîtrise de la Savage Land",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Gambit ?",
        answers: ["Les Avengers", "Mister Sinister", "Kingpin"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Hobgoblin ?",
        answers: ["Aucune équipe fixe", "Les Thunderbolts", "La tribu Jabari"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Odin ?",
        answers: ["Aucune équipe fixe", "L'Empire Skrull", "La tribu Jabari"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Lizard ?",
        answers: ["Daredevil", "Spider-Man", "Magneto"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Apocalypse ?",
        answers: ["Kingpin", "Professeur X", "The Hood"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Omega Red ?",
        answers: [
            "Les Avengers",
            "Aucune équipe fixe",
            "Les Gardiens de la Galaxie",
        ],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Gambit ?",
        answers: ["Otto Octavius", "Remy LeBeau", "Johnny Blaze"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Misty Knight ?",
        answers: [
            "Un bras bionique surpuissant",
            "Contrôler la probabilité en sa faveur",
            "L'énergie cosmique de la Force Vivante",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Absorbing Man ?",
        answers: ["Killmonger", "Mojo", "Thor"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Arnim Zola ?",
        answers: ["L'Empire Kree", "Les Thunderbolts", "Hydra"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Medusa ?",
        answers: [
            "Un bras bionique surpuissant",
            "Contrôler ses cheveux préhensiles",
            "Le pacte avec Mephisto",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Electro ?",
        answers: ["Thor", "Spider-Man", "Surtur"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Omega Red ?",
        answers: ["Roberto da Costa", "Jubilation Lee", "Arkady Rossovich"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Gambit ?",
        answers: [
            "Projeter des poignards de lumière",
            "Charger des objets d'énergie cinétique",
            "Reproduire les mouvements observés",
        ],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Star Lord ?",
        answers: ["Remy LeBeau", "Neena Thurman", "Peter Quill"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Angel ?",
        answers: [
            "Voler grâce à ses ailes naturelles",
            "Régner sur le royaume des morts",
            "Son intelligence tactique",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Mister Sinister ?",
        answers: ["Les Avengers", "Mister Sinister", "Cyclope"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Ghost Rider ?",
        answers: ["Mephisto", "Roxxon", "Namor"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Morbius ?",
        answers: ["Blade", "Spider-Man", "Maximus"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Collector ?",
        answers: [
            "Une voix capable de tout détruire",
            "Une immortalité et un savoir cosmique",
            "Voler et respirer sous l'eau",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Kamala Khan ?",
        answers: [
            "Une force sous-marine colossale",
            "Le Tellure et l'épée des âmes",
            "Étirer et grossir son corps",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Mojo ?",
        answers: ["Longshot", "Shadow King", "Selene"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Baron Zemo ?",
        answers: [
            "Charger des objets d'énergie cinétique",
            "Sa force physique colossale",
            "Son intelligence tactique",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Shang-Chi ?",
        answers: ["Aucune équipe fixe", "La Confrérie", "A.I.M."],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Blade ?",
        answers: ["Kingpin", "Basilisk", "Dracula"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Galactus ?",
        answers: ["L'Empire Kree", "Aucune équipe fixe", "Les Defenders"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Crâne rouge ?",
        answers: ["Maximus", "Les Avengers", "Captain America"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Living Tribunal ?",
        answers: ["Shang-Chi", "Nathaniel Essex", "The Living Tribunal"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Black Cat ?",
        answers: ["Hydra", "Aucune équipe fixe", "L'Empire Skrull"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Rhino ?",
        answers: ["Alison Blaire", "Illyana Rasputin", "Aleksei Sytsevich"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Bullseye ?",
        answers: [
            "Transformer son corps en métal organique",
            "Une précision de tir absolue",
            "Contrôler les quatre éléments",
        ],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Shocker ?",
        answers: ["Herman Schultz", "Nathan Summers", "Helmut Zemo"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Enchantress ?",
        answers: [
            "Traverser la matière solide",
            "Une magie de séduction et d'illusion asgardienne",
            "Une technologie du futur et le voyage temporel",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Psylocke ?",
        answers: ["L'Ordre Noir", "Les X-Men", "L'Empire Skrull"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Dazzler ?",
        answers: ["Le S.H.I.E.L.D.", "Les Gardiens de la Galaxie", "Les X-Men"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Shuri ?",
        answers: ["Les Avengers", "Aucune équipe fixe", "La tribu Jabari"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Leader ?",
        answers: ["Johann Schmidt", "Samuel Sterns", "Kurt Wagner"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Iron Lad ?",
        answers: ["Nathaniel Richards", "Elektra Natchios", "Johnny Blaze"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Phil Coulson ?",
        answers: [
            "Ses talents de stratège et d'agent",
            "Son armure lourdement armée",
            "La télépathie",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Kraven ?",
        answers: ["Aucune équipe fixe", "Les Inhumains", "Young Avengers"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Deadpool ?",
        answers: [
            "Manipuler et absorber l'électricité",
            "Le contrôle du métal",
            "Son facteur guérisseur",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Shocker ?",
        answers: ["Aucune équipe fixe", "Les Quatre Cavaliers", "Les Avengers"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Kamala Khan ?",
        answers: ["Les Avengers", "Les Thunderbolts", "Le S.H.I.E.L.D."],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Storm ?",
        answers: ["Les Thunderbolts", "Les X-Men", "X-Force"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Sif ?",
        answers: ["Wolverine", "Enchantress", "Kang"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Electro ?",
        answers: ["Les Quatre Cavaliers", "Hydra", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Daredevil ?",
        answers: ["Anthony Masters", "Matt Murdock", "Blackagar Boltagon"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Magik ?",
        answers: ["N'Jadaka", "Illyana Rasputin", "Neena Thurman"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Quicksilver ?",
        answers: [
            "Sa super-vitesse",
            "La maîtrise parfaite des arts martiaux",
            "Une doctrine nazie et un génie tactique",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Sauron ?",
        answers: ["Juggernaut", "Le Void", "Les X-Men"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Okoye ?",
        answers: [
            "La maîtrise parfaite des arts martiaux",
            "Une force et une régénération reptiliennes",
            "Une maîtrise martiale d'élite",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Crossbones ?",
        answers: [
            "Ses talents de mercenaire",
            "Contrôler les quatre éléments",
            "Un génie scientifique wakandais",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de America Chavez ?",
        answers: ["Beatrice Hunter", "Le père de Tandy", "Selene"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Domino ?",
        answers: [
            "Ses pistolets à éléments",
            "Une maîtrise de la Savage Land",
            "Contrôler la probabilité en sa faveur",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Ronan ?",
        answers: [
            "Le Marteau Cosmique kree",
            "La manipulation cellulaire absolue",
            "La force mystique de Cyttorak",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Misty Knight ?",
        answers: ["Les Thunderbolts", "Les Defenders", "Les Inhumains"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Dracula ?",
        answers: [
            "Une puissance psionique dévastatrice",
            "Manipuler et absorber l'électricité",
            "Une force vampirique ancestrale",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Kitty Pryde ?",
        answers: [
            "Une magie démoniaque",
            "Traverser la matière solide",
            "Émettre des rayons de plasma",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Phil Coulson ?",
        answers: ["Blade", "Hydra", "Ghost Rider"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Enchantress ?",
        answers: [
            "Les Gardiens de la Galaxie",
            "Aucune équipe fixe",
            "Les Thunderbolts",
        ],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Ronan ?",
        answers: ["Carl Creel", "Ronan l'Accusateur", "Riri Williams"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Moon Knight ?",
        answers: ["Wolverine", "Jigsaw", "Bushman"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Enchantress ?",
        answers: ["Mephisto", "Rand Enterprises corrupteurs", "Thor"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Charles Xavier ?",
        answers: ["L'Empire Kree", "La tribu Jabari", "Les X-Men"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Deathlock ?",
        answers: [
            "Aucune équipe fixe",
            "Les Gardiens de la Galaxie",
            "Dora Milaje",
        ],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Carnage ?",
        answers: ["Kevin Plunder", "Cletus Kasady", "Otto Octavius"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Quake ?",
        answers: ["Les Avengers", "Hydra", "Cyclope"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Titania ?",
        answers: ["Karl Mordo", "Mary MacPherran", "Namor McKenzie"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Sunspot ?",
        answers: [
            "Ses sens surdéveloppés",
            "Absorber l'énergie solaire",
            "Ses pistolets à éléments",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Jubilee ?",
        answers: ["Malice", "Bastion", "Ghost Rider"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Dracula ?",
        answers: ["Aucune équipe fixe", "L'Empire Kree", "Hydra"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Forge ?",
        answers: ["Les New Mutants", "Les X-Men", "Les Midnight Sons"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Okoye ?",
        answers: [
            "Les Elders de l'Univers",
            "Les Quatre Cavaliers",
            "Dora Milaje",
        ],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Medusa ?",
        answers: ["Okoye", "Scott Summers", "Medusalith Boltagon"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Apocalypse ?",
        answers: ["A.I.M.", "Les Elders de l'Univers", "Les Quatre Cavaliers"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Killmonger ?",
        answers: ["Cottonmouth", "Ord", "Black Panther"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Sentry ?",
        answers: ["Shuri", "Robert Reynolds", "Jane Foster"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Ironheart ?",
        answers: ["Doreen Green", "Miles Morales", "Riri Williams"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Domino ?",
        answers: ["Rogue", "Beatrice Hunter", "Hydra"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Mephisto ?",
        answers: ["Ghost Rider", "Doctor Doom", "Basilisk"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Squirrel Girl ?",
        answers: ["Eric Brooks", "Pietro Maximoff", "Doreen Green"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Ebony Maw ?",
        answers: ["Doctor Strange", "Bushman", "Dracula"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Crossbones ?",
        answers: ["Aucune équipe fixe", "X-Force", "Young Avengers"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Moon Knight ?",
        answers: [
            "X-Force",
            "Aucune équipe fixe",
            "Les Gardiens de la Galaxie",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Mystique ?",
        answers: ["Les Avengers", "Les X-Men", "La Confrérie"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Elektra ?",
        answers: ["Elektra Natchios", "Arkady Rossovich", "Cletus Kasady"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Sabretooth ?",
        answers: ["Victor Creed", "Nick Fury", "Mojo"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Juggernaut ?",
        answers: ["A.I.M.", "Hydra", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Deadpool ?",
        answers: ["La tribu Jabari", "Young Avengers", "X-Force"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Hobgoblin ?",
        answers: [
            "La force du dieu-singe Gorilla blanc",
            "Un équipement inspiré du Bouffon Vert",
            "Une force sous-marine colossale",
        ],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Black Cat ?",
        answers: ["Shang-Chi", "Felicia Hardy", "Sharon Carter"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Shocker ?",
        answers: [
            "La télékinésie et son bras bionique",
            "La possession psychique astrale",
            "Des gantelets à ondes de choc",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Ironheart ?",
        answers: ["Les Avengers", "Hydra", "Young Avengers"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Squirrel Girl ?",
        answers: ["X-Force", "Les Avengers", "La Confrérie"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Miles Morales ?",
        answers: [
            "Ses toiles et son camouflage",
            "Créer des plasmoïdes lumineux",
            "Une magie de séduction et d'illusion asgardienne",
        ],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Blade ?",
        answers: ["Eric Brooks", "Aleksei Sytsevich", "Karl Mordo"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Attuma ?",
        answers: ["Namor", "Rand Enterprises corrupteurs", "Prowler"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Shadow King ?",
        answers: ["Amahl Farouk", "Nathan Summers", "Aleksei Sytsevich"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Agatha Harkness ?",
        answers: [
            "Une sorcellerie ancienne",
            "Une force sous-marine colossale",
            "Juger l'équilibre cosmique du multivers",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Peggy Carter ?",
        answers: ["Hydra", "Thanos", "Bastion"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Ka-Zar ?",
        answers: ["Beatrice Hunter", "Venom", "Basilisk"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Mantis ?",
        answers: ["Les X-Men", "Young Avengers", "Les Gardiens de la Galaxie"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Baron Zemo ?",
        answers: ["Apocalypse", "Doctor Strange", "Captain America"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Absorbing Man ?",
        answers: ["Elektra Natchios", "Wade Wilson", "Carl Creel"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Rocket Racoon ?",
        answers: ["Betsy Braddock", "Rocket Raccoon", "Ronan l'Accusateur"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Leader ?",
        answers: [
            "Ses sens surdéveloppés",
            "Une intelligence surhumaine gamma",
            "Ses toiles et son camouflage",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Ironheart ?",
        answers: ["Fitzroy", "T-Ray", "The Hood"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Okoye ?",
        answers: ["Daredevil", "Killmonger", "Bastion"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Odin ?",
        answers: ["Fantastic Four", "Surtur", "Malekith"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Rhino ?",
        answers: [
            "Une force et une résistance blindée",
            "Son facteur guérisseur",
            "Des tentacules de carbonadium",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Doctor Octopus ?",
        answers: [
            "Se téléporter par bond",
            "Une force de vampire sans en avoir les faiblesses",
            "Ses quatre bras mécaniques",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Ironheart ?",
        answers: [
            "Une armure conçue par elle-même",
            "Absorber l'énergie vitale d'autrui",
            "Convertir le son en lumière",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Kingpin ?",
        answers: [
            "Un génie inventif surhumain",
            "Sa direction du S.H.I.E.L.D.",
            "Sa force physique colossale",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de America Chavez ?",
        answers: [
            "Transférer sa conscience dans des corps synthétiques",
            "La magie mystique noire",
            "Créer des portails interdimensionnels",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Hela ?",
        answers: ["Hydra", "Les Defenders", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Baron Zemo ?",
        answers: [
            "Les Thunderbolts",
            "La tribu Jabari",
            "Les Quatre Cavaliers",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Domino ?",
        answers: ["Aucune équipe fixe", "Hydra", "X-Force"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Sentry ?",
        answers: [
            "Une magie de séduction et d'illusion asgardienne",
            "Le pouvoir d'un million de soleils",
            "Absorber et renvoyer l'énergie",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Shang-Chi ?",
        answers: ["Selene", "Zheng Zu", "Doctor Doom"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Mephisto ?",
        answers: ["X-Force", "Aucune équipe fixe", "La Confrérie"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Charles Xavier ?",
        answers: [
            "Ses talents de mercenaire",
            "La télépathie",
            "Manier le pouvoir de Mjolnir",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Absorbing Man ?",
        answers: [
            "La Confrérie",
            "Aucune équipe fixe",
            "Les Elders de l'Univers",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Dazzler ?",
        answers: ["Rogue", "Daredevil", "Doctor Doom"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Peggy Carter ?",
        answers: ["Le S.H.I.E.L.D.", "Les Thunderbolts", "L'Empire Kree"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Baron Zemo ?",
        answers: ["Frank Castle", "Helmut Zemo", "Amahl Farouk"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Quicksilver ?",
        answers: ["Quentin Beck", "Pietro Maximoff", "N'Jadaka"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Galactus ?",
        answers: ["Galan", "Lorna Dane", "Rocket Raccoon"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Morbius ?",
        answers: [
            "Une force vampirique due à une expérience scientifique",
            "Absorber l'énergie vitale d'autrui",
            "Un entraînement militaire d'élite",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Kitty Pryde ?",
        answers: ["Les Thunderbolts", "Les X-Men", "Le S.H.I.E.L.D."],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Juggernaut ?",
        answers: ["James Rhodes", "Mojo", "Cain Marko"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Dagger ?",
        answers: ["Les Defenders", "Young Avengers", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Namor ?",
        answers: ["Attuma", "Kang", "Justin Hammer"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Jubilee ?",
        answers: [
            "La force mystique de Cyttorak",
            "Créer des plasmoïdes lumineux",
            "Se téléporter par bond",
        ],
        correct: 1,
    },
];
// Mélange un tableau (Fisher-Yates), retourne une copie
function shuffleArray(array) {
    const copy = array.slice();
    for (let i = copy.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [copy[i], copy[j]] = [copy[j], copy[i]];
    }
    return copy;
}

// On va récupérer notre fonction Quiz pour implémenter ses données dans ses arguments
let quiz = new Quiz();

// Sélectionne 5 questions aléatoires parmi les 50, et mélange l'ordre des réponses
// de chacune (sinon la bonne réponse resterait toujours à la même position que dans la banque)
const selectedQuestions = shuffleArray(questionBank).slice(0, 5);

selectedQuestions.forEach((q) => {
    const answersWithIndex = q.answers.map((answer, i) => ({
        answer,
        wasCorrect: i === q.correct,
    }));
    const shuffledAnswers = shuffleArray(answersWithIndex);

    const newAnswers = shuffledAnswers.map((item) => item.answer);
    const newCorrectIndex =
        shuffledAnswers.findIndex((item) => item.wasCorrect) + 1;

    quiz.addQuestion(new Question(q.title, newAnswers, [newCorrectIndex]));
});

// Ici je suis obligé de passer par un querySelectroAll pour avoir accès à la fonction ForEach (car le getElement ne le possède pas)
let NbrQuestion = document.querySelectorAll(".nbrQuestion");

NbrQuestion.forEach(function (NbrQuestion) {
    NbrQuestion.textContent = quiz.questions.length;
});

// Fonction servant à lancer le questionnaire en enlevant la page d'introduction du quiz et en mettant la première question
function startQuestions() {
    header_screen.style.display = "none";
    questions_screen.style.display = "block";
    document.querySelector(".question-container").style.display = "block";
    quiz.displayCurrentQuestion();
}

// Récupérer le bouton dans mon html avec le ElementById car le ElementsByClassName n'a pas le addEventListener)
let btn_start = document.getElementById("btn_start");
btn_start.addEventListener("click", startQuestions);
