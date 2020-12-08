<?php
require "connect.php";
$firstName = trim($_POST['first_name']);
$lastName = trim($_POST['last_name']);
$email = trim($_POST['email']);
$telephone = trim($_POST['telephone']);
$password = trim($_POST['password']);
$password = md5($password);
if ((isset($firstName) && !empty($firstName)) && (isset($lastName) && !empty($lastName)) && (isset($email) && !empty($email)) && (isset($password) && !empty($password)))
{
    $sql = "INSERT INTO Users (first_name, last_name, email, telephone, password) VALUES ('$firstName', '$lastName', '$email','$telephone', '$password')";
    if ($conn->query($sql) === TRUE) {
        header("Location:index.php");
      }
      else{
        header("Location:register.html");
      }
} else {
    echo '<script>alert("Unesite valjane podatke")</script>';
    header("Location:register.html");
}
$conn->close();
?>
