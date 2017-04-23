<?php
    include("conect.php");
    $id= $_GET["id"];
    $query= "DELETE FROM notas WHERE id=$id ";
    $resul= mysql_query($query);
    header("location:index.php");
    die;

?>