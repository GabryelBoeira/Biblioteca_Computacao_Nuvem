<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$paginas = $_POST['paginas'];
$ISBN = $_POST['ISBN'];
$categoria = $_POST['categoria'];
$autor = $_POST['autor'];

// Conecta no MySQL (host, user, senha, banco)
$conexao = mysqli_connect("0.0.0.0","root","nimda",mysql_select_db("acervo")) or die( "Não foi possível conectar ao banco MySQL");

// Conecta no banco de dados "acervo"
mysqli_select_db($conexao,"acervo") or die("Erro de acesso ao banco de dados");

// SQL
if($id) {
        $query = "update livro set nome = '$nome', paginas = '$paginas', ISBN ='$ISBN', categoria = '$categoria', autor = '$autor' where id=$id";
}
else {
        $query = "INSERT INTO livro(nome,paginas,ISBN,categoria,autor) VALUES ('$nome', '$paginas', '$ISBN', '$categoria', '$autor')";
}
echo $query;
//$resultado = mysql_query($query,$conexao);
$resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));

mysqli_close($conexao);

// Redireciona para a lista
header( 'Location: index.php' ) ;
?>