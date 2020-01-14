// <!--
// Rajpreet Dhaliwal
// Assignment: Cupcake
// Url: https://github.com/rdhaliwal6/cupcake
// -->
document.getElementById("cupcake-form").onsubmit
    = validate;

function validate() {

    var isValid = true;

    //Clear all error messages
    var errors = document.getElementsByClassName("err");
    for (var i=0; i<errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    //Check name
    var name =
        document.getElementById("name").value;
    if (name == "") {
        var errName = document.getElementById("err-name");
        errName.style.visibility = "visible";
        isValid = false;
    }
    return isValid;
}