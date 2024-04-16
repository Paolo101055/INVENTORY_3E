<?php

include "db.php";
session_start();


//Authentication


if(isset($_POST['loginauth']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $email;
    echo "<br>";
    echo $password;

    $sql = "SELECT * FROM users WHERE email = '".$email."' and
    password = '".$password."' and dateDeleted is null limit 1 ";
    $result = $conn->query($sql);

    if($result && $result->num_rows > 0){
        //swal alert
      
    $user_data = $result->fetch_assoc(); 

        $_SESSION['user_id'] = $user_data['user_id'];
   

        header ('location: ../src/home');
      
    }
    else{
        
        header('Location: ../index?notfound');
    }

}
?>