let correctAnswer = '';
let questionText = '';
let correctChoiceText = '';

document.getElementById('generateButton').addEventListener('click', function() {
    fetch('generator.php')
        .then(response => response.json())
        .then(data => {
            questionText = data.question;
            correctAnswer = data.correct;
            correctChoiceText = data.choices[data.correct.charCodeAt(0) - 65]; // Get correct choice text

            document.getElementById('question').innerText = questionText;
            document.getElementById('choiceA').innerText = data.choices[0];
            document.getElementById('choiceB').innerText = data.choices[1];
            document.getElementById('choiceC').innerText = data.choices[2];
            document.getElementById('choiceD').innerText = data.choices[3];

            document.getElementById('choices').style.display = 'block';

            // After generating a question, navigate to answer page
            setTimeout(() => {
                window.location.href = `answer.html?question=${encodeURIComponent(questionText)}&answer=${encodeURIComponent(correctChoiceText)}`;
            }, 2000); // Automatically navigate after 2 seconds
        });
});
