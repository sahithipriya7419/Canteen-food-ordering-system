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
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="me-auto"></div>
                <div class="navbar-nav">
                  <a class="nav-link active" href="">Log Out</a>

                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- ======== End Navbar ========= -->

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
          <a id="sidebar-logout" href=""><i class="fas fa-sign-out-alt"></i>Log Out</a>
        </div>
      </aside>

      <div class="content-area">
        <div class="pg-orders">

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
                    <th>User</th>
                    <th>Items</th>
                    <th>Time / Date</th>
                    <th>Amount</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      include 'dbconnect.php';
                          $sql = "SELECT * from `cart_items`";
                          session_start();
                          $username = $_SESSION['Username'];
                          $result = mysqli_query($conn,$sql);
                          $no = 0;
                          while($row = mysqli_fetch_assoc($result))
                          {
                              $no = $no + 1;
                              echo "<tr>
                                  <td>" . $username . "</td>
                                  <td>" . $row['item_quantity'].$row['item_name'] . "</td>
                                  <td>" . $row['order_time'] . "</td>
                                  <td>" . $row['item_price'] . "</td>
                                  </tr>";

                          }
                      ?>
                  <tr>
                    <td>soil12</td>
                    <td>3 Momo, 1 Ramen</td>
                    <td>13:02 / 03.03.21</td>
                    <td>Rs. 1300</td>
                    <td>
                      <a href="" class="order-yes"><i class="fas fa-check"></i></a>
                      <a href="" class="order-no"><i class="fas fa-times"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>soil12</td>
                    <td>3 Momo, 1 Ramen</td>
                    <td>13:02 / 03.03.21</td>
                    <td>Rs. 1300</td>
                    <td>
                      <a href="" class="order-yes"><i class="fas fa-check"></i></a>
                      <a href="" class="order-no"><i class="fas fa-times"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>soil12</td>
                    <td>3 Momo, 1 Ramen</td>
                    <td>13:02 / 03.03.21</td>
                    <td>Rs. 1300</td>
                    <td>
                      <a href="" class="order-yes"><i class="fas fa-check"></i></a>
                      <a href="" class="order-no"><i class="fas fa-times"></i></a>
                    </td>
                  </tr>
                </tbody>
            </table>
          </div>

        </div>


        <div id="pg-all-items" class="pg-all-items" >
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
                </tbody>
            </table>
          </div>
        </div>
        
        <div id="pg-add-items" class="pg-add-items">
          <div class="orders rounded-3 p-3">
            <div class="title fs-3">Add Items</div>
            <div class="add-new-item-form">
              <div class="add-image">

                  <p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                  <p>
                    <label for="file" style="cursor: pointer;" 
                      class="img-placeholder">
                      +
                      <img id="output">
                    </label>
                  </p>

              </div>
              <form class="add-info">
                <div class="input-group">
                  <label for="" class="sr-only">Item Name</label>
                  <input type="text" name="" id="add-item-name" class="add-item-inpt" placeholder="Item Name">
                </div>
                <div class="input-group">
                  <label for="" class="sr-only">Item Amount</label>
                  <input type="number" name="" id="add-item-amount" class="add-item-inpt" placeholder="Item Amount">
                </div>
                
                
                <br><input type="reset" onclick="resetImage()" class="form-button" value="Reset">
                <input type="submit" class="form-button" value="Add">
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  

  <section class="">
    
  </section>

  <!-- ============== Start Footer Area ================ -->



  <!-- ============== End Footer Area ================ -->


    <!-- bootstrap js file -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  
    <!--  custom js file  -->
    <script src="./js/main.js"></script>
    <script src="./js/admin.js"></script>
    
</body>
</html>