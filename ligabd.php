<?php
    $db_server="db.fe.up.pt";
    $db_name="si15";			// Nome da base de dados
    $db_username="si15";		// Codigo do grupo
    $db_password="Q6TwNW7R";	// Password do grupo para o MySql

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