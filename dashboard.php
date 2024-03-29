<?php
session_start();
require "connect.php";
if (!isset($_SESSION['email'])){
    header("Location: index.php");
}
 
?>
<html lang="en">
<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css" />
  <!-- Optional theme -->
  <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap-theme.min.css" />
  <!-- Latest compiled and minified JavaScript -->
  <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
  <link rel="icon" href="images/dumbbell.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
  </script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  <link rel="stylesheet" href="dashboard.css">
  <script type="text/javascript" src="dashboard.js"></script>
    <title>Dashboard</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars hamburger"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <?php
            echo '<li><a class="nav-link user-logged nav-item" href="dashboard.php">Dobrodošao, '.$_SESSION["first_name"].'</a></li>';
        ?>
          <a class="nav-item nav-link active pocetna-button" href="index.php">Početna</a>
          <a class="nav-item nav-link active pocetna-button" href="change_password.html">Promjena lozinke</a>
          <a class="nav-item nav-link active pocetna-button" href="reservation.php">Kupnja članarine</a>
          <a class="nav-item nav-link active pocetna-button" href="delete.php">Obriši račun</a>
          <a class="nav-item nav-link onama-button" href="logout.php">Logout</a>
        </div>
      </div>
    </nav>
  </header>
  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Izmjena osobnih podataka</h3>
                    </div>
                    <div class="card-body">
                        <?php
                            if(($_SESSION['date_bought']==NULL) && ($_SESSION['date_expire']==NULL)){
                                echo '<p>Niste još kupili članarinu.</p>';
                            }
                            else{
                                echo '<p>Članarinu ste kupili datuma '.$_SESSION['date_bought'].', a traje do '.$_SESSION['date_expire'].'</p>';
                            }
                        ?>
                        <br>
                        <p>Ovdje je moguće promjeniti osobne podatke!</p>
                        <form class="form-horizontal" name="dash-change" id="dash-form" method="post" action="change_info.php">

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">E-mail</label>
                                <div class="cols-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="E-mail adresa..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telephone" class="cols-sm-2 control-label">Telefon</label>
                                <div class="cols-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="tel" class="form-control" name="telephone" id="telephone"
                                            placeholder="Telefon..." required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Potvrda promjene lozinkom</label>
                                <div class="cols-sm-4">
                                    <div class="input-group">
                                        <span class="input-group-addon"></span>
                                        <input type="password" class="form-control" name="confirm" id="confirm"
                                            placeholder="Potvrda promjene lozinkom..." minlength="8" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="submit"
                                    class="btn btn-primary btn-lg btn-block login-button">Spremi promjene</button>
                            </div>
                            
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>