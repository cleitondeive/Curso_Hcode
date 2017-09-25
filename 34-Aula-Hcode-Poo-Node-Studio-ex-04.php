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
		<h1 class="h1-titulocor">34-Aula-Hcode-Arrays-Node-Studio-ex-03.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Seção-09-->



 <?php
#34-Aula-Hcode-Poo-Node-Studio-ex-04.php

	//Arrays-ex-01 Node-Studio.....
//$carros = array(1=>"Gol",2=>"Sandero",10=>"Corcel");
	//print_r($carros);
	//echo $carros[2];
		//echo $carros[1];
			//echo $carros[10];
			//////////////////////////////

	//$motos = array();
	//$motos[] = "Yamaha";
	//$motos[] = "Honda";
	//$motos[] = "Suzuki";

//print_r($motos);

////////////////////////////////////////
//$nomes = ["Cleiton","Jose","Joao"];
//print_r($nomes);

//count

//echo count($nomes);

//foreach ($nomes as $key => $value) {
	//echo "<br>$value";
//}

////////////////////////////////////////


#Array Associativos quando os indice são strings


	$pessoas = array ("nome"=>"Cleiton","idade"=>33,"altura"=>1.89);
	//print_r($pessoas);
	//echo $pessoas["nome"];
	$pessoas["cidade"] = "Cuiaba-Mt";
	//print_r($pessoas);

	foreach ($pessoas as $indice => $valor) {
		echo $indice.":".$valor;
		echo "<br>";
	}















   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
