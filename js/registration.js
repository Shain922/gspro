var LoginForm = document.getElementById("loginForm");
var RegForm = document.getElementById("RegForm");
var indicator = document.getElementById("indicator");

function user() {
 RegForm.style.transform = "translateX(0px)";
 LoginForm.style.transform = "translateX(0px)";
 indicator.style.transform = "translateX(100px)";
}

function admin() {
 RegForm.style.transform = "translateX(300px)";
 LoginForm.style.transform = "translateX(300px)";
 indicator.style.transform = "translateX(0px)";
}
