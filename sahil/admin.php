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
          <a href=""><i class="fas fa-home"></i>Orders</a>
          <a href=""><i class="fas fa-plus"></i>Add New Item</a>
          <a href=""><i class="fas fa-sliders-h"></i>Settings</a>
          <a href=""><i class="fas fa-terminal"></i>Console</a>
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
                    <th>SNo</th>
                    <th>User</th>
                    <th>Cart Id</th>
                    <th>Time / Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      include 'backend/dbconnect.php';
                          $query = "SELECT * from `main_cart`";
                          $main = mysqli_query($conn,$query);
                          $no = 0;
                          while($row = mysqli_fetch_assoc($main))
                          {
                              $cart = $row['cart_id'];
                              $sql = "SELECT * from `cart_items` where cart_id=$cart";
                              $result = mysqli_query($conn,$sql);
                              $date = mysqli_fetch_assoc($result);
                              $no = $no + 1;
                              echo "<tr>
                                  <td>" . $no . "</td>
                                  <td>" . $row['username'] ."</td>
                                  <td>" . $row['cart_id']. "</td>
                                  <td>" . $date['order_time'] ."</td>
                                  <td class='text-right'>
                                    <button class='btn btn-success badge-pill style='width:80px;'>View</button>
                                  </td>
                                  </tr>";
                          }
                      ?>
                </tbody>
            </table>
            <!-- <div class="order-headings">
              <div class="hd-sno">User</div>
              <div class="hd-items">Items</div>
              <div class="hd-items">Date / Time</div>
              <div class="hd-amount">Total Amount</div>
              <div class="hd-actions">Actions</div>
            </div>

            <div class="order-row rounded-3">
              <div class="hd-sno">soilshubham</div>
              <div class="hd-items">3 Chicken, 1 Ramen, 1 Brownie</div>
              <div class="hd-time">17/04/2021, 13:04</div>
              <div class="hd-amount">Rs. 1450</div>
              <div class="hd-actions">
                <a href="" class="order-yes"><i class="fas fa-check"></i></a>
                <a href="" class="order-no"><i class="fas fa-times"></i></a>
              </div>
            </div> -->
          </div>

        </div>
        <div class="pg-add-new"></div>
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
  
    <!--  custom js file  -->
    <script src="./js/main.js"></script>
    <script src="./js/admin.js"></script>
    
</body>
</html>