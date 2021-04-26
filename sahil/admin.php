<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1.0">
  <title>Admins</title>


  <!-- bootstrap css file -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">

  <!-- font awesome icons -->
  <link rel="stylesheet" href="./css/all.min.css">

  <!-- custom css file -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/admin.css">

  <!-- global css file -->
  <link rel="stylesheet" href="./css/global.css">

  <!-- responsive css file -->
  <link rel="stylesheet" href="./css/resp.css">


  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">


</head>

<body>

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        ...
      </div>
    </div>
  </div>

  <!-- ============== Start Main Area =========== -->

  <div class="admin-area">
    <div class="admin-container">

      <!-- ======== Start Navbar ========= -->
      <header class="navbar-area ">
        <div class="main-menu">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Canteen</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>
        </div>
      </header>
      <!-- ======== End Navbar ========= -->

      <!-- ============ Start Modal ============== -->

      <div id="orders-modal" class="orders-modal">
        <div class="modal-body">
          <div class="title">Order Preview</div>
          <span id="modal-cart-ID">#2</span>

          <div class="cross">
            <a href="admin.php"><i class="fas fa-times"></i></a>
          </div>
          <div class="heading">
            <div>Quantity</div>
            <div>Item</div>
            <div>Price</div>
            <div>Total Amount</div>
          </div>
          <hr class="head-hr">

          <div id="modal-items" class="modal-items">

            <!-- cart items  -->
            <?php
            include 'backend/dbconnect.php';

            if (isset($_GET['cart_id'])) {
              $id = $_GET['cart_id'];
              $query = "SELECT * from `cart_items` where cart_id=$id";
              $main = mysqli_query($conn, $query);
              $no = 0;
              while ($row = mysqli_fetch_assoc($main)) {

                $no = $no + 1;
                $total = $row['item_quantity'] * $row['item_price'];
                echo "<div class='item'>";
                echo "<div>" . $row['item_quantity'] . "</div>";
                echo "<div>" . $row['item_name'] . "</div>";
                echo "<div>" . $row['item_price'] . '/-' . "</div>";
                echo "<div>" . $total . '/-' . "</div>";
                echo "</div>";
              }
            }


            ?>


          </div>
          <div class="button">
            <div class="title">
              <div class="">Total Sum: </div>
              <div class="total-amount">Rs. 3400/- </div>
            </div>

            <div class="actions">
              <a href="" class="accept"><i class="fas fa-check"></i>Accept</a>
              <a href="" class="decline"><i class="fas fa-times"></i>Decline</a>
            </div>
          </div>
        </div>
      </div>

      <!-- ============ End Modal ============== -->




      <!-- ============ Start Sidebar ============== -->
      <aside class="sidebar">
        <div class="sidebar-header">
          <img src="./img/profile.jpg" alt="profile-pic" class="profile-img">
          <a class="header-name" href="">Sahil Shubham
            <div class="subheader-name">admin</div>
          </a>
        </div>
        <div class="link">
          <a id="sidebar-orders" onclick="sidebar(0)"><i class="fas fa-home"></i>Orders</a>
          <a id="sidebar-all-items" onclick="sidebar(1)"><i class="fas fa-utensils"></i>All Items</a>
          <a id="sidebar-add-new-item" onclick="sidebar(2)"><i class="fas fa-plus"></i>Add New Item</a>
          <a id="sidebar-logout" href="login.html"><i class="fas fa-sign-out-alt"></i>Log Out</a>

        </div>
      </aside>
      <!-- ============ End Sidebar ============== -->


      <div class="content-area">

        <div id="pg-orders" class="pg-orders">

          <div class="welcome">
            <div class="content rounded-3 p-3">
              <h1 class="fs-3">Welcome to Dashboard</h1>
              <p class="mb-0">Hello Jone Doe, welcome to your awesome dashboard!</p>

            </div>
          </div>

          <div class="orders rounded-3 p-3">
            <div class="title fs-3">Orders</div>
            <div class="table-container">
              <table id="orders-table" class="" style="width:100%">
                <thead>
                  <tr>
                    <th>S. No</th>
                    <th>User</th>
                    <th>Cart ID</th>
                    <th>Time / Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  include 'backend/dbconnect.php';
                  $query = "SELECT * from `main_cart`";
                  $main = mysqli_query($conn, $query);
                  $no = 0;
                  while ($row = mysqli_fetch_assoc($main)) {
                    $cart = $row['cart_id'];
                    $sql = "SELECT * from `cart_items` where cart_id=$cart";
                    $result = mysqli_query($conn, $sql);
                    $date = mysqli_fetch_assoc($result);
                    $no = $no + 1;
                    echo "<tr>
                                  <td>" . $no . "</td>
                                  <td>" . $row['username'] . "</td>
                                  <td>" . $row['cart_id'] . "</td>
                                  <td>" . $date['order_time'] . "</td>
                                  <td>
                                    <a class='view-btn openCart'>View</a>
                                  </td>
                                  </tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>

          </div>



        </div>


        <div id="pg-add-items" class="pg-add-items">
          <div class="orders rounded-3 p-3">
            <div class="title fs-3">Add Items</div>
            <div class="add-new-item-form">
              <div class="add-image">

                <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
                <p>
                  <label for="file" style="cursor: pointer;" class="img-placeholder">
                    +
                    <img id="output">
                  </label>
                </p>

              </div>
              <form class="add-info" method="POST" action="backend/add_item.php">
                <div class="input-group">
                  <label for="" class="sr-only">Item Name</label>
                  <input type="text" name="item_name" id="add-item-name" class="add-item-inpt" placeholder="Item Name">
                </div>
                <div class="input-group">
                  <label for="" class="sr-only">Item Amount</label>
                  <input type="number" name="item_price" id="add-item-amount" class="add-item-inpt" placeholder="Item Amount">
                </div>
                <br><input type="reset" onclick="resetImage()" class="form-button" value="Reset">
                <input type="submit" class="form-button" value="Add">
              </form>
            </div>
          </div>
        </div>

        <div id="pg-all-items" class="pg-all-items">
          <div class="orders rounded-3 p-3">
            <div class="title fs-3">All Items</div>
            <div class="table-container">
              <table id="orders-table" class="" style="width:100%">
                <thead>
                  <tr>
                    <th>S No.</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Availabilty</th>
                    <th>Veg / Non Veg</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Chicken</td>
                    <td>180/-</td>
                    <td>Yes</td>
                    <td>Non Veg</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Momos</td>
                    <td>90/-</td>
                    <td>Yes</td>
                    <td>Veg</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Ramen</td>
                    <td>150/-</td>
                    <td>Yes</td>
                    <td>Non Veg</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Pizza</td>
                    <td>280/-</td>
                    <td>Yes</td>
                    <td>Veg</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Samosa</td>
                    <td>70/-</td>
                    <td>Yes</td>
                    <td>Veg</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Sushi</td>
                    <td>190/-</td>
                    <td>Yes</td>
                    <td>Non Veg</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Burger</td>
                    <td>80/-</td>
                    <td>Yes</td>
                    <td>Veg</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Meatballs</td>
                    <td>220/-</td>
                    <td>Yes</td>
                    <td>Non Veg</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Brownie</td>
                    <td>110/-</td>
                    <td>Yes</td>
                    <td>Veg</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Waffles</td>
                    <td>89/-</td>
                    <td>Yes</td>
                    <td>Veg</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Waffles</td>
                    <td>89/-</td>
                    <td>Yes</td>
                    <td>Veg</td>
                  </tr>
                  <?php
                  include 'backend/dbconnect.php';
                  $query = "SELECT * from `add_item`";
                  $main = mysqli_query($conn, $query);
                  $no = 11;
                  while ($row = mysqli_fetch_assoc($main)) {
                    $no = $no + 1;
                    echo "<tr>
                                    <td>" . $no . "</td>
                                    <td>" . $row['name'] . "</td>
                                    <td>" . $row['price'] . '/-' . "</td>
                                    <td>" . 'yes' . "</td>
                                    <td>" . 'veg' . "</td>
                              </tr>";
                  }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
          <div class="pg-settings"></div>



        </div>
      </div>
    </div>


    <section class="">

    </section>

    <!-- ============== Start Footer Area ================ -->



    <!-- ============== End Footer Area ================ -->


    <!-- bootstrap js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!--  custom js file  -->
    <script src="./js/main.js"></script>
    <script src="./js/admin.js"></script>

</body>

</html>
<?php

if (isset($_GET['cart_id'])) {
  echo "
     <script>
     orderModal = document.getElementById('orders-modal');
     orderModal.style.display = 'initial';
     document.body.style.overflow = 'hidden';
    </script>";
} else {
  echo "
     <script>
     orderModal = document.getElementById('orders-modal');
     orderModal.style.display = 'none';
     document.body.style.overflow = 'visible';
    </script>";
}

?>