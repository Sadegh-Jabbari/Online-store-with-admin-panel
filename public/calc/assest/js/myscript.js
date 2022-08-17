$(function () {
    $(".number").click(function () {
       // alert($("#result").val());
       var result = $("#result").val();
       var thisNumber = $(this).text();
        // alert($(this).text());
       if(result == 0){
           $("#result").val(thisNumber);
       }else {
           result = result + thisNumber;
           $("#result").val(result);
       }
    });
    // $(".number").on("click",function () {
    //
    // });
});
function backspace(){
    var number = document.getElementById('result').value;
    var length = number.length - 1;
    document.getElementById('result').value = number.slice(0, length);
}
