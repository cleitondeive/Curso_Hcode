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
		<h1 class="h1-titulocor">23-Aula-Hcode-Data-Hora.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Seção-08-->



 <?php
 //FUNÇÃO DATE()
  // echo $data = date("d/m/Y H:i:s ");

//echo date('d/m/Y'); // Resultado: 12/03/2009
//echo date('H:i:s'); // Resultado: 03:39:57
//echo date('d/m h:i A'); // Resultado: 12/03 03:39 AM

//echo date('d/m/Y');
// Resultado: 09/06/2012
//echo date('H:i:s');
// Resultado: 23:19:04
//echo date('Y-m-d H:i:s');
// Resultado: 2012-06-09 23:19:04

//$nextWeek = time() + (7 * 24 * 60 * 60);
//  echo 'Now:       '. date('d-m-Y') ."<br>";
  //echo 'Next Week: '. date('d-m-Y', $nextWeek) ."<br>";
  //echo 'Next Week: '. date('d-m-Y', strtotime('+1 week')) ."<br>";
// Now: 04-07-2015 à Data atual
// Next Week: 11-07-2015 à Uma semana após a data atual
// Next Week: 11-07-2015 à Uma semana após a data atual utilizando strtotime

$data = new DateTime('22-01-1990');
            $data->setDate(1995, 3, 9);
            echo $data->format('d-m-Y H:i:s');


   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
