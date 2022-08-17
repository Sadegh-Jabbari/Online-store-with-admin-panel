$(function () {

    // Numbers
    $(".number").click(function () {
        let result_input = $("#result").val();
        let solution_input = $("#solution").val();
        let thisNumber = $(this).text();
        let last_char = solution_input.charAt(solution_input.length - 1);
        if (result_input === "0") {
            $("#result").val(thisNumber);
        } else if (solution_input !== '' && last_char !== "=") {
            result_input = '';
            result_input = result_input + thisNumber;
            $("#result").val(result_input);
        } else if (solution_input !== '' && last_char === "=") {
            $("#solution").val('');
            result_input = '';
            result_input = result_input + thisNumber;
            $("#result").val(result_input);
        } else {
            result_input = result_input + thisNumber;
            $("#result").val(result_input);
        }
    });

    // Negative
    $(".negative").on("click", function () {
        let result_input = $("#result").val();
        if (result_input.includes('-') == false) {
            $("#result").val('-' + result_input);
        } else {
            $("#result").val(result_input.replace('-', ''));
        }
    });

    // Decimal
    $(".decimal").on("click", function () {
        let result_input = $("#result").val();
        if (result_input.includes('.') == false) {
            $("#result").val(result_input + '.');
        }
    });

    // Operators
    $(".operator").on("click", function () {
        let result_input = $("#result").val();
        let solution_input = $("#solution").val();
        let operator = $(this).text();
        let solution = result_input + operator;
        // let len = solution_input.length();
        // let last_char = solution_input[solution_input.length - 1];
        let last_char = solution_input.charAt(solution_input.length - 1);
        if (last_char == '+' || last_char == '-' || last_char == '×' || last_char == '÷' || last_char == '=') {
            let number_one = parseFloat(solution_input);
            let number_two = parseFloat(result_input);
            let result;
            switch (last_char) {
                case "+":
                    result = number_one + number_two;
                    break;
                case "-":
                    result = number_one - number_two;
                    break;
                case "×":
                    result = number_one * number_two;
                    break;
                case "÷":
                    result = number_one / number_two;
                    break;
                case "=":
                    $("#solution").val(solution);
                    break;
            }
            $("#solution").val(result + operator);
            $("#result").val("0");
        } else {
            $("#solution").val(solution);
        }
    });

    // Fraction (1/x)
    $(".fraction").on("click", function () {
        let result_input = $("#result").val();
        let solution = "1/" + result_input;
        let result = 1 / parseFloat(result_input);
        $("#solution").val(solution);
        $("#result").val(result);
    });

    // Power of 2
    $(".power2").on("click", function () {
        let result_input = $("#result").val();
        let solution = result_input + "^ 2";
        let result = Math.pow(parseFloat(result_input), 2);
        $("#solution").val(solution);
        $("#result").val(result);
    });

    // Square root
    $(".square-root").on("click", function () {
        let result_input = $("#result").val();
        let solution_input = $("#solution").val();
        let sqrt = Math.sqrt(result_input);
        let sqrt_result = "√(" + result_input + ")";
        let last_char = solution_input.charAt(solution_input.length - 1);
        let number_one = parseFloat(solution_input);
        let result;
        if (last_char == '+' || last_char == '-' || last_char == '×' || last_char == '÷' || last_char == '=') {
            switch (last_char) {
                case "+":
                    result = number_one + sqrt;
                    $("#solution").val(result + "+");
                    break;
                case "-":
                    result = number_one - sqrt;
                    $("#solution").val(result + "-");
                    break;
                case "×":
                    result = number_one * sqrt;
                    $("#solution").val(result + "×");
                    break;
                case "÷":
                    result = number_one / sqrt;
                    $("#solution").val(result + "÷");
                    break;
                case "=":
                    $("#solution").val(sqrt_result);
                    break;
            }
            $("#result").val(sqrt);
        } else {
            $("#solution").val(sqrt_result);
            $("#result").val(sqrt);
        }
    });

    // Percentage
    $(".percentage").on("click", function () {
        let result_input = $("#result").val();
        let solution_input = $("#solution").val();
        let number_one = parseFloat(solution_input);
        let number_two = parseFloat(result_input);
        let percentage = (number_one * number_two) / 100;
        let last_char = solution_input.charAt(solution_input.length - 1);
        let result;
        if (last_char == '+' || last_char == '-' || last_char == '×' || last_char == '÷' || last_char == '=') {
            switch (last_char) {
                case "+":
                    result = number_one + percentage;
                    $("#solution").val(result + "+");
                    break;
                case "-":
                    result = number_one - percentage;
                    $("#solution").val(result + "-");
                    break;
                case "×":
                    result = number_one * percentage;
                    $("#solution").val(result + "×");
                    break;
                case "÷":
                    result = number_one / percentage;
                    $("#solution").val(result + "÷");
                    break;
                case "=":
                    // alert(result_input/100);
                    $("#solution").val(result_input+"%");
                    percentage = result_input/100;
                    break;
            }
            $("#result").val(percentage);
        } else {
            $("#solution").val(result_input+"%");
            $("#result").val(number_two/100);
        }
    });

        // Result
    $(".result").on("click", function () {
        let result_input = $("#result").val();
        let solution_input = $("#solution").val();
        let last_char = solution_input.charAt(solution_input.length - 1);
        let number_one = parseFloat(solution_input);
        let number_two = parseFloat(result_input);
        let result;
        if (last_char == '+' || last_char == '-' || last_char == '×' || last_char == '÷') {
            switch (last_char) {
                case "+":
                    result = number_one + number_two;
                    break;
                case "-":
                    result = number_one - number_two;
                    break;
                case "×":
                    result = number_one * number_two;
                    break;
                case "÷":
                    result = number_one / number_two;
                    break;
            }
            $("#solution").val(solution_input + result_input + "=");
            $("#result").val(result);
            $(".recent-actions").prepend("<li class='recent-item'><p class='sol'><p class='res'></p></p></li>");
            $(".sol").text(solution_input + result_input + "=");
            $(".res").text(result);
        }
    });

    // History
    $(".recent-actions").on("click", function () {
        let sol = $(".sol").text();
        let res = $(".res").text();
        $("#solution").val(sol);
        $("#result").val(res);
    });

    // Backspace
    $(".backspace").on("click", function () {
        let result_input = $("#result").val();
        let length = result_input.length - 1;
        result_input = result_input.slice(0, length)
        $("#result").val(result_input);
        if (result_input == '') {
            $("#result").val("0");
        }
    });

    // Clear Entry
    $(".clear-entry").on("click", function () {
        $("#result").val("0");
    });

    // Dark Mode
    $("#dark-mode").on("click", function () {
        if ($("#dark-mode").is(":checked")) {
            $("body").addClass('dark');
            $(".history span").addClass('dark');
            $(".recent-actions").addClass('dark');
            $("input").addClass('dark');
            $(".none-numerical:not(.result)").addClass('dark');
            $(".numberical").addClass('dark');
        } else {
            $("*").removeClass('dark');
        }
    });
});

// // NUmbers
//
// function zero(){
//     let result = document.getElementById('result').value;
//     if (result == 0) {
//         document.getElementById('result').value='0';
//     } else {
//         document.getElementById('result').value=document.getElementById('result').value+'0';
//     }
// }
// function one(){
//     let result = document.getElementById('result').value;
//     if (result == 0) {
//         document.getElementById('result').value='1';
//     } else {
//         document.getElementById('result').value=document.getElementById('result').value+'1';
//     }
// }
// function two(){
//     if (document.getElementById('result').value == 0) {
//         document.getElementById('result').value='2';
//     } else {
//         document.getElementById('result').value=document.getElementById('result').value+'2';
//     }
// }
// function three(){
//     if (document.getElementById('result').value == 0) {
//         document.getElementById('result').value='3';
//     } else {
//         document.getElementById('result').value=document.getElementById('result').value+'3';
//     }
// }
// function four(){
//     if (document.getElementById('result').value == 0) {
//         document.getElementById('result').value='4';
//     } else {
//         document.getElementById('result').value=document.getElementById('result').value+'4';
//     }
// }
// function five(){
//     if (document.getElementById('result').value == 0) {
//         document.getElementById('result').value='5';
//     } else {
//         document.getElementById('result').value=document.getElementById('result').value+'5';
//     }
// }
// function six(){
//     if (document.getElementById('result').value == 0) {
//         document.getElementById('result').value='6';
//     } else {
//         document.getElementById('result').value=document.getElementById('result').value+'6';
//     }
// }
// function seven(){
//     if (document.getElementById('result').value == 0) {
//         document.getElementById('result').value='7';
//     } else {
//         document.getElementById('result').value=document.getElementById('result').value+'7';
//     }
// }
// function eight(){
//     if (document.getElementById('result').value == 0) {
//         document.getElementById('result').value='8';
//     } else {
//         document.getElementById('result').value=document.getElementById('result').value+'8';
//     }
// }
// function nine(){
//     if (document.getElementById('result').value == 0) {
//         document.getElementById('result').value='9';
//     } else {
//         document.getElementById('result').value=document.getElementById('result').value+'9';
//     }
// }
// function decimal(){
//     let result = document.getElementById('result').value;
//     if (result.includes('.') == false) {
//         document.getElementById('result').value=document.getElementById('result').value+'.';
//     }
// }
// function negative(){
//     let result = document.getElementById('result').value;
//     if (result.includes('-') == false) {
//         document.getElementById('result').value='-'+document.getElementById('result').value;
//     } else {
//         document.getElementById('result').value= result.replace('-','');
//     }
// }
// // Operands
//
// function divison(){
//     document.getElementById('solution').value=document.getElementById('solution').value+document.getElementById('result').value+'/';
//     document.getElementById('result').value=null;
// }
// function multiply(){
//     document.getElementById('solution').value=document.getElementById('solution').value+document.getElementById('result').value+'*';
//     document.getElementById('result').value=null;
// }
// function subtraction(){
//     document.getElementById('solution').value=document.getElementById('solution').value+document.getElementById('result').value+'-';
//     document.getElementById('result').value=null;
// }
// function sum(){
//     document.getElementById('solution').value=document.getElementById('solution').value+document.getElementById('result').value+'+';
//     document.getElementById('result').value=null;
// }
// function calc(){
//     // let a = document.getElementById('solution').value;
//     // let b = eval(a);
//     // document.getElementById('result').value=b;
// }
//
// // Operations
//
// function backspace(){
//     let number = document.getElementById('result').value;
//     let length = number.length - 1;
//     document.getElementById('result').value = number.slice(0, length);
// }
