<?php
$id = $_GET['id'];

// Conecta no MySQL (host, user, senha, banco)
$conexao = mysqli_connect("0.0.0.0","root","nimda",mysql_select_db("acervo")) or die( "Não foi possível conectar ao banco MySQL");

// Conecta no banco de dados "acervo"
mysqli_select_db($conexao,"acervo") or die('Erro de acesso ao banco de dados');

// SQL INSERT
$query = "delete from livro where id=$id";

mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));

mysqli_close($conexao);

// Redireciona para a lista
header( 'Location: index.php' ) ;
?>
