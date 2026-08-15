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
// BANQUE DE 50 QUESTIONS - NIVEAU FACILE
// Format : { title, answers: [3 propositions], correct: index 0-based }
// ============================================================
const questionBank = [
    {
        title: "Quel est le vrai nom de Colossus ?",
        answers: ["Marc Spector", "Piotr Rasputin", "Reed Richards"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Scarlet Witch ?",
        answers: ["Bucky Barnes", "Danny Rand", "Wanda Maximoff"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Wolverine ?",
        answers: ["Les X-Men", "La Confrérie", "Les Avengers"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Captain America ?",
        answers: ["Steve Rogers", "Remy LeBeau", "Wilson Fisk"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Gambit ?",
        answers: [
            "Son corps élastique",
            "Sa super-vitesse",
            "Ses cartes à jouer explosives",
        ],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Captain Marvel ?",
        answers: ["Thor Odinson", "Clint Barton", "Carol Danvers"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Cyclope ?",
        answers: ["Wanda Maximoff", "Scott Summers", "Eddie Brock"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Winter Soldier ?",
        answers: ["Thor", "Aleksander Lukin", "Dormammu"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Venom ?",
        answers: [
            "Le symbiote",
            "Le contrôle du feu",
            "Sa peau rocheuse incassable",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Jessica Jones ?",
        answers: [
            "Son énergie du Corps Nova",
            "Sa force surhumaine",
            "Ses cartes à jouer explosives",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Loki ?",
        answers: [
            "Son planeur explosif",
            "Sa peau incassable",
            "Les illusions et la magie",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Silver Surfer ?",
        answers: ["Ses armes bricolées", "Sa planche cosmique", "Le symbiote"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Deadpool ?",
        answers: [
            "Sa super-vitesse",
            "Son facteur guérisseur",
            "Les particules Pym",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Winter Soldier ?",
        answers: [
            "Le contrôle de la glace",
            "Son bras cybernétique",
            "Sa force surhumaine verte",
        ],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Kingpin ?",
        answers: ["Bucky Barnes", "Wilson Fisk", "T'Challa"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Human Torch ?",
        answers: ["Scott Lang", "Scott Summers", "Johnny Storm"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Gamora ?",
        answers: ["Doctor Doom", "Thanos", "Ronan"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Moon Knight ?",
        answers: ["Prowler", "Bushman", "Mandarin"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Jessica Jones ?",
        answers: ["Les Defenders", "Les Avengers", "Le Corps Nova"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Star-Lord ?",
        answers: ["Frank Castle", "Drax le Destructeur", "Peter Quill"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Bullseye ?",
        answers: ["Thor Odinson", "Groot", "Lester"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Ant-Man ?",
        answers: ["Les Avengers", "X-Force", "Les Gardiens de la Galaxie"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Nightcrawler ?",
        answers: ["Le Corps Nova", "Les X-Men", "Les Avengers"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Thor ?",
        answers: ["Aucune équipe fixe", "Les Avengers", "Les X-Men"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Iceman ?",
        answers: ["Les X-Men", "Aucune équipe fixe", "X-Force"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Falcon ?",
        answers: ["Taskmaster", "Thor", "Killmonger"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Nebula ?",
        answers: ["Yon-Rogg", "Thanos", "Drax"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Spider-Man ?",
        answers: ["Thor", "Green Goblin", "Killmonger"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Luke Cage ?",
        answers: [
            "Son armure lourdement armée",
            "Ses cartes à jouer explosives",
            "Sa peau incassable",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient She-Hulk ?",
        answers: ["X-Force", "La Confrérie", "Les Avengers"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Jean Grey ?",
        answers: [
            "Les particules Pym",
            "Sa peau incassable",
            "La télékinésie et la télépathie",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Black Widow ?",
        answers: ["Bullseye", "Magneto", "Taskmaster"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Iceman ?",
        answers: ["Wade Wilson", "Bobby Drake", "Wilson Fisk"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Magneto ?",
        answers: ["Norman Osborn", "Marc Spector", "Erik Lehnsherr"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Daredevil ?",
        answers: ["Thor", "Kingpin", "Thanos"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Human Torch ?",
        answers: ["Aucune équipe fixe", "Les Avengers", "Les Fantastic Four"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Hawkeye ?",
        answers: [
            "Ses talents de guerrière",
            "Son arc et ses flèches",
            "Sa force et son agilité",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient The Thing ?",
        answers: ["Aucune équipe fixe", "Le Corps Nova", "Les Fantastic Four"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Elektra ?",
        answers: ["Elektra Natchios", "Norrin Radd", "T'Challa"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Vision ?",
        answers: [
            "Sa manipulation de la densité corporelle",
            "La métamorphose",
            "Sa force et son agilité",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Luke Cage ?",
        answers: ["La Confrérie", "Les Defenders", "Le S.H.I.E.L.D."],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Drax ?",
        answers: ["Cottonmouth", "Mister Sinister", "Thanos"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Quicksilver ?",
        answers: ["Aleksander Lukin", "Ultron", "Bushman"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Nightcrawler ?",
        answers: ["Jessica Jones", "Wanda Maximoff", "Kurt Wagner"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Storm ?",
        answers: ["Les Avengers", "Les X-Men", "Les Defenders"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Kingpin ?",
        answers: [
            "Le S.H.I.E.L.D.",
            "Aucune équipe fixe",
            "Les Fantastic Four",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Thor ?",
        answers: [
            "La télékinésie et la télépathie",
            "Ses ailes mécaniques",
            "Son marteau Mjolnir",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Human Torch ?",
        answers: [
            "Ses griffes en adamantium",
            "La télépathie",
            "Le contrôle du feu",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Jean Grey ?",
        answers: ["Loki", "Mister Sinister", "Shadow King"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Mister Fantastic ?",
        answers: ["Eddie Brock", "Frank Castle", "Reed Richards"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Groot ?",
        answers: [
            "Les Avengers",
            "Les Defenders",
            "Les Gardiens de la Galaxie",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Silver Surfer ?",
        answers: ["Mister Sinister", "Galactus", "Shadow King"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Punisher ?",
        answers: [
            "Les illusions et la magie",
            "Sa super-vitesse",
            "Son arsenal d'armes à feu",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Invisible Woman ?",
        answers: [
            "L'invisibilité",
            "Sa direction du S.H.I.E.L.D.",
            "Sa planche cosmique",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Rocket ?",
        answers: ["Sa force brute", "Ses armes bricolées", "La télépathie"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Vision ?",
        answers: ["Les Avengers", "Le Corps Nova", "Le S.H.I.E.L.D."],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Doctor Strange ?",
        answers: ["Natasha Romanoff", "Stephen Strange", "Ororo Munroe"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Professeur X ?",
        answers: ["Les Fantastic Four", "X-Force", "Les X-Men"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Magneto ?",
        answers: [
            "Sa planche cosmique",
            "Son arc et ses flèches",
            "Le contrôle du métal",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Gamora ?",
        answers: [
            "Les Avengers",
            "Les Gardiens de la Galaxie",
            "Le Corps Nova",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Winter Soldier ?",
        answers: ["Les Avengers", "Les X-Men", "Le S.H.I.E.L.D."],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Punisher ?",
        answers: ["Reed Richards", "Frank Castle", "Jean Grey"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Iron Man ?",
        answers: [
            "Le contrôle de la glace",
            "Son armure high-tech",
            "Les illusions et la magie",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Storm ?",
        answers: ["Cottonmouth", "Drax", "Shadow King"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Nightcrawler ?",
        answers: ["Kilgrave", "Professeur X", "Bastion"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Thor ?",
        answers: ["Danny Rand", "Johnny Storm", "Thor Odinson"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Invisible Woman ?",
        answers: ["Mandarin", "Kingpin", "Doctor Doom"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de The Thing ?",
        answers: [
            "Sa peau rocheuse incassable",
            "Sa force et son agilité",
            "La télépathie",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Captain America ?",
        answers: ["La Confrérie", "Les Defenders", "Les Avengers"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Quicksilver ?",
        answers: [
            "Sa force surhumaine",
            "Ses ailes mécaniques",
            "Sa super-vitesse",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Star-Lord ?",
        answers: ["Dormammu", "Shadow King", "Ronan"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Miles Morales ?",
        answers: [
            "Ses toiles et son camouflage",
            "Sa manipulation de la densité corporelle",
            "La téléportation",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Ultron ?",
        answers: ["Les Defenders", "La Confrérie", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Vision ?",
        answers: ["Ultron", "Mister Sinister", "Bastion"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Star-Lord ?",
        answers: [
            "Une précision de tir parfaite",
            "La télékinésie et la télépathie",
            "Ses pistolets à éléments",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Hulk ?",
        answers: ["Juggernaut", "Ultron", "Abomination"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Beast ?",
        answers: ["Justin Hammer", "Sinister", "Professeur X"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Deadpool ?",
        answers: ["Richard Rider", "Frank Castle", "Wade Wilson"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Rocket ?",
        answers: [
            "Les Gardiens de la Galaxie",
            "Les Avengers",
            "Le Corps Nova",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Kingpin ?",
        answers: [
            "Sa force physique",
            "Le contrôle de la glace",
            "Ses talents de guerrière",
        ],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Silver Surfer ?",
        answers: ["Reed Richards", "Norrin Radd", "Vision"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Hulk ?",
        answers: ["Natasha Romanoff", "Bruce Banner", "Tony Stark"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Ultron ?",
        answers: [
            "Une précision de tir parfaite",
            "Sa force surhumaine",
            "Son intelligence artificielle",
        ],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Luke Cage ?",
        answers: ["Carl Lucas", "Susan Storm", "Matt Murdock"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Miles Morales ?",
        answers: ["Aucune équipe fixe", "La Confrérie", "Les Defenders"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Iron Fist ?",
        answers: [
            "Ses sai (armes de combat)",
            "Le symbiote",
            "Le pouvoir du Iron Fist",
        ],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de War Machine ?",
        answers: ["Bruce Banner", "Nebula", "James Rhodes"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient War Machine ?",
        answers: ["Aucune équipe fixe", "Les Avengers", "Les Defenders"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Nova ?",
        answers: ["Bucky Barnes", "Richard Rider", "Natasha Romanoff"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de The Thing ?",
        answers: ["Doctor Doom", "Thanos", "Galactus"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Professeur X ?",
        answers: ["La télépathie", "La métamorphose", "Sa force surhumaine"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Nova ?",
        answers: ["The Hand", "Cottonmouth", "Thanos"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Black Panther ?",
        answers: ["Justin Hammer", "Professeur X", "Killmonger"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Nebula ?",
        answers: [
            "Une précision de tir parfaite",
            "Ses armes bricolées",
            "Son corps cybernétique",
        ],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Doctor Doom ?",
        answers: ["Victor Von Doom", "Ororo Munroe", "Marc Spector"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Iron Fist ?",
        answers: ["Bushman", "The Hand", "Fantastic Four"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Spider-Man ?",
        answers: [
            "Son corps métallique",
            "Ses toiles",
            "Son armure et sa magie",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Black Panther ?",
        answers: ["Les Avengers", "La Confrérie", "Aucune équipe fixe"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Colossus ?",
        answers: ["Juggernaut", "T-Ray", "Mephisto"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Iron Man ?",
        answers: ["Shadow King", "Mandarin", "Ronan"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Elektra ?",
        answers: [
            "La Confrérie",
            "Les Gardiens de la Galaxie",
            "Aucune équipe fixe",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Doctor Strange ?",
        answers: ["Egghead", "Dormammu", "Cottonmouth"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Groot ?",
        answers: [
            "Sa capacité à faire pousser son corps",
            "Une précision de tir parfaite",
            "Sa force surhumaine",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Punisher ?",
        answers: [
            "Les Avengers",
            "Aucune équipe fixe",
            "Les Gardiens de la Galaxie",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Green Goblin ?",
        answers: [
            "Son planeur explosif",
            "L'invisibilité",
            "La magie du chaos",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Punisher ?",
        answers: ["Jigsaw", "Drax", "Titania"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Cyclope ?",
        answers: [
            "Le symbiote",
            "Ses talents d'espionne",
            "Ses rayons oculaires",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Loki ?",
        answers: ["Professeur X", "Thor", "Shadow King"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Green Goblin ?",
        answers: ["Les Avengers", "Aucune équipe fixe", "Les Fantastic Four"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Hulk ?",
        answers: [
            "Sa force surhumaine",
            "Son marteau Mjolnir",
            "Le contrôle de la météo",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Invisible Woman ?",
        answers: ["X-Force", "Le Corps Nova", "Les Fantastic Four"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Nebula ?",
        answers: ["Les Gardiens de la Galaxie", "Les X-Men", "Le S.H.I.E.L.D."],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Mystique ?",
        answers: ["Titania", "Professeur X", "Les Avengers"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Drax ?",
        answers: ["Sa force brute", "Son arc et ses flèches", "Ses toiles"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Beast ?",
        answers: ["Les X-Men", "Le Corps Nova", "X-Force"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Daredevil ?",
        answers: [
            "Ses armes bricolées",
            "Ses talents d'espionne",
            "Ses sens surdéveloppés",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Thanos ?",
        answers: ["Drax", "Loki", "The Hand"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Venom ?",
        answers: ["Les Defenders", "Aucune équipe fixe", "Les Fantastic Four"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Loki ?",
        answers: ["Wade Wilson", "Marc Spector", "Loki Laufeyson"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Falcon ?",
        answers: ["Sam Wilson", "Stephen Strange", "Gamora"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Captain Marvel ?",
        answers: ["Justin Hammer", "Mister Sinister", "Yon-Rogg"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Human Torch ?",
        answers: ["Doctor Doom", "Kingpin", "Abomination"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Cyclope ?",
        answers: ["Magneto", "Hydra", "Mandarin"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Bullseye ?",
        answers: [
            "Aucune équipe fixe",
            "Les X-Men",
            "Les Gardiens de la Galaxie",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Jessica Jones ?",
        answers: ["Thor", "Justin Hammer", "Kilgrave"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Doctor Strange ?",
        answers: [
            "La magie mystique",
            "Les illusions et la magie",
            "Ses toiles",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Beast ?",
        answers: [
            "Sa force et son agilité",
            "Le contrôle de la météo",
            "La télékinésie et la télépathie",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Gambit ?",
        answers: ["Aucune équipe fixe", "Les X-Men", "Le S.H.I.E.L.D."],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Scarlet Witch ?",
        answers: ["Mephisto", "Fantastic Four", "Professeur X"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Wolverine ?",
        answers: ["Matt Murdock", "Logan", "Stephen Strange"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Green Goblin ?",
        answers: ["Spider-Man", "Thor", "Red Skull"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Deadpool ?",
        answers: ["T-Ray", "Ronan", "Drax"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Invisible Woman ?",
        answers: ["Carl Lucas", "Susan Storm", "Marc Spector"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Nightcrawler ?",
        answers: [
            "Sa planche cosmique",
            "Sa peau rocheuse incassable",
            "La téléportation",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Storm ?",
        answers: [
            "Son armure lourdement armée",
            "Le contrôle de la météo",
            "Ses sai (armes de combat)",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Silver Surfer ?",
        answers: [
            "Le Corps Nova",
            "Aucune équipe fixe",
            "Les Gardiens de la Galaxie",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Magneto ?",
        answers: ["Les Avengers", "La Confrérie", "Le S.H.I.E.L.D."],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Daredevil ?",
        answers: ["Norman Osborn", "Erik Lehnsherr", "Matt Murdock"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Professeur X ?",
        answers: ["Daredevil", "Magneto", "Thor"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de War Machine ?",
        answers: ["Justin Hammer", "Jigsaw", "Sabretooth"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Wolverine ?",
        answers: ["Ronan", "Loki", "Sabretooth"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Cyclope ?",
        answers: ["Les Fantastic Four", "Les X-Men", "X-Force"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Hawkeye ?",
        answers: ["The Hand", "Kingpin", "Ultron"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de She-Hulk ?",
        answers: ["Sinister", "Aleksander Lukin", "Titania"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Captain America ?",
        answers: [
            "Le contrôle du métal",
            "Le pouvoir du Iron Fist",
            "Son bouclier",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Gambit ?",
        answers: ["Mandarin", "Red Skull", "Sinister"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Iron Man ?",
        answers: ["Clint Barton", "Tony Stark", "Susan Storm"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Elektra ?",
        answers: ["Drax", "Bushman", "Bullseye"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Magneto ?",
        answers: ["Professeur X", "The Hand", "Les Avengers"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Wolverine ?",
        answers: [
            "Ses pistolets à éléments",
            "Le contrôle de la météo",
            "Ses griffes en adamantium",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Ant-Man ?",
        answers: ["Kilgrave", "Hydra", "Egghead"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Scarlet Witch ?",
        answers: [
            "Son facteur guérisseur",
            "Sa peau incassable",
            "La magie du chaos",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Black Panther ?",
        answers: [
            "Son énergie cosmique",
            "Son bouclier",
            "Son costume en vibranium",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Moon Knight ?",
        answers: [
            "Ses sai (armes de combat)",
            "Son armure high-tech",
            "La bénédiction du dieu Khonshu",
        ],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Gambit ?",
        answers: ["Remy LeBeau", "Sam Wilson", "Stephen Strange"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Thor ?",
        answers: ["Loki", "Killmonger", "Galactus"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Miles Morales ?",
        answers: ["Jigsaw", "Prowler", "Professeur X"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Star-Lord ?",
        answers: ["Les Gardiens de la Galaxie", "Le S.H.I.E.L.D.", "X-Force"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Doctor Doom ?",
        answers: ["Dormammu", "T-Ray", "Fantastic Four"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Iron Fist ?",
        answers: ["La Confrérie", "Les Defenders", "Les X-Men"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Venom ?",
        answers: ["Kingpin", "Spider-Man", "Bushman"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Professeur X ?",
        answers: ["Steve Rogers", "Charles Xavier", "Tony Stark"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Quicksilver ?",
        answers: ["Les Avengers", "Aucune équipe fixe", "La Confrérie"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Captain Marvel ?",
        answers: ["Les Avengers", "La Confrérie", "Le S.H.I.E.L.D."],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Nick Fury ?",
        answers: [
            "Sa direction du S.H.I.E.L.D.",
            "Ses armes bricolées",
            "Son facteur guérisseur",
        ],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de She-Hulk ?",
        answers: ["Wanda Maximoff", "Jennifer Walters", "Charles Xavier"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Captain Marvel ?",
        answers: [
            "Son facteur guérisseur",
            "Son armure et sa magie",
            "Son énergie cosmique",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Luke Cage ?",
        answers: ["Killmonger", "Cottonmouth", "Abomination"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Ant-Man ?",
        answers: [
            "Sa peau incassable",
            "Sa capacité à faire pousser son corps",
            "Les particules Pym",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Thanos ?",
        answers: [
            "Le Gantelet de l'Infini",
            "Le contrôle de la glace",
            "La télékinésie et la télépathie",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Iceman ?",
        answers: ["Hydra", "Dormammu", "Juggernaut"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Black Panther ?",
        answers: ["Scott Summers", "T'Challa", "Ororo Munroe"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Spider-Man ?",
        answers: ["X-Force", "Aucune équipe fixe", "Les Defenders"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Winter Soldier ?",
        answers: ["Susan Storm", "Bucky Barnes", "Vision"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Doctor Doom ?",
        answers: [
            "Les Gardiens de la Galaxie",
            "Le Corps Nova",
            "Aucune équipe fixe",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de She-Hulk ?",
        answers: [
            "Sa force surhumaine verte",
            "La magie du chaos",
            "Son corps cybernétique",
        ],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Rocket ?",
        answers: ["Rocket Raccoon", "Drax le Destructeur", "Wade Wilson"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Mister Fantastic ?",
        answers: ["X-Force", "Les Fantastic Four", "Le S.H.I.E.L.D."],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Colossus ?",
        answers: ["Les X-Men", "Les Defenders", "Les Avengers"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Black Widow ?",
        answers: ["Les Avengers", "Le Corps Nova", "Aucune équipe fixe"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Venom ?",
        answers: ["Miles Morales", "Rocket Raccoon", "Eddie Brock"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Spider-Man ?",
        answers: ["Peter Parker", "Piotr Rasputin", "Jennifer Walters"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Elektra ?",
        answers: [
            "Son facteur guérisseur",
            "Ses sai (armes de combat)",
            "Les illusions et la magie",
        ],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Drax ?",
        answers: ["Drax le Destructeur", "Jean Grey", "Scott Summers"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Iceman ?",
        answers: [
            "Une précision de tir parfaite",
            "La télépathie",
            "Le contrôle de la glace",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Captain America ?",
        answers: ["Red Skull", "Bushman", "Thanos"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Loki ?",
        answers: ["Les Fantastic Four", "Aucune équipe fixe", "Le Corps Nova"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Nick Fury ?",
        answers: [
            "Les Gardiens de la Galaxie",
            "Aucune équipe fixe",
            "Le S.H.I.E.L.D.",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Hulk ?",
        answers: ["Le S.H.I.E.L.D.", "Le Corps Nova", "Les Avengers"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Thanos ?",
        answers: ["Aucune équipe fixe", "Les Avengers", "Les Fantastic Four"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Mister Fantastic ?",
        answers: [
            "Le pouvoir du Iron Fist",
            "Son corps élastique",
            "Le contrôle de la glace",
        ],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Mystique ?",
        answers: ["Raven Darkholme", "Ororo Munroe", "Peter Parker"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Mystique ?",
        answers: ["Les Avengers", "La Confrérie", "Les Defenders"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Doctor Strange ?",
        answers: ["Les Avengers", "Les Defenders", "X-Force"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Drax ?",
        answers: [
            "Les Gardiens de la Galaxie",
            "La Confrérie",
            "Les Fantastic Four",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Nova ?",
        answers: [
            "Son énergie du Corps Nova",
            "Sa force brute",
            "Son bras cybernétique",
        ],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Moon Knight ?",
        answers: ["Marc Spector", "Ultron", "Natasha Romanoff"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de War Machine ?",
        answers: [
            "La métamorphose",
            "Son armure lourdement armée",
            "Sa peau incassable",
        ],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Green Goblin ?",
        answers: ["Matt Murdock", "Norman Osborn", "Charles Xavier"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Colossus ?",
        answers: [
            "Sa planche cosmique",
            "Son corps métallique",
            "Ses talents d'espionne",
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
