<?php
    session_start();
    include("conect.php");
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $id = $_POST['id'];
    $fecha = date("Y-m-d H:i:s");
    $user=$_SESSION['iduser'];
    
    if ($id == null) {
            if ($titulo!=null) {
                    $query="INSERT INTO notas (titulo,contenido,fecha,id_usuario) VALUES ('$titulo','$contenido','$fecha','$user');";
                   $result = mysql_query($query);  
                   header("location:index.php");          
            }
            else {
                    echo "<script type='text/javascript'>alert('Sin Titulo');</script>";
                    header("Location:agregar.php");
            } 
    }

    else {

        $query="UPDATE notas Set titulo='$titulo', contenido='$contenido' Where id=$id ;";
        $result = mysql_query($query);
        header("Location:index.php");
        
    }
?>