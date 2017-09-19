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
		<h1 class="h1-titulocor">16-Aula-Hcode-Array-Json.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Seção-05-->


 <?php
// Exemplo Array..

	//$frutas = array("laranha","melancia","manga");

		//print_r($frutas);
/*
		$carros  [0][0] = "GM";
		$carros  [0][1] = "Cobalt";
		$carros  [0][2] = "Camaro";
		$carros  [0][3] = "Onix";

		$carros  [1][0] = "Ford";
		$carros  [1][1] = "Fiesta";
		$carros  [1][2] = "Fusion";
		$carros  [1][3] = "Eco-Esporte";

		//echo $carros [0][3];

		echo end($carros[1]);

		ex-02 /////////////////////////////////////////////////////////ex-02

		$pessoas = array();

		  array_push($pessoas, array('nome'=>'Cleiton','Idade'=>30));

			array_push($pessoas, array('nome'=>'Jeniffer','Idade'=>20));



		 echo json_encode($pessoas);


*/

 //exemplo json_decode

 $json = '[{"nome":"Cleiton","Idade":30},{"nome":"Jeniffer","Idade":20}]
';

$data = json_decode($json ,true);
var_dump($data);



   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
