<?php
 
if($_SERVER['REQUEST_METHOD'] = 'POST')
{
     include 'dbconnect.php';

     $name = $_POST['full-name'];
     $user = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $contact = $_POST['phone-number'];
     $altercontact = $_POST['alternate-number'];

     $sql = "INSERT INTO `user` (name,username,email,password)
     VALUES ('$name','$user', '$email', md5('$password'))";

    $result = mysqli_query($conn, $sql);

    if($result)
    {
        echo "User Created Successfully!! ";

        if($altercontact == "")
        {
            $sql_inner = "INSERT INTO `contact` (`UserName`, `ContactNo`) VALUES ('$user', '$contact');";

            $result_2 = mysqli_query($conn, $sql_inner);
            if($result_2)
            {
                echo "Only one number added";
            }
            else
            {
                echo mysqli_error($conn);
            }
        }
        else
        {
            $sql_inner = "INSERT INTO `contact` (`UserName`, `ContactNo`) VALUES ('$user', '$contact');";

            $sql_outer = "INSERT INTO `contact` (`UserName`, `ContactNo`) VALUES ('$user', '$altercontact');";

            $result_2 = mysqli_query($conn, $sql_inner);
            if($result_2)
            {
                echo "First number added";
            }
            else
            {
                echo mysqli_error($conn);
            }

            $result_3 = mysqli_query($conn, $sql_outer);
            if($result_3)
            {
                echo "Second number added";
            }
            else
            {
                echo mysqli_error($conn);
            }

        }
    }
    else
    {
        echo "Error ! ".mysqli_error($conn);
    }
}

?>