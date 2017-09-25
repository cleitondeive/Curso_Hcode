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
		<h1 class="h1-titulocor">41-Aula-Hcode-Poo-ex-08-interface.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Seção-09-->



 <?php
//41-Aula-Hcode-Poo-ex-08-interface.php
		interface Veiculo{
			public function acelerar($velocidade);
			public function freiar($velocidade);
			public function trocar_Marcha($marcha);


		}

		class Sandero implements Veiculo{
			public function acelerar($velocidade){
				echo "O Veiculo pode acelerar até".$velocidade;
			}

			public function freiar($velocidade){
				echo "O Veiculo pode frenou até".$velocidade;
			}
			public function trocar_Marcha($marcha){
				echo "O Veiculo pode trocar marcha até".$marcha;
			}

		}

		$carro = new Sandero();

		$carro->trocar_Marcha(1);
		echo "<br>";
		$carro->freiar(20);


   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
