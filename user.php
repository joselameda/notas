<?php
    session_start();
    include("conect.php");
    $email=$_POST['email'];
    $password=$_POST['password']; 

    
    
    function verificar($email,$password){
        $query = "SELECT * FROM usuario where email ='$email' and password = '$password'";
        $result = mysql_query($query);
        $usuario=mysql_fetch_assoc($result);
        if ($usuario) {
            return $usuario;
        }
        else {
            return false;
        }
    } 
    
    if(!isset($_SESSION['iduser'])) 
    { 
        if(isset($_POST['login'])) 
        { 
            $idverificado = verificar($email,$password);
            if ($idverificado) {    
                if($idverificado['email']=="administrador") 
                { 
                     $_SESSION['iduser'] = $idverificado['id_usario']; 
                    $_SESSION['username'] = $idverificado['email'];
                    header("location:administrador.php"); 
                }
                else {
                     $_SESSION['iduser'] = $idverificado['id_usuario']; 
                    $_SESSION['username'] = $idverificado['email'];
                    header("location:index.php"); 
                }                            
            } 
            else 
            { 
                echo 'Su usuario es incorrecto, intente nuevamente.'; 
            } 
        } 
    }
   
    
?>


