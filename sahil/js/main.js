reg = document.getElementById("reg-form");
login = document.getElementById("login-form");
cart = document.getElementById("cart");

cart.style.display = "none";
reg.style.display = "none";

function openCart(val){
    if(val) cart.style.display = "initial";
    else cart.style.display = "none";
}

function displayLoginForm(){
    reg.style.display = "none";
    login.style.display = "initial";

}
function displayRegForm(){
    reg.style.display = "initial";
    login.style.display = "none";
}

