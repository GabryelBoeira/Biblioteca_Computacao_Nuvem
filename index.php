<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Demo do acervo</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
      <div class="container">
        <a class="navbar-brand" href="#">Cadastro de acervo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
        
            <li class="nav-item">
              <a class="nav-link" href="index.html">Voltar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          
          <h1>Lista de livros</h1>
<table class="table">
	<thead class="thead-dark">
		<tr>
		   <td width="50px"><b>ID</b></td>
		   <td width="200px"><b>Nome</b></td>
		   <td width="200px"><b>Paginas</b></td>
		   <td width="100px"><b>ISBN</b></td>
		   <td width="100px"><b>Categoria</b></td>
			<td width="100px"><b>Autor</b></td>
			<td width="100px"><a class="btn btn-primary" href="novo_livro.php">Novo</a></td>
			
		</tr>
		</thead>
<?php
// Conecta no MySQL (host, user, senha, banco)
$conexao = mysqli_connect("0.0.0.0","root","nimda",mysql_select_db("acervo")) or die( "Não foi possível conectar ao banco MySQL");

// Conecta no banco de dados "acervo"
mysqli_select_db($conexao,"acervo") or die("erro 2");

// SQL
$query = "SELECT id,nome,paginas,ISBN, categoria, autor FROM livro ORDER BY id;";
$resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));

while ($linha = mysqli_fetch_array($resultado)) {
?>
   <tr>
      <td><?php echo $linha['id']; ?></td>
      <td><?php echo $linha['nome']; ?></td>
      <td><?php echo $linha['paginas']; ?></td>
      <td><?php echo $linha['ISBN']; ?></td>
	  <td><?php echo $linha['categoria']; ?></td>
	  <td><?php echo $linha['autor']; ?></td>
          <td><a class="btn btn-primary" href="form_livro.php?id=<?php echo $linha['id']; ?>">Editar</a> | <a class="btn btn-primary" href="deletar_livro.php?id=<?php echo $linha['id']; ?>">Deletar</a></td>
   </tr>
<?php
}
// Fecha a conexão
mysqli_close($conexao);
?>
</table>

          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>