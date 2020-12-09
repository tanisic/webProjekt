<?php
session_start();
require "connect.php";
$old_pwd = $_POST['old_password'];
$old_pwd = md5($old_pwd);
$new_pwd = md5($_POST['password']);
$comfirm = md5($_POST['confirm']);
$id = $_SESSION['id'];
if($old_pwd == $_SESSION['pwd']){
    $sql = "UPDATE users SET password = '$new_pwd' WHERE user_id = $id";
    if(mysqli_query($conn,$sql)){
            header("Location: index.php");
    }
    else{
        echo "error";
    }
}else{
    header("Location: change_password.html");
}
?>