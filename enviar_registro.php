<?php
    session_start();
    include ("conect.php");
    $email = $_POST ['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO usuario (email, password) VALUES ('$email', '$password')";
                $result= mysql_query ($query);
                header ("location: home.php");

?>