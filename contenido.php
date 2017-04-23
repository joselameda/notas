<?php
    include("autenticar.php");
    include("conect.php");
    include("header.php");
    $id_nota = $_GET['id'];
    if ($id_nota!=null) {
            $query = 'SELECT * FROM notas where id ='.$id_nota;
            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
            $notas=[];
            while ($line = mysql_fetch_assoc($result)) {
                    $notas[]=$line;
            }
            echo"<h1>".$notas[0]['titulo']."</h1>";
            echo "<h4>".$notas[0]['contenido']."</h4>";       
    }
    else {
            echo"<h1>No tiene Direccion</h1>";
           
    }    
    if ($_SESSION['username']=="administrador"):
   ?>         
        <a href="administrador.php" class="btn btn-default">Regresar</a>
<?php else: ?>
        <a href="index.php" class="btn btn-default">Regresar</a> <a href="agregar.php?id=<?php echo $id_nota; ?>" class="btn btn-default">Editar</a>   
<?php
    endif;
include("footer.php");
?>

