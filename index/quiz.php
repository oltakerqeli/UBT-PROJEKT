<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet"
  />
  <style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        padding: 2rem;
        background-color:bage;
    }
    .quiz-container {
        background: #fff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 0 auto;
    }
    .question {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }
    .options button {
        display: block;
        background: #8e7962;
        color: #fff;
        border: none;
        margin: 0.5rem auto;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
        max-width: 300px;
        transition: background 0.3s ease;
    }
    .options button:hover {
        background: #715941;
    }
    .options button.correct {
        background: green;
    }
    .options button.wrong {
        background: red;
    }
    .result {
        font-size: 1.2rem;
        margin-top: 1rem;
    }
</style>

</head>

<body>
    <div class="quiz-container">
        <h1 style="color: #8e7962;">ZAYN MALIK QUIZ</h1>
        <p id="timer">Time left:10s</p>
        <div id="quiz">
            <div class="question">What year did Zayn left One Direction?</div>
            <div class="options">
                <button onclick="checkAnswer (this,'2013')">2013</button>
                <button onclick="checkAnswer(this,'2015')">2015</button>
                <button onclick="checkAnswer(this,'2016')">2016</button>
            </div>
        </div>
        <div class="result" id="result"></div>
    </div>

    <script>
        const quizData = [
            {
                question: "What year did Zayn leave One Direction?",
                options: ["2013", "2015", "2016"],
                correct: "2015",
            },
            {
                question: "What is Zayn's debut solo album called?",
                options: ["Mind of Mine", "Pillowtalk", "Icarus Falls"],
                correct: "Mind of Mine",
            },
            {
                question: "Where was Zayn Malik born?",
                options: ["London", "Bradford", "Manchester"],
                correct: "Bradford",
            },
            {
                question:"What is the title of Zayn's first solo single?",
                options:["Pillowtalk","Dusk Till Dawn","Like I Would"],
                correct:"Pillowtalk",
            },
            {
            question:"What is Zayn's zodiac sign?",
            options:["Capricorn","Aquarius","Pisces"],
            correct:"Capricorn",
            },
            {
                question:"What was the name of One Direction's debut album?",
                options:["Take Me Home","Up All Night","Midnight Memories"],
                correct:"Up All Night",
            },
            {
                question:"Which hit song by One Direction was their first single?",
                options:["What Makes You Beautiful","Story of My Life","Best Song Ever"],
                correct:"What Makes You Beautiful",
            },
            {
                question:"On which TV show did One Direction form?",
                options:["The X Factor","Britain's Got Talent","Pop Idol"],
                correct:"The X Factor",

            }
            
    
        ];

        let currentQuestion = 0;
        let score = 0;
        let timer = 10;
        let interval;

        function loadQuestion() {
            const quiz = document.getElementById("quiz");
            const questionData = quizData[currentQuestion];

            quiz.innerHTML = `
                <div class="question">${questionData.question}</div>
                <div class="options">
                    ${questionData.options
                        .map(
                            (option) =>
                                `<button onclick="checkAnswer(this, '${option}')">${option}</button>`
                        )
                        .join("")}
                </div>
            `;
            resetTimer();
        }

        function checkAnswer(button, userAnswer) {
            clearInterval(interval);
            const questionData = quizData[currentQuestion];
            const buttons = document.querySelectorAll(".options button");

            if (userAnswer === questionData.correct) {
                button.classList.add("correct");
                score++;
            } else {
                button.classList.add("wrong");
                buttons.forEach((btn) => {
                    if (btn.textContent === questionData.correct) {
                        btn.classList.add("correct");
                    }
                });
            }

            setTimeout(() => {
                currentQuestion++;
                if (currentQuestion < quizData.length) {
                    loadQuestion();
                } else {
                    showResult();
                }
            }, 1000);
        }

        function resetTimer() {
            timer = 10;
            const timerElement = document.getElementById("timer");
            timerElement.textContent = `Time left: ${timer}s`;

            interval = setInterval(() => {
                timer--;
                timerElement.textContent = `Time left: ${timer}s`;
                if (timer <= 0) {
                    clearInterval(interval);
                    checkAnswer(null, null); 
                }
            }, 1000);
        }

        function showResult() {
    document.querySelector(".quiz-container").innerHTML = `
        <h1>Quiz Completed!</h1>
        <p>You scored ${score}/${quizData.length}.</p>
        <a href="Gallery.php" style="margin-top: 1rem; background: #8e7962; color: white; padding: 1rem 2rem; border: none; border-radius: 5px; text-decoration: none; display: inline-block;">
            Back to Gallery
        </a>
    `;
}


        loadQuestion();
    </script>
    
</body>

</html>