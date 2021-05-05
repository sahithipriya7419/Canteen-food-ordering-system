<?php
 
if($_SERVER['REQUEST_METHOD'] = 'POST')
{
     include 'dbconnect.php';

     $user = $_POST['username'];
     $password = $_POST['password'];

     $sql = "SELECT * FROM `user` WHERE Username='$user' AND Password = md5('$password')";

     $query = "SELECT * FROM `admin`;";

     $admin = mysqli_query($conn,$query);

     $result = mysqli_query($conn, $sql);

     $num = mysqli_num_rows($result);    

     if($row1 = mysqli_fetch_assoc($admin))
     {
         if($user==$row1['admin_name']&&$password==$row1['admin_password'])
         {
             header("Location:http://localhost/sahil/admin.php");
         } 
     }

     if($num>0)
     {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['Username'] = $row['Username'];
        // echo $_SESSION['Username'];
        header("Location: http://localhost/sahil/menu.php");

     }
     else{
         echo '<script>alert("Sorry!!Invalid User");
         window.location.href="http://localhost/sahil/login.html";
         </script>';
     }
}

?>