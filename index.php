<?php
        include("autenticar.php");
        include ("conect.php");
        $query = 'SELECT * FROM notas WHERE id_usuario='. $_SESSION['iduser'];
        $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
        $notas=[];
        while ($line = mysql_fetch_assoc($result)) {
            $notas[]=$line;
        }
        include("header.php");
    if ($_SESSION['username']=="administrador") {
        header("location:administrador.php");
    }
?>
    <div class="row">
        <div class="col-md-4">
             <ul>
                <h1>NOTAS</h1>
                <?php for ($i=0; $i < count($notas); $i++){ 
                    echo "<li><a href=\"contenido.php?id=".$notas[$i]['id']."\">".$notas[$i]['titulo']."</a> [ ".$notas[$i]['fecha']." ] <a href=\"agregar.php?id=".$notas[$i]['id']."\">Editar</a> <a href=\"eliminar.php?id=".$notas[$i]['id']."\">Eliminar</a></li>";        
                }
                 ?>
            </ul>
        </div>
        <div class="col-md-8">
            
        </div>
    </div>

<?php
    include("footer.php");
?>

