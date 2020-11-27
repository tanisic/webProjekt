<?php
session_start(); 
case "loginUser":
    
    $email = $_POST["email"];
    $pass = $_POST["pass"]; 

    $stmt = $conn->prepare("SELECT password FROM Users WHERE email = $email LIMIT 1");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();          
    if(!$result || !$result->num_rows){
        echo "Email has not been registered yet";
    }else{      
        $passHashed = $result->fetch_assoc();
        if(password_verify($pass, $passHashed["password"])){
            $_SESSION['User']['login'] = 'loggedIn'; 
            $_SESSION['User']['username'] = $email;  
            echo "Password correct";
            
        }else{
            echo "Password incorrect";
        }
    }
    break;
?>