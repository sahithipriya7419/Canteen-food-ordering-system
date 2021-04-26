var ordersPage = document.getElementById("pg-orders");
var allItemsPage = document.getElementById("pg-all-items");
var addNewItemPage = document.getElementById("pg-add-items");
var sidebar_orders = document.getElementById("sidebar-orders");
var sidebar_allItems = document.getElementById("sidebar-all-items");
var sidebar_addNewItem = document.getElementById("sidebar-add-new-item");

ordersPage.style.display = "initial";
allItemsPage.style.display = "none";
addNewItemPage.style.display = "none";
sidebar_orders.classList.add("active");


var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
var resetImage = function() {
	var image = document.getElementById('output');
	image.src = "";
};

var sidebar = function(index) {
    switch (index){
        case 0:
            ordersPage.style.display = "initial";
            addNewItemPage.style.display = "none";
            allItemsPage.style.display = "none";
            sidebar_orders.classList.add("active");
            sidebar_allItems.classList.remove("active");
            sidebar_addNewItem.classList.remove("active");
            break;
        case 1:
            ordersPage.style.display = "none";
            addNewItemPage.style.display = "none";
            allItemsPage.style.display = "initial";
            sidebar_orders.classList.remove("active");
            sidebar_allItems.classList.add("active");
            sidebar_addNewItem.classList.remove("active");
            break;
        case 2:
            ordersPage.style.display = "none";
            addNewItemPage.style.display = "initial";
            allItemsPage.style.display = "none";
            sidebar_orders.classList.remove("active");
            sidebar_allItems.classList.remove("active");
            sidebar_addNewItem.classList.add("active");
            break;
    }

}

orderModal = document.getElementById("orders-modal");

function openCart(val)
{

    if(val) 
    {
        orderModal.style.display = "initial";
        document.body.style.overflow = "hidden";
    }
    else
    {
        orderModal.style.display = "none";
        document.body.style.overflow = "visible";
        window.location = `/sahil/admin.php`;
    }
}

var openCart = document.getElementsByClassName('openCart');
    Array.from(openCart).forEach((element) => {
      element.addEventListener("click", (e) => {

        tr = e.target.parentNode.parentNode;
        cart_id = tr.getElementsByTagName("td")[2].innerText;
        // open_cart_id.value = cart_id;
        
        window.location = `/sahil/admin.php?cart_id=${cart_id}`;
        orderModal.style.display = "initial";
        document.body.style.overflow = "hidden";

    })
})


