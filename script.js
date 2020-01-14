// // <!--
// // Rajpreet Dhaliwal
// // Assignment: Cupcake
// // Url: https://github.com/rdhaliwal6/cupcake
// // -->
// document.getElementById("cupcake-form").onsubmit
//     = validate;
//
// function validate() {
//
//     var isValid = true;
//
//     //Clear all error messages
//     var errors = document.getElementsByClassName("err");
//     for (var i=0; i<errors.length; i++) {
//         errors[i].style.visibility = "hidden";
//     }
//
//     //Check name
//     var name =
//         document.getElementById("name").value;
//     if (name === "") {
//         var errName = document.getElementById("err-name");
//         errName.style.visibility = "visible";
//         isValid = false;
//     }
//
//     //Check for cupcake
//     var flavor = document.getElementsByName("flavors[]");
//     var numflavor = 0;
//     for (i=0; i < flavor.length; i++) {
//         if (flavor[i].checked) {
//             flavor++;
//         }
//     }
//
//     if (numflavor === 0) {
//         var errFlavors =
//             document.getElementById("err-flavors");
//         errFlavors.style.visibility = "visible";
//         isValid = false;
//     }
//
//     return isValid;
// }