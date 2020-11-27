<?php
include "connect.php";
$firstName = trim($_POST['first_name']);
$lastName = trim($_POST['last_name']);
$emailId = trim($_POST['email']);
$password = trim($_POST['password']);
$password = md5($password);
if ((isset($firstName) && !empty($firstName)) && (isset($lastName) && !empty($lastName)) && (isset($emailId) && !empty($emailId)) && (isset($password) && !empty($password))) {
    $sql = "INSERT INTO Users (first_name, last_name, email, password) VALUES ('$firstName', '$lastName', '$emailId', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
} else {
    echo "Invalid input. Please enter all the input fields in form";
}
$conn->close();
?>
