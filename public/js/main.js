var limit = 10; // Max questions
var count = 4; // There are 4 questions already

function addQuestion()
{
    // Get the quiz form element
    var quiz = document.getElementById('quiz');

    // Good to do error checking, make sure we managed to get something
    if (quiz)
    {
        if (count < limit)
        {
            // Create a new <p> element
            var newQ = document.createElement('p');
            newQ.innerHTML = 'Question ' + (count + 1);

            // Create the new text box
            var newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.name = 'questions[]';

            // Good practice to do error checking
            if (newInput && newQ)
            {
                // Add the new elements to the form
                quiz.appendChild(newQ);
                quiz.appendChild(newInput);
                // Increment the count
                count++;
            }

        }
        else
        {
            alert('The maximum amount of questions is ' + count);
        }
    }
}