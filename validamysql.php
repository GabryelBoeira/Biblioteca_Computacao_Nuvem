<?php
$banco = "mysql";
$usuario = "root";
$senha = "nimda";
$hostname = "0.0.0.0";

$conn = mysqli_connect($hostname,$usuario,$senha,mysql_select_db($banco)) or die( "N�o foi poss�vel conectar ao banco MySQL");

if (!$conn) {
        echo "N�o foi poss�vel conectar ao banco MySQL.";
        exit;
}
else {
        echo "Parab�ns!! A conex�o ao banco de dados ocorreu normalmente!.";
}
mysql_close();
echo "teste";
?>
