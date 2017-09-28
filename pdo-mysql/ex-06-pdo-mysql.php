<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Curso_Php_Hcode</title>

	<!--Definição da viewport-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

	<!--Adicinar o Css do bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">

	<!--Adicinar o Css personalizado-->
	<link rel="stylesheet" href="css/estilo.css" media="screen">

	<link rel="stylesheet" href="css/font-awesome.min.css">


</head>

<body>


<nav class="nav navbar-default">
	<div class="container">
		<div class="nav navbar-header">
			<a class="navbar-brand" href="#">Curso_Php_Hcode</a>

		</div>
	</div>
</nav>

<div class="container">
	<div class="colxs12">
		<h1 class="h1-titulocor">Exemplo-06 Mysqli.</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php-->
<h1>Lets-go ex-06..Transações de rollback e Commit Com Mysql Usando o PDO.....</h1>
<hr>

<?php
# PHP 7Transações  dados Com Mysql Usando o PDO

$conn = new PDO("mysql:dbname=dbphp7; host=127.0.0.1","root","master30*");
$conn->beginTransaction();
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuarios = ?");

$id = 18;

$stmt->execute(array($id));

//$conn->rollBack(); //rollback cancela a Transação 
//echo"Transação de rollback efetuado Com Sucesso ok.....";

$conn->commit(); //Commit Confirma a transação
echo"Transação de Commit Confirmado Com Sucesso ok.....";


 ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
