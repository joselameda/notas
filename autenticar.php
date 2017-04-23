<?php
    session_start();
    if (!isset($_SESSION['iduser'])) {
        header("location: home.php");
    }
    
?>