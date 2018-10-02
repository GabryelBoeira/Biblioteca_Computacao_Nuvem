<?php
//$id = $_GET['id'];
$id = 0;

// Conecta no MySQL (host, user, senha, banco)
$conexao = mysqli_connect("0.0.0.0","root","nimda",mysql_select_db("acervo")) or die( "Não foi possível conectar ao banco MySQL");

// Conecta no banco de dados "acervo"
mysqli_select_db($conexao,"acervo") or die('Erro de acesso ao banco de dados');

// SQL
$query = "select id,nome,paginas, ISBN, categoria, autor from livro where id=$id";

$resultado = mysqli_query($conexao,$query) or die('Erro de query ' . mysqli_error($conexao));
$linha = mysqli_fetch_array($resultado);

$nome = $linha['nome'];
$paginas = $linha['paginas'];
$ISBN = $linha['ISBN'];
$categoria = $linha['categoria'];
$autor = $linha['autor'];


mysqli_close($conexao);

?>

<html>
<head>
 <meta charset='utf-8'>
  <title>Cadastro de livros</title>
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
	
	<div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">

<h1>Cadastro de livros</h1>
<center>
  <form style="width: 500px" method="post" action="salvar_livro.php">
        <input type="hidden" id="id" name="id" value="<?php echo $id ?>" />
    <p>Nome:</p>
    <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $nome ?>" />
    <p>Paginas:</p>
    <input class="form-control" type="text" id="paginas" name="paginas" value="<?php echo $paginas ?>" />
	<p>ISBN:</p>
    <input class="form-control" type="text" id="ISBN" name="ISBN" value="<?php echo $ISBN ?>" />
	<p>Categoria:</p>
    <input class="form-control" type="text" id="categoria" name="categoria" value="<?php echo $categoria ?>" />
	<p>Autor:</p>
    <input class="form-control" type="text" id="autor" name="autor" value="<?php echo $autor ?>" />
		<br>	

    <input type="submit" value="Salvar" />
  </form>
 </center>
		</div>
      </div>
    </div>
</body>
</html>