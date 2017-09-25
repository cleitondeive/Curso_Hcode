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
		<h1 class="h1-titulocor">43-Aula-Hcode-Poo-ex-10-Polimorfismo.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Seção-09-->



 <?php
//43-Aula-Hcode-Poo-ex-10-Polimorfismo.php

		abstract class Animal{
			public function falar(){
				return "som";
			}

			public function mover(){
				return "Anda";
			}


		}

		class Cachorro extends Animal{
			public function falar(){
				return "Late";

			}
		}

		class Gato extends Animal{
			public function falar(){
				return "Mia";

			}

		}


				class Passaro extends Animal{
					public function falar(){
						return "canta";

					}
					public function mover(){
						return "voa e ainda ". parent::mover();
					}
				}



		$pateta = new Cachorro();
		echo $pateta->falar()."<br>";
		echo $pateta->mover()."<br>";
//polimorfismo
echo "--------------------------<br>";

	$garfield = new Gato();

	echo $garfield->falar()."<br>";
	echo $garfield->mover()."<br>";
	//polimorfismo
	echo "--------------------------<br>";

	////////*******************/////////////////
	$manbird = new Passaro();

	echo $manbird->falar()."<br>";
	echo $manbird->mover()."<br>";

	//polimorfismo
	echo "--------------------------<br>";

   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
