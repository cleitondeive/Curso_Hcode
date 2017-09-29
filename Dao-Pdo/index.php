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
		<h1 class="h1-titulocor">Exemplo-01 DAO-PDO-Select.</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php-->
<h1>Lets-go ex-01.Seção DAO-PDO.SELECT....</h1>
<hr>

<?php
# PHP 7 Exemplo-01 DAO-PDO
# PHP 7 Exemplo-02 DAO-PDO
/*
//Uso de um simples select simples de todos os dados
$sql = new sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/


//Carrega um usuário


/* assim o select esta funcionando
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo
json_encode($usuarios);
*/
//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;
//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);
//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);
//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");
//echo $usuario;
/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
*/
/*
//Alterar um usuário
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario;
*/

//carrega uma lista de usuarios
/*
$lista = Usuario::getList();
echo json_encode($lista);
*/
//carrega uma lista de usuarios buscando pelo Login



//Carrega uma lista de usuários buscando pelo login por parte do nome

//require_once("config.php");
//$search = Usuario::search("ca");
//echo json_encode($search);


//carrega um usuário usando o login e a senha

require_once("config.php");
$usuario = new Usuario();
$usuario->login("user_Fabio", "898989");
echo $usuario;

 ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
