<?php
	session_start();
	
	include "conexao.php";
	
	$sqlBusca = "select * from clientes where cliusuario='".$_POST['fUsuario']."'and clisenha='".$_POST['fSenha']."'";
	$resultado = mysqli_query($conexao, $sqlBusca);
	$qtdLinhas = mysqli_num_rows($resultado);
	
	if ($qtdLinhas>0)
	{
		$tbUsuarios = mysqli_fetch_array($resultado);
		$_SESSION['cli']=$tbUsuarios['clicodigo'];
		
		header("Location:principal.php"); 
	}
	else
	{
		$mensagem = "Usuário inexistente ou senha incorreta!";
	}
?>
<html>
	<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 
    <title>Clientes&amp;Contatos</title>
	</head>
	
	<body>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Atenção!</strong> <?php echo $mensagem; ?>
			<p>Clique <a href="index.php">aqui</a> para voltar</p>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>