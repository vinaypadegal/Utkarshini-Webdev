var number_of_qinps = document.querySelectorAll(".qinp").length;
var number_of_inputs = document.querySelectorAll(".qinp input").length;
var number_of_prevbtns = document.querySelectorAll(".prevbtn").length;
var number_of_nextbtns = document.querySelectorAll(".nextbtn").length - 1;  // subtracted 1 from this as last button that uses this class is submit button
var number_of_slidecontainers = document.querySelectorAll(".slide-container").length;

var current_question = 1;
var total_number_of_questions = 15;
var number_of_questions_attempted = 0;
var attempted = []
var user_answers = []
var solutions = [3,2,4,2,1,1,4,2,1,3]

//fill up attempted and user_answers arrays with default values
for(var i = 0; i < total_number_of_questions; ++i){
    attempted.push(false);
    user_answers.push(0);
}


// adding click event listeners to all the MCQ option divs 
for(var i = 0; i < number_of_qinps; ++i){
    document.querySelectorAll(".qinp")[i].addEventListener("click", function(){
        input = this.firstElementChild.firstElementChild;
        input.click();
    })
}

// adding click functionality to previous button
for(var i = 0; i < number_of_prevbtns; ++i){
    document.querySelectorAll(".prevbtn")[i].addEventListener("click", function(){
        new_question_value = current_question == 1 ? total_number_of_questions : current_question - 1;
        document.getElementById("qtitle").innerHTML = "Question " + new_question_value + "/" + total_number_of_questions;
        current_question = new_question_value;
    })
}

// adding click functionality to next button
for(var i = 0; i < number_of_nextbtns; ++i){
    document.querySelectorAll(".nextbtn")[i].addEventListener("click", function(){
        new_question_value = current_question == total_number_of_questions ? 1 : current_question + 1;
        document.getElementById("qtitle").innerHTML = "Question " + new_question_value + "/" + total_number_of_questions;
        current_question = new_question_value;
    })
}


// handle function to implement MCQ option click (selected option div turns green, other divs turn white)
function handle(name){
    inp_ops = document.getElementsByName(name);
    for(var rdb in inp_ops){
        if(inp_ops[rdb].checked == true){
            inp_ops[rdb].parentElement.parentElement.style.backgroundColor = "rgb(66, 204, 66)";
            let q_ind = name[1] - 1;    
            if(name == "q10")   q_ind = 9;  // as final MCQ option question has 2 digit question number
            if(attempted[q_ind] == false){
                attempted[q_ind] = true;
                ++number_of_questions_attempted;
                let new_progbar_value = (number_of_questions_attempted/total_number_of_questions) * 100;
                document.getElementById("progbar").setAttribute("value", new_progbar_value + "");
            }
            option_num = inp_ops[rdb].id[3] - 0;    // find option number selected
            if(name == "q10")   option_num = inp_ops[rdb].id[4] - 0;
            user_answers[q_ind] = option_num;

        } else {
            inp_ops[rdb].parentElement.parentElement.style.backgroundColor = "white";
        }
    }   
}


// adding sliding functionality to the range inputs
for(var i = 0; i < number_of_slidecontainers; ++i){
    document.querySelectorAll(".slide-container input")[i].oninput = function() {
        var value = (this.value-this.min)/(this.max-this.min)*100
        this.style.background = 'linear-gradient(to right, rgb(66, 204, 66) 0%, rgb(66, 204, 66) ' + value + '%, aliceblue ' + value + '%, aliceblue 100%)'
        let q_ind = this.id.slice(1,3) - 1;     // as slider questions have 2 digit question numbers
        if(attempted[q_ind] == false){
            attempted[q_ind] = true;
            ++number_of_questions_attempted;
            let new_progbar_value = (number_of_questions_attempted/total_number_of_questions) * 100;
            document.getElementById("progbar").setAttribute("value", new_progbar_value + "");
        }
        user_answers[q_ind] = value/10;
        this.parentElement.lastElementChild.innerHTML = value/10 + "/10";
    };
}


// submit test and move to results page
document.getElementById("test-submit").addEventListener("click", function (){
    if(number_of_questions_attempted < total_number_of_questions){
        alert("Attempt all the questions before submitting!");
    } else {
        if(confirm("Are you sure you want to submit?")){
            // calculate aptitude and verbal scores
            var apt_score = 0;
            var verbal_score = 0;
            for(var i = 0; i < 5; ++i){
                if(user_answers[i] == solutions[i]) ++apt_score;
            }
            for(var i = 5; i < 10; ++i){
                if(user_answers[i] == solutions[i]) ++verbal_score;
            }

            // calculate subject interest probabilities
            var tot_sum = user_answers[10] + user_answers[11] + user_answers[12] + user_answers[13] + user_answers[14];
            var bca = user_answers[10] + user_answers[11] + user_answers[12];
            var bba = user_answers[12] + user_answers[13] + user_answers[14];
            var bcom = user_answers[11] + user_answers[13] + user_answers[14];
            var bms_media = user_answers[13] + user_answers[14] + user_answers[14];
            var bms_mgmt = user_answers[10] + user_answers[11] + user_answers[12] + user_answers[13]; 
            
            var courses = [
                ['Course', 'Recommendation'],
                ['BBA', bba],
                ['BCA', bca],
                ['BCom', bcom],
                ['BMS (Media)', bms_media],
                ['BMS (Mgmt)', bms_mgmt]
            ];

            localStorage.setItem("apt", apt_score);
            localStorage.setItem("verbal", verbal_score);
            localStorage.setItem("courses", JSON.stringify(courses));
            localStorage.setItem("totsum", tot_sum);
            location.href = 'results.html'; 
        }     
    }
})




