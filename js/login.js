reg = document.getElementById("reg-form");
login = document.getElementById("login-form");

reg.style.display = "none";


function displayLoginForm(){
    reg.style.display = "none";
    login.style.display = "initial";

}
function displayRegForm(){
    reg.style.display = "initial";
    login.style.display = "none";
}
