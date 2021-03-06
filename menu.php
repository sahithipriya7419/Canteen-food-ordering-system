<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1.0">
    <title>Menu</title>


    <!-- bootstrap css file -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- font awesome icons -->
    <link rel="stylesheet" href="./css/all.min.css">

    <!-- custom css file -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/menu.css">
    
    <!-- global css file -->
    <link rel="stylesheet" href="./css/global.css">
    
    <!-- responsive css file -->
    <link rel="stylesheet" href="./css/resp.css">


    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


</head>
<body>


  <!-- ========== Start Kart =========== -->

  <div id="cart" class="cart">
    <div class="cart-body">
      <div class="title">Your Cart</div>
      <div class="cross">
        <a onclick="openCart(0)"><i class="fas fa-times"></i></a>
      </div>
      <div id="cart-items" class="cart-items">
        Your Cart Is Empty
        <!-- <div class="item">
          <div class="item-name">Momo</div>
          <div class="item-price">90</div>
          <div class="item-quantity">4</div>
          <a href="" class="item-delete">Delete</a>
        </div> -->
      </div>
      <div class="button">
        <div class="total-amount-text">Total Amount: </div>
        <div id="total-amount" class="total-amount-value">Rs. 9999</div>
        <button id="btn-order" onclick="" class="btn-place-order">Place Order</button>
      </div>
    </div>
  </div>

  <div class="cart-icon">
    <div onclick="openCart(1)"  class="bg">
      <a class="btn-cart-open"><i class="fas fa-shopping-cart"></i></a>
    </div>
  </div>

  <!-- ========== End Kart =========== -->


  <!-- ===== Navbar ====== -->

  <header class="navbar-area " id="navbar-area">
    <div class="main-menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Canteen</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="me-auto"></div>
            <div class="navbar-nav">

              <!-- <a class="nav-link" href="">Contact</a> -->
              <!-- <a class="nav-link" style="padding-right: 0;" href=""><i class="fas fa-user"></i>Profile</a> -->

              <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-user"></i>Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <div><a class="dropdown-item disabled" href="" style="user-select: none;">
                    <?php
                          include 'backend/dbconnect.php';
                          session_start();
                          echo $_SESSION['Username'];
                          

                    ?>
                  
                  </a></div>
                  <div><hr class="dropdown-divider"></div>
                  <div><a class="dropdown-item" href="login.html"><i class="fas fa-sign-out-alt"></i>Log out
          </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- ============== Start Main Area =========== -->

  <main id="" class="site-main">

    <!-- ========== Menu Banner ============ -->
    <div class="menu-banner-area">
      <div class="title">Start Ordering Food</div>
      <div class="sub-title">Free home Delivery</div>
    </div>


    <!-- ========== Menu Items ========= -->
    <div class="menu-area">
      <div class="category-title">Main Dish</div>
        <div id="mainDish-items" class="container">

            <div id="fd-1" class="item">
              <div class="image-container">
                <img class="card-img" src="./img/Food/chicken-wings.jpg">
                <span class="bubble"></span>
              </div>
                <div class="card-content">
                    <div class="card-title">Chicken</div>
                    <div class="card-des">yumm yum chimken</div>
                </div>
                <div class="addtocart">
                  <div class="price">Rs. 180</div>
                  <a onclick="addItem(this)" onmouseover="btnPopFX(this, 1)" onmouseout="btnPopFX(this, 0)" class="btn-addtocart">Add</a>
              </div>
            </div>


            <div id="fd-2" class="item">
              <div class="image-container">
                <img class="card-img" src="./img/Food/momos.jpg">
                <span class="bubble"></span>

              </div>
                <div class="card-content">
                    <div class="card-title">Momos</div>
                    <div class="card-des">yumm yum momos</div>
                </div>
                <div class="addtocart">
                  <div class="price">Rs. 90</div>
                  <a onclick="addItem(this)" onmouseover="btnPopFX(this, 1)" onmouseout="btnPopFX(this, 0)" class="btn-addtocart">Add</a>
              </div>
            </div>


            <div id="fd-3" class="item">
              <div class="image-container">
                <img class="card-img" src="./img/Food/ramen.jpg">
                <span class="bubble"></span>

              </div>
                <div class="card-content">
                    <div class="card-title">Ramen</div>
                    <div class="card-des">yumm yum ramen</div>
                </div>
                <div class="addtocart">
                  <div class="price">Rs. 150</div>
                  <a onclick="addItem(this)" onmouseover="btnPopFX(this, 1)" onmouseout="btnPopFX(this, 0)"  class="btn-addtocart">Add</a>
              </div>
            </div>
            <div id="fd-4" class="item">
              <div class="image-container">
                <img class="card-img" src="./img/Food/pizza.jpg">
                <span class="bubble"></span>

              </div>
                <div class="card-content">
                    <div class="card-title">Pizza</div>
                    <div class="card-des">yumm yum pizza</div>
                </div>
                <div class="addtocart">
                  <div class="price">Rs. 280</div>
                  <a onclick="addItem(this)" onmouseover="btnPopFX(this, 1)" onmouseout="btnPopFX(this, 0)" class="btn-addtocart">Add</a>
              </div>
            </div>
            <div id="fd-5" class="item">
              <div class="image-container">
                <img class="card-img" src="./img/Food/samosa.jpg">
                <span class="bubble"></span>

              </div>
                <div class="card-content">
                    <div class="card-title">Samosa</div>
                    <div class="card-des">yumm yum samosa</div>
                </div>
                <div class="addtocart">
                  <div class="price">Rs. 70</div>
                  <a onclick="addItem(this)" onmouseover="btnPopFX(this, 1)" onmouseout="btnPopFX(this, 0)" class="btn-addtocart">Add</a>
              </div>
            </div>
            
            <div id="fd-6" class="item">
              <div class="image-container">
                <img class="card-img" src="./img/Food/sushi.jpg">
                <span class="bubble"></span>

              </div>
                <div class="card-content">
                    <div class="card-title">Sushi</div>
                    <div class="card-des">yumm yum sushi</div>
                </div>
                <div class="addtocart">
                  <div class="price">Rs. 190</div>
                  <a onclick="addItem(this)" onmouseover="btnPopFX(this, 1)" onmouseout="btnPopFX(this, 0)" class="btn-addtocart">Add</a>
              </div>
            </div>
            <div id="fd-7" class="item">
              <div class="image-container">
                <img class="card-img" src="./img/Food/burger.jpg">
                <span class="bubble"></span>

              </div>
                <div class="card-content">
                    <div class="card-title">Burger</div>
                    <div class="card-des">yumm yum burger</div>
                </div>
                <div class="addtocart">
                  <div class="price">Rs. 80</div>
                  <a onclick="addItem(this)" onmouseover="btnPopFX(this, 1)" onmouseout="btnPopFX(this, 0)" class="btn-addtocart">Add</a>
              </div>
            </div>
            <div id="fd-8" class="item">
              <div class="image-container">
                <img class="card-img" src="./img/Food/meatball.jpg">
                <span class="bubble"></span>

              </div>
                <div class="card-content">
                    <div class="card-title">Meatballs</div>
                    <div class="card-des">yumm yum meatball</div>
                </div>
                <div class="addtocart">
                  <div class="price">Rs. 220</div>
                  <a onclick="addItem(this)" onmouseover="btnPopFX(this, 1)" onmouseout="btnPopFX(this, 0)" class="btn-addtocart">Add</a>
              </div>
            </div>
        </div>


      <div class="category-title">Dessert</div>

        <div id="dessert-items" class="container">
          <div id="fd-9" class="item">
            <div class="image-container">
              <img class="card-img" src="./img/Food/brownie.jpg">
              <span class="bubble"></span>

            </div>
            <div class="card-content">
                <div class="card-title">Brownie</div>
                <div class="card-des">yumm yum brownie</div>
            </div>
            <div class="addtocart">
              <div class="price">Rs. 110</div>
              <a onclick="addItem(this)" onmouseover="btnPopFX(this, 1)" onmouseout="btnPopFX(this, 0)"  class="btn-addtocart">Add</a>
            </div>
          </div>

          <div id="fd-10" class="item">
            <div class="image-container">
              <img class="card-img" src="./img/Food/waffles.jpg">
              <span class="bubble"></span>

            </div>
              <div class="card-content">
                  <div class="card-title">Waffles</div>
                  <div class="card-des">yumm yum waffles</div>
              </div>
              <div class="addtocart">
                <div class="price">Rs. 89</div>
                <a onclick="addItem(this)" onmouseover="btnPopFX(this, 1)" onmouseout="btnPopFX(this, 0)" class="btn-addtocart">Add</a>
              </div>
          </div>
        </div>
    </div>

  </main>
  <!-- ============== End Main Area =========== -->

  <!-- ============== Form for sending cart items =========== -->
  <form style="display:none" method="POST" action="backend/cart.php" id="form_order">
    <input type="text" name="cartarray" id="cartarray">
  </form>
  
  <!-- ============== Start Footer Area ================ -->

  <footer class="footer-area text-center text-white">
    <div class="container p-4"></div>
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      ?? 2020 Copyright:
      <a class="text-login" href="">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>

  <!-- ============== End Footer Area ================ -->


    <!-- bootstrap js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>


    <!--  custom js file  -->
    <script src="./js/main.js"></script>
    <script src="./js/cart.js"></script>
    
</body>
</html>