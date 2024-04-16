<?php
include "db.php";



if(isset($_POST['addUser'])){

  $fullname = mysqli_real_escape_string($conn,  $_POST['fullname']);
  $email= mysqli_real_escape_string($conn,  $_POST['email']);
  $password = mysqli_real_escape_string($conn,  $_POST['password']);
  $confirmPassword = mysqli_real_escape_string($conn,  $_POST['confirmPassword']);
  $accesstype = $_POST['accesstype'];
 $getpass = md5($password);
  if (isset($_FILES['pic']) && !empty($_FILES['pic']['name'])) { 
    
    $pic = basename($_FILES["pic"]["name"]);

    $target_dir = "../src/assets/images/userimage/";
    
    $target_file = $target_dir. $pic;
    
    move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file);
    
    } else{
    
    $pic = '';
    
    
    }

    if($password != $confirmPassword){

        header("location: ../src/user?notmatch");
    }else{
$add = "INSERT INTO users SET
fullname = '$fullname',
email = '$email',
password = '$getpass',
accesstype = '$accesstype',
pic= '$pic'";


mysqli_query($conn, $add);
header("location: ../src/user?added");

    }
}

if (isset($_POST['removeUser'])){
    $id = mysqli_real_escape_string($conn,  $_POST['id']);
    $date = date ("Y-m-d");
    $update = mysqli_query($conn, "UPDATE users set dateDeleted = '$date' where user_id = '$id'");

    if($update){
header("location: ../src/user?removeUser");

    }

}


?>