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
		<h1 class="h1-titulocor">36-Aula-Hcode-Poo-Node-Studio-ex-06.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Seção-09-->



 <?php
//36-Aula-Hcode-Poo-Node-Studio-ex-06.If Else

	//If : Else
/*
	$num = 190;
	  if ($num == 10) {
	  	echo "Numero igual a 10";
	  }
		else {
			echo "Numero Não é Igual a 10";
		}
		//////exemplo-02///////////

		$valor = 10;

			if ($valor == 10) {
			echo "Igual a 10";
			} else {
				echo "Não é igual a 10";
			}

			//////exemplo-03///////////

			$num =100;

			if ($num == 10):
				echo "Valor igual a 10";

		else:
				echo "Não é igual a 10";
		endif;



*/

	$media = 7;

	echo ($media >= 7) ? "Aprovado" : "Reprovado" ;


   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
