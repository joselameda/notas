<?php
$link = mysql_connect('localhost', 'root', '')
or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('notas_db') or die('No se pudo seleccionar la base de datos');
?>