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
		<h1 class="h1-titulocor">31-Aula-Hcode-Poo-Node-Studio-ex-01.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Seção-09-->



 <?php
#31-Aula-Hcode-Poo-Node-Studio-ex-01.php
		/********Variaveis Escalares*********/
		//strings
		//Inteiro
		//float
		//booleano

		//$nome = 777;
		//var_dump($nome);

		//if (is_string($nome)):
		//	echo "E Uma String";
		//else:
		//	echo "Não é uma String";
		//endif;

		/********Variaveis Composto*********/
		#Exemplos

		//$carro = array("Modelo","Motor","Cor");
			//var_dump($carro);

   /********Object*********/
	 class Cliente{
		 public $nome;
		 public function atribuirNome($nome){
			 $this->$nome =$nome;
		 }
	 }

	 $cliente = new Cliente();
	 $cliente->atribuirNome('Cleiton');
	 var_dump($cliente);


   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
