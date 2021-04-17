cart = document.getElementById("cart");
cart.style.display = "none";


function openCart(val){
    if(val) cart.style.display = "initial";
    else cart.style.display = "none";
}


var totalItems = 10;
cartArray = [];
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

function searchItem(idKey, myArray){
    for (var i=0; i < myArray.length; i++) {
        if (myArray[i].id === idKey) {
            return myArray[i];
        }
    }
};

function addItem(a){
    var item = searchItem(a.parentElement.parentElement.id, foodItems);
    var cartItem = new cartElement(item.id, item.name, item.price);
    cartArray.push(cartItem);

    var parentitem = document.createElement("div");  
    parentitem.classList.add("item");  
    var itemName = document.createElement("div");
    itemName.classList.add("item-name");
    var itemPrice = document.createElement("div");
    itemPrice.classList.add("item-price");
    var itemQuantity = document.createElement("div");
    itemQuantity.classList.add("item-quantity");
    var deleteBtn = document.createElement("a");
    deleteBtn.classList.add("item-delete");

    itemName.appendChild(document.createTextNode(cartItem.name));
    itemPrice.appendChild(document.createTextNode(cartItem.price));
    itemQuantity.appendChild(document.createTextNode(cartItem.q));
    deleteBtn.appendChild(document.createTextNode("Delete"));
    parentitem.appendChild(itemName);
    parentitem.appendChild(itemPrice);
    parentitem.appendChild(itemQuantity);
    parentitem.appendChild(deleteBtn);

    document.getElementById("cart-items").appendChild(parentitem);
    console.log(cartArray);
}

