<?php

$db_server="localhost";
$db_name="si15";			    // Nome da base de dados
$db_username="root";		    // Codigo do grupo
$db_password="";		// Password do grupo para o MySql

$conn = mysql_connect($db_server, $db_username, $db_password);

if (!$conn) {
   echo "Nao foi possivel conectar ao banco de dados: " . mysql_error();
   exit;
}
 
if (!mysql_select_db($db_name)) {
   echo "Nao foi possivel selecionar mydbname: " . mysql_error();
   exit;
}

?>
