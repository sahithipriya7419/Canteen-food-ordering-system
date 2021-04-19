<?php
 
if($_SERVER['REQUEST_METHOD'] = 'POST')
{
     include 'dbconnect.php';

     $cart_id = 0;

     $username = "";
     session_start();
     if(isset($_SESSION['Username'])){
         $username = $_SESSION['Username'];
         $array = json_decode($_POST['cartarray']);
         $sql = "INSERT INTO `main_cart` (`username`, `cart_id`) VALUES ('$username', NULL);";

         $res1 = mysqli_query($conn,$sql);

         if($res1)
         {
             echo "Succesfull";
             $sql = "SELECT * FROM `main_cart` WHERE username='$username';";

             $res2 = mysqli_query($conn,$sql);
            //  echo var_dump($res2); 
             if($res2)
             {
                //  $row = mysqli_fetch_assoc($res2);
                //  $cart_id = $row['cart_id']; 
                //  echo var_dump($cart_id)."<br>";
                while( $row = mysqli_fetch_assoc($res2))
                {
                    $temp = $row['cart_id'];
                    if($temp>$cart_id)
                    {
                        $cart_id = $temp;
                    }
                }
                echo var_dump($cart_id)."<br>";
                
             }
         }



         
         //  echo var_dump($array);
     
          foreach($array as $item){
              $item = json_decode(json_encode($item),true);
              $item_id = $item['id'];
              $item_name = $item['name'];
              $item_price = $item['price'];
              $item_quantity = $item['q'];
               echo $item_id."<br>";
              $sql = "INSERT INTO `cart_items` (`cart_id`, `item_id`, `item_name`, `item_price`, `item_quantity`) VALUES ($cart_id, '$item_id', '$item_name', $item_price, $item_quantity);";
              $result = mysqli_query($conn,$sql);
                if($result)
                {  
                    echo "Data inserted";
                }
                else{
                    echo mysqli_error($conn);
                }
          }
 
     }
     else{
        echo "No user found";
        echo var_dump($_SESSION['Username']);
        
     }




    //  $sql = "SELECT * FROM `user` WHERE Username='$user' AND Password = md5('$password')";

    //  $result = mysqli_query($conn, $sql);

    //  if($result)
    //  {
    //      echo "Succesful conn";
    //  }
    //  else{
    //      echo "error";
    //  }

    //  $num = mysqli_num_rows($result);    

    //  if($num>0)
    //  {
    //     $row = mysqli_fetch_assoc($result);
    //     echo '<script>alert("Added item successfully");
    //     </script>';

    //  }
    //  else{
    //      echo '<script>alert("Cannot add the item");
    //      </script>';
    //  }
}
