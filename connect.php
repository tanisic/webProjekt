<?php
$conn = mysqli_connect('localhost','root','','Teretana');
try {

  if (!$conn) {
      throw new Exception("Database Connection Error");
  }
}
catch(Exception $e) {
  echo "caught exception", $e->getMessage(), "\n";
  die();
}
?>
