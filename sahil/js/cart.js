var maxItemInCart = 6;

cart = document.getElementById("cart");
cart.style.display = "none";

var book_order = document.getElementById('btn-order');
book_order.addEventListener('click',place_order);
var totalItems = 10;
cartArray = [];

function updateTotalAmount(){
    var totalAmountToPay = 0

    Array.from(cartArray).forEach((element)=>{
        totalAmountToPay += element.price*element.q;
    });
    document.getElementById("total-amount").textContent = "Rs." + totalAmountToPay;
}

updateTotalAmount();


function openCart(val){

    if(val) {
        cart.style.display = "initial";
        document.body.style.overflow = "hidden";
    }
    else{
        cart.style.display = "none";
        document.body.style.overflow = "visible";
    }
    if(cartArray.length>0) document.getElementById("cart-items").childNodes[0].textContent = "";
    else document.getElementById("cart-items").childNodes[0].textContent = "Your Cart Is Empty";
    
    updateTotalAmount();
}

var foodItems = 
[
    {
        id: "fd-1",
        name: "Chicken",
        price: 180,
    },
    {
        id: "fd-2",
        name: "Momos",
        price: 90,
    },
    {
        id: "fd-3",
        name: "Ramen",
        price: 150,
    },
    {
        id: "fd-4",
        name: "Pizza",
        price: 280,
    },
    {
        id: "fd-5",
        name: "Samosa",
        price: 70,
    },
    {
        id: "fd-6",
        name: "Sushi",
        price: 190,
    },
    {
        id: "fd-7",
        name: "Burger",
        price: 80,
    },
    {
        id: "fd-8",
        name: "Meatballs",
        price: 220,
    },
    {
        id: "fd-9",
        name: "Brownie",
        price: 110,
    },
    {
        id: "fd-10",
        name: "Waffles",
        price: 89,
    },
];


// Adding food to cart
function Food(name, price){
    totalItems++;
    this.id = "fd-"+totalItems;
    this.name = name;
    this.price = price;
};


function cartElement(id, name, price){
    this.id = id;
    this.name = name;
    this.price = price;
    this.q = 1;
};


function changeBubble(a){
    var bubble = a.parentElement.parentElement.firstElementChild.getElementsByClassName("bubble")[0];
    bubble.style.display = "initial";
    var bubbleValue = parseInt(bubble.textContent);
    if(Number.isInteger(bubbleValue)){
        if(bubbleValue<=(maxItemInCart-1))
        bubble.innerHTML = bubbleValue+1;
    }
    else{
        bubble.innerHTML = 1;
    }
}

function btnPopFX(a, c){
    if(c)
    a.style.transform = "scale(1.1)";
    else
    a.style.transform = "scale(1)";
}



function searchItem(idKey, myArray){
    for (var i=0; i < myArray.length; i++) {
        if (myArray[i].id === idKey) {
            return myArray[i];
        }
    }
};

function addItem(a){

    changeBubble(a);
    a.style.transform = "scale(0.9)";
    setTimeout(() => {
        a.style.transform = "scale(1.1)";
    }, 100);

    var item = searchItem(a.parentElement.parentElement.id, foodItems);

    var present = false;
    if(cartArray.length !=0){
        for(var i=0; i<cartArray.length; i++){
            if(item.id != cartArray[i].id){
                present = false;
            }
            else{
                present = true;
                break;
            }
        }
    }
    
    if(present){
        if(cartArray[i].q<=(maxItemInCart-1)) cartArray[i].q +=1;

        var itemPresent_quantity = document.getElementById("cart-items").childNodes;
        for(var i=0; i<itemPresent_quantity.length; i++){
            if("cart-"+item.id == itemPresent_quantity[i].id){
                var presetElement = itemPresent_quantity[i].getElementsByClassName("item-quantity")[0];
                console.log("hehe", presetElement);
                presetElement_q = parseInt(presetElement.textContent);

                if(presetElement_q<=(maxItemInCart-1)) presetElement.innerHTML = presetElement_q+1;

            }
        }
    }
    else{
        var cartItem = new cartElement(item.id, item.name, item.price);
        cartArray.push(cartItem);
    
        var parentitem = document.createElement("div"); 
        parentitem.id = "cart-"+cartItem.id; 
        parentitem.classList.add("item");  
        var itemName = document.createElement("div");
        itemName.classList.add("item-name");
        var itemPrice = document.createElement("div");
        itemPrice.classList.add("item-price");
        var itemQuantity = document.createElement("div");
        itemQuantity.classList.add("item-quantity");
        var deleteBtn = document.createElement("a");
        deleteBtn.addEventListener("click", function(){
            removeItem(this);
        });
        deleteBtn.classList.add("item-delete");
    
        itemName.appendChild(document.createTextNode(cartItem.name));
        itemPrice.appendChild(document.createTextNode(cartItem.price + "/-"));
        itemQuantity.appendChild(document.createTextNode(cartItem.q));
        deleteBtn.appendChild(document.createTextNode("Delete"));
        parentitem.appendChild(itemQuantity);
        parentitem.appendChild(itemName);
        parentitem.appendChild(itemPrice);
        parentitem.appendChild(deleteBtn);
    
        document.getElementById("cart-items").appendChild(parentitem);
    }

    updateCartIconBubble();
    
}

function updateCartIconBubble(){
    var cartIcon = document.getElementsByClassName("btn-cart-open")[0];
    if(cartArray.length>0){
        cartIcon.classList.add("cart-has-items");
    }
    else{
        cartIcon.classList.remove("cart-has-items");
    }

    var bg = document.getElementsByClassName("bg")[0];
    bg.style.transform = "scale(1.2)";
    setTimeout(() => {
        bg.style.transform = "scale(1)";
    }, 100);

}

function removeItem(a){
    

    var itemID = a.parentElement.id;

    var mainDish =  document.getElementById("mainDish-items").childNodes;
    var dessert =  document.getElementById("dessert-items").childNodes;

    var menuPresent = false;

    for(var i=0; i<mainDish.length; i++){
        if(itemID == "cart-"+mainDish[i].id){
            // console.log("ggg", mainDish[i].getElementsByClassName("image-container")[0].getElementsByClassName("bubble")[0].textContent);
            mainDish[i].getElementsByClassName("image-container")[0].getElementsByClassName("bubble")[0].textContent = "0";
            mainDish[i].getElementsByClassName("image-container")[0].getElementsByClassName("bubble")[0].style.display = "none";
        }
    }
    for(var i=0; i<dessert.length; i++){
        if(itemID == "cart-"+dessert[i].id){
            // console.log("ggg", mainDish[i].getElementsByClassName("image-container")[0].getElementsByClassName("bubble")[0].textContent);
            dessert[i].getElementsByClassName("image-container")[0].getElementsByClassName("bubble")[0].textContent = "0";
            dessert[i].getElementsByClassName("image-container")[0].getElementsByClassName("bubble")[0].style.display = "none";
        }
    }


    var elemToBeDeleted = a.parentElement;
    elemToBeDeleted.remove();

    var cartPresent = false;
    if(cartArray.length !=0){
        for(var i=0; i<cartArray.length; i++){
            if(itemID != "cart-"+cartArray[i].id){
                cartPresent = false;
            }
            else{
                cartPresent = true;
                break;
            }
        }
        if(cartPresent) {
            cartArray.splice(i, 1);
            updateTotalAmount();
        }
    }

    if(cartArray.length>0) document.getElementById("cart-items").childNodes[0].textContent = "";
    else document.getElementById("cart-items").childNodes[0].textContent = "Your Cart Is Empty";


    updateCartIconBubble();

}

function place_order(){

    if(cartArray.length>0){

        Swal.fire({
            title: 'Payment Details',
            input: 'text',
            inputLabel: 'Enter your UPI ID',
            showCancelButton: true,
            allowOutsideClick: false
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Order Placed!',
                    text: 'Your order has been placed successfully',
                    icon: 'success',
                    confirmButtonText: 'Proceed',
                    allowOutsideClick: false
                  }).then((result) => {
                    if (result.isConfirmed) {

                        // SAHITHI SAHITHI SAHITHI
                        //
                        // Add your code to submit the cart items HERE
                        //


                        location.reload();
                    }
                  })
            }
          })
        
        // document.getElementById('cartarray').value = JSON.stringify(cartArray);
        // document.getElementById('form_order').submit();
    }
    
}

