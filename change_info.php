<?php
session_start();
require "connect.php";

$email = $_POST['email'];
$telephone = $_POST['email'];
$password = $_POST['confirm'];
$password = md5($password);
$user_pwd = $_SESSION['pwd'];
$id = $_SESSION['id'];

if($password == $user_pwd){
    $sql = "UPDATE users SET email = '$email' WHERE user_id = $id";
    if(mysqli_query($conn,$sql)){
        echo "Record updated";
        header("Location: index.php");
    }
    else{
        echo "error";
    }
}
?>