//Document Object Memory to be Loaded//
document.addEventListener('DOMContentLoaded', function(){

    //Get all elemnts of the Questions//
    var questions = document.querySelectorAll('.faq-question');

    //Loops Through Each Question Element//
    questions.forEach(function(question){
        
        //Add's click event Listener to the question//
        question.addEventListener('click', function(){

            //Opens the question that is clicked//
            question.classList.toggle('active');

            //Gets answwer from FAQ.html and displays//
            var answer = question.nextElementSibling;

            if(answer.style.display === 'block'){
                //This section hides the answer if it is visible//
                answer.style.display = 'none';
            }
            else{
                //This section shows the answer if it is hidden//
                answer.style.display = 'block';
            }
        });
    });
});

        

    