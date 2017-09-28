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
		<h1 class="h1-titulocor">Exemplo-01 Mysqli.</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php-->
<h1>Lets-go...Integração Mysqli...</h1>
<hr>

<?php
/*
# PHP 7
$conexao = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conexao,'pessoa');
mysqli_set_charset($conexao,'utf8');

$sql = mysqli_query($conexao,"select * from tb_pessoa") or die("Erro");
while($dados=mysqli_fetch_assoc($sql))
    {
        echo $dados['nome'].'<br>';
    }
?>
*/
//$conn = new mysqli("localhost","root","","dbphp7");
//$mysqli = new mysqli("localhost", "root", "master30*", "dbphp7");

//$mysqli = new mysqli("localhost","root","master30*","dbphp7");

//Conexão com o Banco de Dados...

$conn = mysqli_connect('127.0.0.1','root','master30*','dbphp7');

if ($conn->connect_error) {
	echo "Error:" .$connect_error;
	exit;

}

//Insert com o Banco de Dados...

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) values(?,?)");
$stmt->bind_param("ss",$login,$pass);
$login = "user_Cleiton";
$pass ="123456";
$stmt->execute();

$login = "user_Jeniffer";
$pass = "yuyuyu";

$stmt->execute();

//comando feth para mostrar do banco para a tela de usuarios...	






 ?>








<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
