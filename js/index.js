(function() {
 const myQuestions = [
   {
     question: "Lorem ipsum?",
     answers: {
       a: "Lorem ipsum 1",
       b: "Lorem ipsum 2",
       c: "Lorem ipsum 3"
     },
     correctAnswer: "c"
   },
   {
     question: "Lorem ipsum",
     answers: {
       a: "Lorem ipsum 1",
       b: "Lorem ipsum 2",
       c: "Lorem ipsum 3"
     },
     correctAnswer: "c"
   },
   {
     question: "Lorem ipsum?",
     answers: {
       a: "Lorem ipsum 1",
       b: "Lorem ipsum 2",
       c: "Lorem ipsum 3",
       d: "Lorem ipsum 4"
     },
     correctAnswer: "d"
   }

 ];

 function buildQuiz() {
   // we'll need a place to store the HTML output
   const output = [];

   // for each question...
   myQuestions.forEach((currentQuestion, questionNumber) => {
     // we'll want to store the list of answer choices
     const answers = [];

     // and for each available answer...
     for (letter in currentQuestion.answers) {
       // ...add an HTML radio button
       answers.push(
         `<label>
            <input type="radio" name="question${questionNumber}" value="${letter}">
             ${letter} :
             ${currentQuestion.answers[letter]}
          </label>`
       );
     }

     // add this question and its answers to the output
     output.push(
       `<div class="slide">
          <div class="question"> ${currentQuestion.question} </div>
          <div class="answers"> ${answers.join("")} </div>
        </div>`
     );
   });

   // finally combine our output list into one string of HTML and put it on the page
   quizContainer.innerHTML = output.join("");
 }

 function showResults() {
   // gather answer containers from our quiz
   const answerContainers = quizContainer.querySelectorAll(".answers");

   // keep track of user's answers
   let numCorrect = 0;

   // for each question...
   myQuestions.forEach((currentQuestion, questionNumber) => {
     // find selected answer
     const answerContainer = answerContainers[questionNumber];
     const selector = `input[name=question${questionNumber}]:checked`;
     const userAnswer = (answerContainer.querySelector(selector) || {}).value;

     // if answer is correct
     if (userAnswer === currentQuestion.correctAnswer) {
       // add to the number of correct answers
       numCorrect++;

       // color the answers green
       answerContainers[questionNumber].style.color = "lightgreen";
     } else {
       // if answer is wrong or blank
       // color the answers red
