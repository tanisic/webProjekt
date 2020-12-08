<?php
session_start();
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
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Teretana "Baš Fit"</title>
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
          <a class="nav-item nav-link active pocetna-button" href="#">Početna</a>
          <a class="nav-item nav-link onama-button" href="#o-nama">O nama</a>
          <a class="nav-item nav-link galerija-button" href="#galerija">Foto galerija</a>
          <?php
            if (isset($_SESSION["email"])){
              echo '<a class="nav-item nav-link" href="dashboard.php">Postavke računa</a>';
              echo '<a class="nav-item nav-link" href="logout.php">Logout</a>';
            }
            else{
              echo '<a class="nav-item nav-link" href="login.php">Login</a>';
              echo '<a class="nav-item nav-link" href="register.php">Registracija</a>';
            }
          ?>
        </div>
      </div>
    </nav>
  </header>
  <div class="container-fluid top-container">
    <div class="row">
      <div class="col-md-4">
        <img src="images/logo.png" id="logo" />
      </div>
      <div class="col-md-8 grey-content">
        Postani i ti član "Baš fit" team-a!
      </div>
    </div>
  </div>
  <div class="container-fluid div-galerija" id="o-nama">
      <h1>O nama</h1>
      <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent magna erat, eleifend at varius ac, lacinia
        eget ligula. Vestibulum suscipit dapibus convallis. In hac habitasse platea dictumst. Nulla consequat purus quis
        metus fermentum tincidunt. Ut efficitur tortor at ullamcorper euismod. In vitae dui dictum, posuere ligula sit
        amet, lacinia felis. Donec quis suscipit erat. Sed nulla lorem, iaculis sed libero nec, accumsan eleifend odio.
        Aliquam erat volutpat. Cras elit mauris, efficitur mollis auctor ac, viverra non massa. Nullam porttitor justo
        hendrerit ullamcorper euismod. Praesent sagittis molestie rutrum. Etiam in lobortis leo. Proin auctor varius
        libero a pulvinar. Aliquam vel pharetra lacus, a blandit tortor.

        In a vestibulum neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
        egestas. Cras et lorem dignissim diam faucibus posuere. Mauris a luctus nunc. Aliquam sit amet consequat lorem.
        Nulla id velit sit amet arcu auctor ultricies ut vitae nulla. Nullam accumsan efficitur sodales. Vivamus nisi
        neque, pretium vitae quam a, venenatis mollis quam. Donec a lorem bibendum, vestibulum ex id, accumsan tortor.
        Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam egestas libero id
        erat vestibulum posuere.</p>
    </div>

    <div class="container-fluid" id="galerija">
      <h1>
        Naša foto galerija
        <hr>
      </h1>
    <div class="container page-top">
    <div class="row">


        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="images/gym1.jpg" class="fancybox" rel="ligthbox">
                <img  src="images/gym1.jpg" class="zoom img-fluid "  alt="">
              
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="images/gym2.jpg"  class="fancybox" rel="ligthbox">
                <img  src="images/gym2.jpg" class="zoom img-fluid"  alt="">
            </a>
        </div>
        
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="images/gym6.jpg" class="fancybox" rel="ligthbox">
                <img  src="images/gym6.jpg" class="zoom img-fluid "  alt="">
            </a>
        </div>
        
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="images/gym4.jpg" class="fancybox" rel="ligthbox">
                <img  src="images/gym4.jpg" class="zoom img-fluid "  alt="">
            </a>
        </div>
        
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="images/gym5.jpg" class="fancybox" rel="ligthbox">
                <img  src="images/gym5.jpg" class="zoom img-fluid "  alt="">
            </a>
        </div>
        
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="images/gym7.jpg" class="fancybox" rel="ligthbox">
                <img  src="images/gym7.jpg" class="zoom img-fluid "  alt="">
            </a>
        </div>
        
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a href="images/gym3.jpg" class="fancybox" rel="ligthbox">
                <img  src="images/gym3.jpg" class="zoom img-fluid "  alt="">
            </a>
        </div>
    
      </div>




</div>
</div>
    
    <script src="index_script.js"></script>
</body>

</html>
