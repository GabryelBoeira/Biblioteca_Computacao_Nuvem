<?php
$banco = "mysql";
$usuario = "root";
$senha = "nimda";
$hostname = "0.0.0.0";

$conn = mysqli_connect($hostname,$usuario,$senha,mysql_select_db($banco)) or die( "Não foi possível conectar ao banco MySQL");

if (!$conn) {
        echo "Não foi possível conectar ao banco MySQL.";
        exit;
}
else {
        echo "Parabéns!! A conexão ao banco de dados ocorreu normalmente!.";
}
mysql_close();
echo "teste";
?>
