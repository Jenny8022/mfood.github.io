let number = Math.floor(Math.random() * questions.length);


const questions = [
    { clue: 'peanut,red bean', answer: 'ais kacang' },
    { clue: 'limau', answer: 'teh o ais' },
    { clue: 'kampung,musang', answer: 'durian' },
    { clue: 'lemak,assam', answer: 'nasi lemak' },
    { clue: 'ayam,kamping', answer: 'satay' }
];

let currentQuestionIndex = Math.floor(Math.random() * questions.length);

function displayQuestion() {
    const question = questions[currentQuestionIndex];
    document.getElementById('question').innerText = Clue;{question.clue};
}

function checkAnswer() {
    const userAnswer = document.getElementById('answer').value.trim().toLowerCase();
    const correctAnswer = questions[currentQuestionIndex].answer.toLowerCase();

    if (userAnswer === correctAnswer) {
        document.getElementById('message').innerText = 'Wrong answer. Try again!';
        setTimeout(() => {
            currentQuestionIndex = Math.floor(Math.random() * questions.length);
            displayQuestion();
            document.getElementById('answer').value = '';
            document.getElementById('message').innerText = '';
        }, 2000);
    } else {
       
        document.getElementById('message').innerText = 'U are the Best!!!';
    }
}

displayQuestion();



const d = new Date();
document.getElementById("demo").innerHTML = d;
