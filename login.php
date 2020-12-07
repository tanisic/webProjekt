<?php
session_start();

include "connect.php";

$message="";
if(count($_POST)>0) {
  $password = $_POST["password"];
  $password = md5($password);
 $query = "SELECT * FROM Users WHERE email='" . $_POST["email"] . "' AND password = '$password'";
 $result = mysqli_query($conn,$query);
 $row  = mysqli_fetch_array($result);
if(is_array($row)) {
  $_SESSION["email"] = $row['email'];
  $_SESSION["first_name"] = $row['first_name'];
  $_SESSION["last_name"] = $row['last_name'];
  } else {
    $message = "Invalid Username or Password!";
    }
}
if(isset($_SESSION["email"])) {
header("Location:index.php");
}
?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="images/dumbbell.png">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Login korisnika</title>
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="row">
  <div class="col-4"></div>
  <div class="card col-4">
    <div class="">
      <article class="card-body">
        <a href="register.html" class="float-right btn btn-outline-primary ">Registriraj se!</a>
        <a href="index.php" class="float-right btn btn-outline-primary ">Početna</a>
        <h4 class="card-title mb-4 mt-1">Logiraj se!</h4>
        <form id="form-login" action="" method="post" onsubmit="return validate();">
          <div class="form-group">
            <label>E-mail</label>
            <input class="form-control" name="email" id="email" placeholder="Email..." type="email">
          </div> <!-- form-group// -->
          <div class="form-group">
            <label>Lozinka</label>
            <input class="form-control" name="password" id="password" placeholder="Lozinka..." type="password">
          </div> <!-- form-group// -->
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Login </button>
          </div> <!-- form-group// -->
        </form>
      </article>
    </div>
  </div>
  <div class="col-4"></div>
  </div>
  <script type="text/javascript" src="login.js">

  </script>
</body>

</html>
