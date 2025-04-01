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
                this.questions.length
            );
        } else {
            questions_screen.style.display = "none";

            let NbrCorrectUser = document.querySelector("#nbrCorrects");
            NbrCorrectUser.textContent = quiz.nbrCorrects;
            result_screen.style.display = "block";
        }
    };
}

// Fonction Question permettant de créer les questions avec le titre, les réponses et la réponse correcte
function Question(title, answers, correctAnswers) {
    (this.title = title),
        (this.answers = answers),
        (this.correctAnswers = correctAnswers),
        // Mise en place et structuration du HTML et CSS pour mes questions
        (this.getElement = function (indexQuestion, nbrOfQuestions) {
            let questionTitle = document.createElement("h3");
            questionTitle.classList.add("title_questions");
            questionTitle.textContent = this.title;

            // Le append sert à afficher le html (il existe le after et le prepend si on veut afficher au-dessus ou en-dessous)
            questions_screen.append(questionTitle);

            let questionAnswer = document.createElement("ul");
            questionAnswer.classList.add("list_questions");

            // Boucle en ForEach pour placer à chaque fois un <li> pour chaque réponse
            this.answers.forEach((answer, index) => {
                let answerElement = document.createElement("li");
                answerElement.classList.add("answers");
                answerElement.textContent = answer;
                answerElement.id = index + 1;
                answerElement.addEventListener("click", this.checkAnswer);

                questionAnswer.append(answerElement);
            });

            // Fonction pour voir à combien de question on est sur le total de questions présents
            let questionNumber = document.createElement("h4");
            questionNumber.classList.add("avancement_question");
            questionNumber.textContent =
                "Questions : " + indexQuestion + "/" + nbrOfQuestions;

            questions_screen.append(questionNumber);

            questions_screen.append(questionAnswer);
        });

    (this.addAnswer = function (answer) {
        this.answers.push(answer);
    }),
        // Ici on va checker la réponse correcte avec une écoute d'évènement :
        (this.checkAnswer = (e) => {
            let answerSelect = e.target;
            if (this.isCorrectAnswer(answerSelect.id)) {
                answerSelect.classList.add("answersCorrect");
                quiz.nbrCorrects++;
            } else {
                answerSelect.classList.add("answersWrong");
                let RightAnswers = this.correctAnswers.map((index) =>
                    document.getElementById(index)
                );
                RightAnswers.forEach((RightAnswer) => {
                    RightAnswer.classList.add("answersCorrect");
                });
            }

            // Vérifiez si toutes les bonnes réponses ont été sélectionnées
            const allCorrectAnswersSelected = this.correctAnswers.every(
                (index) => {
                    return document
                        .getElementById(index)
                        .classList.contains("answersCorrect");
                }
            );

            // Si toutes les bonnes réponses ont été sélectionnées, passez à la question suivante
            if (allCorrectAnswersSelected) {
                setTimeout(function () {
                    questions_screen.textContent = "";
                    quiz.indexCurrentQuestion++;
                    quiz.displayCurrentQuestion();
                }, 2000);
            }
        });

    // Si la réponse choisit par le user est égale à la réponse correcte retourner True sinon False
    this.isCorrectAnswer = function (answerUser) {
        return this.correctAnswers.includes(parseInt(answerUser)); // Vérifie si la réponse est dans les réponses correctes
    };
}

// On va récupérer notre fonction Quiz pour implémenter ses données dans ses arguments
// Partie Création des mes données de Questions :
let quiz = new Quiz();

let question1 = new Question(
    "Quel est le vrai nom de Spider-Man ? ",
    ["Peter Parker", "Tony Stark", "Steve Rogers"],
    [1]
);
quiz.addQuestion(question1);

let question2 = new Question(
    "Quelle est la couleur du costume de Iron Man ? ",
    ["Rouge et bleu", "Vert et violet", "Rouge et or"],
    [3]
);
quiz.addQuestion(question2);

let question3 = new Question(
    "Qui est l'ennemi juré de Spider-Man ? ",
    ["Thanos", "Joker", "Green Goblin"],
    [3]
);
quiz.addQuestion(question3);

// Ici je suis obligé de passer par un querySelectroAll pour avoir accès à la fonction ForEach (car le getElement ne le possède pas)
let NbrQuestion = document.querySelectorAll(".nbrQuestion");

NbrQuestion.forEach(function (NbrQuestion) {
    NbrQuestion.textContent = quiz.questions.length;
});

// Fonction servant à lancer le questionnaire en enlevant la page d'introduction du quiz et en mettant la première question
function startQuestions() {
    header_screen.style.display = "none";
    questions_screen.style.display = "block";

    quiz.displayCurrentQuestion();
}

// Récupérer le bouton dans mon html avec le ElementById car le ElementsByClassName n'a pas le addEventListener)
let btn_start = document.getElementById("btn_start");
btn_start.addEventListener("click", startQuestions);
