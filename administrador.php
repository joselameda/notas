<?php
    include("autenticar.php");
    include ("conect.php");
    include ("header.php");
    $queryuser="SELECT * FROM usuario";
    $resultuser = mysql_query($queryuser);
    $usuarios = [];
     while ($line = mysql_fetch_assoc($resultuser)) {
        $usuarios[$line['id_usuario']] = $line['email'];
     }
    $query= "SELECT * FROM notas ORDER BY fecha DESC";
    $result = mysql_query($query);
    $notas=[];
      $trans=[];
     while ($line = mysql_fetch_assoc($result)) {
        if (isset($usuarios[$line['id_usuario']])) {
          $line['email'] = $usuarios[$line['id_usuario']];
          $notas[]=$line;
        } else {
            $line['email'] = "Sin usuario";
            $notas[]=$line;  
        } 
      }
?>
    <div class="row">
        <div class="col-md-4">
             <ul>
                <h1>NOTAS</h1>
                <?php for ($i=0; $i < count($notas); $i++){ 
                    echo "<li><a href=\"contenido.php?id=".$notas[$i]['id']."\">".$notas[$i]['titulo']."</a> [ ".$notas[$i]['fecha']." ] <span>".$notas[$i]['email']."</span> </li>";        
                }
                 ?>
            </ul>
        </div>
        <div class="col-md-8">
            
        </div>
    </div>
<?php
    include ("footer.php");
?>  