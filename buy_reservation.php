<?php
    session_start();
    require "connect.php";
    if(count($_POST["clanarina"]>0))
    {
        $clanarina = $_POST["clanarina"];
        $datum = date('Y-m-d');
        $krajnjiDatum = date('Y-m-d', strtotime($datum. ' + '.$clanarina.' days'));
        $user_id = $_SESSION['id'];
        $sql = "UPDATE users SET clanarina_kupnja='$datum', clanarina_kraj='$krajnjiDatum' WHERE user_id = $user_id";
        if ($conn->query($sql) === TRUE) {
            header("Location: dashboard.php");
            $_SESSION['date_bought'] = $datum;
            $_SESSION['date_expire'] = $krajnjiDatum;
        } 

    }
?>