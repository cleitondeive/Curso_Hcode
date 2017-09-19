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
		<h1 class="h1-titulocor">09-Aula-Hcode-if else.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Seção-04-->

 <?php
	//Conhecendo 09-Aula-Hcode-if else.php
	/*
$idade = 19;
$idadeCrianca = 12;
$idadeMaior = 18;
$idade_Melhor = 65;

	if ($idade <= $idadeCrianca) {
		echo "vc é Criança";
	}
	elseif ($idade < $idadeMaior) {
		echo "Vc é um Adolescente";
	}
	elseif ($idade < $idadeMaior) {
	  echo "Vc já é Maior de Idade Um Adulto";
	}else {
		echo "vc já é idoso";
	}
*/
$idade = 9;
$idadeCrianca = 12;
$idadeMaior = 18;
$idade_Melhor = 65;

//uso de Operadores Ternario..

	echo ($idade < $idadeMaior)?"Menor de Idade":"Maior de idade";

   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>






</body>
</html>
