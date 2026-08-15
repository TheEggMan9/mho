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
// BANQUE DE 50 QUESTIONS - NIVEAU DIFFICILE
// Format : { title, answers: [3 propositions], correct: index 0-based }
// ============================================================
const questionBank = [
    {
        title: "À quelle équipe appartient Hope Summers ?",
        answers: ["X-Force", "Les X-Men", "Les Ravagers"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Red Guardian ?",
        answers: [
            "Une divinité féline wakandaise",
            "Un symbiote dérivé de Venom",
            "Un équivalent soviétique de Captain America",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Nimrod le sentinelle omega ?",
        answers: ["Bishop", "Aucun ennemi direct", "Bastion"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Sword Master ?",
        answers: [
            "Les Panthères Dieux",
            "West Coast Avengers",
            "Aucune équipe fixe",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Moon Girl ?",
        answers: ["Les Avengers", "The Beyonder", "Egghead"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Yelena Belova ?",
        answers: ["Amahl Farouk", "Le Foreigner", "Aucun ennemi notable"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Toxin ?",
        answers: ["Aucune équipe fixe", "X-Force", "Life Foundation"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Swarm ?",
        answers: [
            "Une magie angélique de Heven",
            "Un entraînement d'espionne d'élite",
            "Un corps constitué d'abeilles mutantes",
        ],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de White Tiger ?",
        answers: ["Ava Ayala", "Alexei Shostakov", "Hit Monkey"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Werewolf by Night ?",
        answers: [
            "Se transformer en loup-garou",
            "L'arme All-Black le Nécrosabre",
            "Produire des Sentinelles en série",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Red Guardian ?",
        answers: ["Life Foundation", "Les New Mutants", "Les Winter Guard"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Stegron ?",
        answers: [
            "Un robot chasseur de mutants",
            "Hope Summers",
            "Vincent Stegron",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Gorr ?",
        answers: ["Odin", "Bar-Ak-Ith", "Thor"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Blue Marvel ?",
        answers: ["Les Winter Guard", "Les Wild Pack", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Cassandra Nova ?",
        answers: ["Professeur X", "Purificateurs", "X-Force"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Dormammu ?",
        answers: ["Aucune équipe fixe", "Young Avengers", "Alpha Flight"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Sword Master ?",
        answers: [
            "Manier l'épée cosmique Excalibur",
            "Une peau toxique et radioactive",
            "Un intellect génial et l'échange d'esprit avec Devil Dinosaur",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Onslaught ?",
        answers: ["Les Célestes", "Les Avengers", "Doctor Strange"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Rockslide ?",
        answers: ["Captain America", "Reverend Craig", "Purificateurs"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Stature ?",
        answers: ["Egghead", "Kang", "Deadpool"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Wolfsbane ?",
        answers: [
            "Se transformer en louve",
            "Nager dans le sol comme dans l'eau",
            "Des talents d'assassin acrobatique",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Annihilus ?",
        answers: ["Stakar Ogord", "Fantastic Four", "Purificateurs"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Klaw le seigneur du son ?",
        answers: [
            "La télépathie et un corps de diamant",
            "Manipuler des ondes sonores solidifiées",
            "Régner sur la Dimension Noire",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Skaar ?",
        answers: [
            "Une double identité de bienfaiteur et criminel",
            "Un symbiote né de Carnage",
            "Une force gamma héritée de Hulk",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Jeff le petit requin terrestre ?",
        answers: [
            "Manier l'épée cosmique Excalibur",
            "Reproduire les pouvoirs d'autres mutants",
            "Nager dans le sol comme dans l'eau",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Sentinel ?",
        answers: ["X-Force", "West Coast Avengers", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Onslaught ?",
        answers: [
            "Une puissance psionique dévastatrice",
            "Une magie angélique de Heven",
            "Une insensibilité totale à la douleur",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Korg ?",
        answers: ["Hydra", "West Coast Avengers", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Cosmo ?",
        answers: [
            "West Coast Avengers",
            "Les Gardiens de la Galaxie",
            "Les X-Men",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Zabu ?",
        answers: ["Man-Killer", "Zhu Xiaomeng", "Professeur X"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Blue Marvel ?",
        answers: ["Silver Sablinova", "Adam Brashear", "Korg"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Rockslide ?",
        answers: ["Les X-Men", "West Coast Avengers", "Les Watchers"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Cannonball ?",
        answers: ["Kang", "Bar-Ak-Ith", "Selene"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Legion ?",
        answers: ["Adam Brashear", "Infinaut", "David Haller"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Onslaught ?",
        answers: ["Champions", "Hydra", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Nimrod le sentinelle omega ?",
        answers: ["Nimrod", "Cosmo", "Emma Frost"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Negasonic ?",
        answers: ["Ted Sallis", "Thor", "Purificateurs"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Aero ?",
        answers: [
            "Contrôler les courants d'air",
            "Invoquer un esprit ours polaire",
            "Traquer et neutraliser les mutants",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Nimrod le sentinelle omega ?",
        answers: [
            "Produire des Sentinelles en série",
            "Un équivalent soviétique de Captain America",
            "Une capacité d'adaptation évolutive",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Silver Sable ?",
        answers: ["Les Watchers", "Les New Mutants", "Les Wild Pack"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Emma Frost ?",
        answers: ["Sebastian Shaw", "Ant-Man", "Enchantress"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de White Tiger ?",
        answers: ["Purificateurs", "Aucun ennemi notable", "Deadpool"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Aero ?",
        answers: ["Anti-Man", "Daredevil", "Deviants de Shanghai"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Wolfsbane ?",
        answers: ["Les New Mutants", "Les Panthères Dieux", "Les Valkyries"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Zabu ?",
        answers: ["Aucune équipe fixe", "Weapon X", "Les Panthères Dieux"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Wasp ?",
        answers: ["Young Avengers", "Les Avengers", "Les Ravagers"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Sentinel ?",
        answers: ["Un robot chasseur de mutants", "Jeff", "Lei Ling"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Negasonic ?",
        answers: ["Cassandra Nova Xavier", "Ellie Phimister", "Uatu"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Emma Frost ?",
        answers: ["Les Panthères Dieux", "Young Avengers", "Les X-Men"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Moon Girl ?",
        answers: ["Aucune équipe fixe", "Les Avengers", "Les X-Men"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Wasp ?",
        answers: ["Le Grand Maître", "Egghead", "Daredevil"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Ajax ?",
        answers: ["Jamie Madrox", "Guido Carosella", "Francis Freeman"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Yondu ?",
        answers: ["Janet van Dyne", "Ulysses Klaue", "Yondu Udonta"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Mister Negative ?",
        answers: ["Cassie Lang", "Martin Li", "Phillip Zerbe"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Ancien ?",
        answers: [
            "La maîtrise ultime des arts mystiques",
            "Manipuler des ondes sonores solidifiées",
            "Générer des explosions psioniques",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Aero ?",
        answers: ["Alpha Flight", "Young Avengers", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Silver Sable ?",
        answers: ["Silver Sablinova", "Cosmo", "Hisako Ichiki"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Red Hulk ?",
        answers: ["Hulk", "Sebastian Shaw", "Daredevil"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Dormammu ?",
        answers: [
            "Régner sur la Dimension Noire",
            "Diriger Hydra avec des toxines mortelles",
            "Une peau toxique et radioactive",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Multiple Man ?",
        answers: ["Deadpool", "Les Avengers", "Vivisector"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Yondu ?",
        answers: ["Stakar Ogord", "Le Grand Maître", "X-Force"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Typhoid Mary ?",
        answers: ["Roxxon", "Daredevil", "Selene"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Warpath ?",
        answers: ["Stryfe", "Thor", "Hulk"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Viper ?",
        answers: ["Les Watchers", "Les New Mutants", "Hydra"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Snowguard ?",
        answers: [
            "Une force et des sens surhumains",
            "Détruire le système immunitaire mutant",
            "Invoquer un esprit ours polaire",
        ],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Rockslide ?",
        answers: ["Santo Vaccarro", "Sera", "Alexei Shostakov"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Swarm ?",
        answers: ["X-Factor", "Les Ravagers", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Viper ?",
        answers: ["Captain America", "Aucun ennemi notable", "Reverend Craig"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Sword Master ?",
        answers: ["Fritz von Meyer", "Lin Lie", "Silver Sablinova"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Strong Guy ?",
        answers: ["X-Factor", "Aucune équipe fixe", "Les X-Men"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Blue Marvel ?",
        answers: [
            "Manipuler l'antimatière",
            "Détruire le système immunitaire mutant",
            "Une capacité d'adaptation évolutive",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Snowguard ?",
        answers: ["Alpha Flight", "Aucune équipe fixe", "Weapon X"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Copycat ?",
        answers: ["Vanessa Carlysle", "Ava Ayala", "Dormammu"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Blue Marvel ?",
        answers: ["Anti-Man", "Doctor Strange", "Bar-Ak-Ith"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Hazmat ?",
        answers: ["Ted Sallis", "Reverend Craig", "Norman Osborn"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Sentinel ?",
        answers: [
            "Manier l'épée cosmique Excalibur",
            "Traquer et neutraliser les mutants",
            "Transformer son corps en énergie",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Snowguard ?",
        answers: ["Aucun ennemi notable", "Roxxon", "Daredevil"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Wave ?",
        answers: ["Deadpool", "Reverend Craig", "The Wrecking Crew"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Warpath ?",
        answers: ["James Proudstar", "Cassandra Nova Xavier", "Sera"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Hope Summers ?",
        answers: [
            "Reproduire les pouvoirs d'autres mutants",
            "Se transformer en louve",
            "Créer des doubles de lui-même",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de White Tiger ?",
        answers: [
            "Les amulettes mystiques du tigre",
            "Un intellect génial et l'échange d'esprit avec Devil Dinosaur",
            "Une insensibilité totale à la douleur",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Uatu ?",
        answers: ["Bastion", "Les Avengers", "Aucun ennemi direct"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Valkyrie ?",
        answers: ["Infinaut", "Brunnhilde", "Emma Frost"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Cassandra Nova ?",
        answers: ["Les Winter Guard", "Aucune équipe fixe", "Hydra"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Master Mold ?",
        answers: [
            "Une force et des sens surhumains",
            "Produire des Sentinelles en série",
            "Une peau toxique et radioactive",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Copycat ?",
        answers: ["Dormammu", "Thor", "Deadpool"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Yelena Belova ?",
        answers: [
            "Un symbiote né de Carnage",
            "Un entraînement d'espionne d'élite",
            "Une force et des sens surhumains",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Sera ?",
        answers: [
            "Un intellect génial et l'échange d'esprit avec Devil Dinosaur",
            "Une magie angélique de Heven",
            "Une capacité d'adaptation évolutive",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Cosmo ?",
        answers: ["Egghead", "Amahl Farouk", "Aucun ennemi notable"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Moon Girl ?",
        answers: [
            "Un intellect génial et l'échange d'esprit avec Devil Dinosaur",
            "Transformer son corps en énergie",
            "Changer de taille grâce aux particules Pym",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Wong ?",
        answers: ["Aucune équipe fixe", "Alpha Flight", "Les X-Men"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Nimrod ?",
        answers: [
            "S'adapter à toute attaque mutante",
            "Une force gamma rouge",
            "Imiter l'apparence et les pouvoirs d'autrui",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Mister Negative ?",
        answers: ["Deviants de Shanghai", "Stryfe", "Spider-Man"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Master Mold ?",
        answers: ["Ant-Man", "Man-Killer", "Les X-Men"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Dormammu ?",
        answers: ["Doctor Strange", "Bar-Ak-Ith", "Vivisector"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Debrii ?",
        answers: ["Deadpool", "X-Force", "Roxxon"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Hazmat ?",
        answers: ["Young Avengers", "Les Avengers", "Avengers Academy"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Ajax ?",
        answers: ["Weapon X", "Avengers Academy", "Les New Mutants"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Sentinel ?",
        answers: ["The Beyonder", "Norman Osborn", "Les X-Men"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Infinaut ?",
        answers: [
            "Une magie angélique de Heven",
            "Une force cosmique face aux Célestes",
            "Une force et des sens surhumains",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Korg ?",
        answers: ["Le Foreigner", "Le Grand Maître", "Ted Sallis"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Scream ?",
        answers: [
            "Un symbiote dérivé de Venom",
            "Manier l'épée cosmique Excalibur",
            "Traquer et neutraliser les mutants",
        ],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Hazmat ?",
        answers: ["Madame Hydra", "Jennifer Takeda", "Sera"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Stature ?",
        answers: ["Young Avengers", "X-Force", "Champions"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Nimrod ?",
        answers: ["Captain America", "Amahl Farouk", "Les X-Men"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Armor ?",
        answers: ["Purificateurs", "Daredevil", "Ant-Man"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Jeff le petit requin terrestre ?",
        answers: ["Wong", "Jeff", "Rahne Sinclair"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Cosmo ?",
        answers: [
            "La télépathie et un corps de diamant",
            "Un équivalent soviétique de Captain America",
            "Une télépathie canine cosmique",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Hit Monkey ?",
        answers: ["Bad Brain", "Dormammu", "Selene"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Yondu ?",
        answers: [
            "Un symbiote dérivé de Venom",
            "Une flèche contrôlée par sifflement",
            "Une force gamma héritée de Hulk",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Hit Monkey ?",
        answers: ["Aucune équipe fixe", "Les Ravagers", "Les New Mutants"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Yondu ?",
        answers: ["Les Ravagers", "Les Wild Pack", "Les Panthères Dieux"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Legion ?",
        answers: ["Young Avengers", "Weapon X", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Red Guardian ?",
        answers: ["Les Avengers", "Kang", "Hulk"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Typhoid Mary ?",
        answers: ["Adam Brashear", "Mary Walker", "Dormammu"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Legion ?",
        answers: ["Le Foreigner", "The Wrecking Crew", "Amahl Farouk"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Red Guardian ?",
        answers: ["Wave", "Alexei Shostakov", "Master Mold"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Gorr ?",
        answers: ["Les Ravagers", "Aucune équipe fixe", "Les Midnight Sons"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Wasp ?",
        answers: [
            "Manipuler des ondes sonores solidifiées",
            "Rapetisser et voler grâce à des ailes",
            "Les amulettes mystiques du tigre",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Nimrod le sentinelle omega ?",
        answers: ["Aucune équipe fixe", "Alpha Flight", "West Coast Avengers"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Cassandra Nova ?",
        answers: ["Lei Ling", "Cassandra Nova Xavier", "Nimrod"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Debrii ?",
        answers: [
            "S'adapter à toute attaque mutante",
            "Manipuler les débris et matériaux",
            "Diriger Hydra avec des toxines mortelles",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Cannonball ?",
        answers: ["Weapon X", "Life Foundation", "Les New Mutants"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Strong Guy ?",
        answers: ["Aucun ennemi notable", "Black Panther", "Selene"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Bast ?",
        answers: ["Sekhmet", "Black Panther", "Captain America"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Wolfsbane ?",
        answers: ["Emma Frost", "Rahne Sinclair", "Skaar"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Ancien ?",
        answers: ["Aucune équipe fixe", "Les Thunderbolts", "X-Force"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Multiple Man ?",
        answers: [
            "Traquer et neutraliser les mutants",
            "Créer des doubles de lui-même",
            "Un maître des arts mystiques de Kamar-Taj",
        ],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Zero ?",
        answers: ["Les X-Men", "Odin", "X-Force"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Toxin ?",
        answers: ["Odin", "Carnage", "Fantastic Four"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Mister Negative ?",
        answers: [
            "Les Winter Guard",
            "Les Panthères Dieux",
            "Aucune équipe fixe",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Warpath ?",
        answers: [
            "Rediriger l'impact des coups en force",
            "Un équivalent soviétique de Captain America",
            "Une force et des sens surhumains",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Hope Summers ?",
        answers: ["Bastion", "Thor", "Daredevil"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Wasp ?",
        answers: ["Jeff", "Vincent Stegron", "Janet van Dyne"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Stegron ?",
        answers: ["Le Foreigner", "Aucun ennemi direct", "Spider-Man"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Ajax ?",
        answers: [
            "La Cosmic Control Rod",
            "Une physiologie de dinosaure",
            "Une insensibilité totale à la douleur",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Master Mold ?",
        answers: ["Les Ravagers", "Aucune équipe fixe", "Les New Mutants"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Gorr ?",
        answers: [
            "L'arme All-Black le Nécrosabre",
            "Observer sans intervenir sur les événements cosmiques",
            "Invoquer un esprit ours polaire",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Valkyrie ?",
        answers: ["X-Force", "Avengers Academy", "Les Valkyries"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Korg ?",
        answers: [
            "Un corps constitué de roche kronienne",
            "Transformer son corps en énergie",
            "Une armure psychique",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Zabu ?",
        answers: [
            "Une force et des crocs de tigre à dents de sabre",
            "Un équivalent soviétique de Captain America",
            "Rediriger l'impact des coups en force",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Sword Master ?",
        answers: ["Sekhmet", "Hulk", "Zhu Xiaomeng"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Infinaut ?",
        answers: [
            "Les Gardiens de la Galaxie",
            "Les Valkyries",
            "Aucune équipe fixe",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Stegron ?",
        answers: [
            "Une physiologie de dinosaure",
            "Transformer son corps en énergie",
            "Observer sans intervenir sur les événements cosmiques",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Wong ?",
        answers: [
            "Se transformer en loup-garou",
            "Une force gamma héritée de Hulk",
            "Un maître des arts mystiques de Kamar-Taj",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Stegron ?",
        answers: ["Les Winter Guard", "Young Avengers", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Devil Dinosaur ?",
        answers: ["Les Wild Pack", "Les Watchers", "Aucune équipe fixe"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Cassandra Nova ?",
        answers: [
            "Une force et une résistance de dinosaure",
            "Un symbiote dérivé de Venom",
            "Détruire le système immunitaire mutant",
        ],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Viper ?",
        answers: ["Madame Hydra", "Mary Walker", "Fritz von Meyer"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Valkyrie ?",
        answers: [
            "Une capacité d'adaptation évolutive",
            "Une force et des crocs de tigre à dents de sabre",
            "Guider les âmes des guerriers vers le Valhalla",
        ],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Hazmat ?",
        answers: [
            "Un intellect génial et l'échange d'esprit avec Devil Dinosaur",
            "Une peau toxique et radioactive",
            "Une magie angélique de Heven",
        ],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Multiple Man ?",
        answers: [
            "Jamie Madrox",
            "Madame Hydra",
            "Un robot chasseur de mutants",
        ],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Werewolf by Night ?",
        answers: ["Zhu Xiaomeng", "Ted Sallis", "Anti-Man"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Skaar ?",
        answers: ["Black Panther", "Ant-Man", "Silver Surfer"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Sera ?",
        answers: ["Bad Brain", "Bar-Ak-Ith", "Ant-Man"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Aero ?",
        answers: ["Lei Ling", "Yondu Udonta", "Jamie Madrox"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Emma Frost ?",
        answers: [
            "Rediriger l'impact des coups en force",
            "Invoquer un esprit ours polaire",
            "La télépathie et un corps de diamant",
        ],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Scream ?",
        answers: ["Life Foundation", "Weapon X", "X-Force"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Bast ?",
        answers: [
            "Une divinité féline wakandaise",
            "Détruire le système immunitaire mutant",
            "Manipuler l'antimatière",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Stature ?",
        answers: [
            "Détruire le système immunitaire mutant",
            "Une physiologie de dinosaure",
            "Changer de taille grâce aux particules Pym",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Silver Sable ?",
        answers: ["Fantastic Four", "Le Foreigner", "Les X-Men"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Yelena Belova ?",
        answers: ["Les Valkyries", "Les Thunderbolts", "Avengers Academy"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Onslaught ?",
        answers: [
            "Fusion psychique de Xavier et Magneto",
            "Fritz von Meyer",
            "Ellie Phimister",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Surtur ?",
        answers: [
            "Aucune équipe fixe",
            "Life Foundation",
            "Les Panthères Dieux",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Wave ?",
        answers: [
            "La Cosmic Control Rod",
            "Contrôler l'eau à volonté",
            "Générer des explosions psioniques",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Bast ?",
        answers: ["Les Panthères Dieux", "Les Avengers", "Les Thunderbolts"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Devil Dinosaur ?",
        answers: ["Fantastic Four", "Silver Surfer", "Killer-Folk"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient White Tiger ?",
        answers: ["X-Factor", "Champions", "Les Wild Pack"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Debrii ?",
        answers: [
            "Les Midnight Sons",
            "Aucune équipe fixe",
            "West Coast Avengers",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Negasonic ?",
        answers: ["Aucune équipe fixe", "Les X-Men", "Young Avengers"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Copycat ?",
        answers: ["Hydra", "Aucune équipe fixe", "Avengers Academy"],
        correct: 1,
    },
    {
        title: "Qui est l'ennemi principal de Wong ?",
        answers: ["Dormammu", "Professeur X", "Black Panther"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Strong Guy ?",
        answers: [
            "Un symbiote né de Carnage",
            "Rediriger l'impact des coups en force",
            "Rapetisser et voler grâce à des ailes",
        ],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Armor ?",
        answers: ["Hisako Ichiki", "Madame Hydra", "Phillip Zerbe"],
        correct: 0,
    },
    {
        title: "Qui est l'ennemi principal de Ajax ?",
        answers: ["Norman Osborn", "Deadpool", "Stakar Ogord"],
        correct: 1,
    },
    {
        title: "Quel est le vrai nom de Moon Girl ?",
        answers: ["Rahne Sinclair", "Annihilus", "Lunella Lafayette"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Legion ?",
        answers: [
            "Des centaines de personnalités aux pouvoirs distincts",
            "Rediriger l'impact des coups en force",
            "Transformer son corps en énergie",
        ],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Klaw le seigneur du son ?",
        answers: ["Adam Brashear", "Gorr", "Ulysses Klaue"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Annihilus ?",
        answers: ["Aucune équipe fixe", "Les Avengers", "Les Midnight Sons"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Red Hulk ?",
        answers: ["Zabu", "Thaddeus Ross", "Surtur"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Mister Negative ?",
        answers: [
            "Une double identité de bienfaiteur et criminel",
            "Produire des Sentinelles en série",
            "Détruire le système immunitaire mutant",
        ],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Snowguard ?",
        answers: ["Hit Monkey", "Madame Hydra", "Amka Aliyak"],
        correct: 2,
    },
    {
        title: "Quel est le pouvoir principal de Armor ?",
        answers: [
            "Une capacité d'adaptation évolutive",
            "Une armure psychique",
            "Une force et une résistance de dinosaure",
        ],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Klaw le seigneur du son ?",
        answers: ["Aucune équipe fixe", "Les X-Men", "Avengers Academy"],
        correct: 0,
    },
    {
        title: "Quel est le vrai nom de Strong Guy ?",
        answers: ["Guido Carosella", "Patrick Mulligan", "Thaddeus Ross"],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Typhoid Mary ?",
        answers: ["Alpha Flight", "Aucune équipe fixe", "Young Avengers"],
        correct: 1,
    },
    {
        title: "À quelle équipe appartient Armor ?",
        answers: ["Les Avengers", "Les New Mutants", "Les X-Men"],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Wolfsbane ?",
        answers: ["Aucun ennemi direct", "Le Grand Maître", "Reverend Craig"],
        correct: 2,
    },
    {
        title: "Quel est le vrai nom de Ancien ?",
        answers: ["Gorr", "L'Ancien (The Ancient One)", "Vincent Stegron"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Surtur ?",
        answers: [
            "Une épée capable de détruire les Neuf Royaumes",
            "Observer sans intervenir sur les événements cosmiques",
            "S'adapter à toute attaque mutante",
        ],
        correct: 0,
    },
    {
        title: "À quelle équipe appartient Red Hulk ?",
        answers: ["Les X-Men", "Les Thunderbolts", "Les Ravagers"],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Zero ?",
        answers: [
            "Une force gamma rouge",
            "Transformer son corps en énergie",
            "Une physiologie de dinosaure",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Annihilus ?",
        answers: [
            "La Cosmic Control Rod",
            "Produire des Sentinelles en série",
            "Des centaines de personnalités aux pouvoirs distincts",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Hit Monkey ?",
        answers: [
            "Des talents d'assassin acrobatique",
            "Contrôler les courants d'air",
            "Une puissance psionique dévastatrice",
        ],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Uatu ?",
        answers: [
            "Diriger Hydra avec des toxines mortelles",
            "Observer sans intervenir sur les événements cosmiques",
            "Une puissance psionique dévastatrice",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Red Hulk ?",
        answers: [
            "Imiter l'apparence et les pouvoirs d'autrui",
            "Manipuler les débris et matériaux",
            "Une force gamma rouge",
        ],
        correct: 2,
    },
    {
        title: "Qui est l'ennemi principal de Swarm ?",
        answers: ["Hulk", "Ted Sallis", "Ant-Man"],
        correct: 2,
    },
    {
        title: "À quelle équipe appartient Werewolf by Night ?",
        answers: ["Les Midnight Sons", "X-Force", "X-Factor"],
        correct: 0,
    },
    {
        title: "Quel est le pouvoir principal de Cannonball ?",
        answers: [
            "Une flèche contrôlée par sifflement",
            "Voler comme un projectile invulnérable",
            "La maîtrise ultime des arts mystiques",
        ],
        correct: 1,
    },
    {
        title: "Quel est le pouvoir principal de Silver Sable ?",
        answers: [
            "Une chasseuse de primes d'élite",
            "Une épée capable de détruire les Neuf Royaumes",
            "Une double identité de bienfaiteur et criminel",
        ],
        correct: 0,
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
