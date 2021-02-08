<?php
session_start();
require "connect.php";

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(count($_POST)>0) {
    $password = $_POST["password"];
    $password = md5($password);
    $email = $_SESSION['email'];
    $query = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
    $result = mysqli_query($conn,$query);
    $row  = mysqli_fetch_array($result);

    if(is_array($row) && $password == $row['password']){
        $sql = "DELETE FROM users WHERE email='$email'";

        if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            header("Location: logout.php");
    }
} 
}

?>