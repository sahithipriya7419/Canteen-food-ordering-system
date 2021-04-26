<?php
                  
                  if($_SERVER['REQUEST_METHOD'] = 'POST')
                  {
                      include 'dbconnect.php';
                      $item_name = $_POST['item_name'];
                      $item_price = $_POST['item_price'];

                      $sql = "INSERT INTO `add_item` (name,price)
                      VALUES ('$item_name',$item_price)";

                      $result = mysqli_query($conn, $sql);
                  }
?>