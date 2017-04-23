<?php
    include("autenticar.php");
    $id=$_GET['id'];
    include ("conect.php");
    include("header.php");
    if ($id!=null) {
            $query = 'SELECT * FROM notas where id ='.$id;
            $result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
            $notas=[];
            while ($line = mysql_fetch_assoc($result)) {
                    $notas[]=$line;
            }
    }
    if ($id==null) :  
    ?>      
            <div class="row">
                <div class="col-md-4">  
                    <form action="enviar.php" method="post">
                        Titulo<br>
                        <input type="text" name="titulo"><br>
                        Contenido<br>
                        <input type="text" name="contenido">    
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
                <div class="col-md-8">                  
                </div>
            </div>     
    <?php
    else :
    ?>
            <div class="row">
                <div class="col-md-4">  
                    <form action="enviar.php" method="post">
                        Titulo<br>
                        <input type="text" name="titulo" value="<?php echo$notas[0]['titulo']; ?>"><br>
                        Contenido<br>
                        <input type="text" name="contenido" value="<?php echo$notas[0]['contenido']; ?>">  
                        <input type="hidden" name="id" value="<?php echo $id; ?>">  
                        <button type="submit" class="btn btn-primary">Modificar</button>
                    </form>
                </div>
                    <div class="col-md-8">  
                    </div>
            </div>
<?php
    endif;
    include("footer.php");
?>