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
		<h1 class="h1-titulocor">40-Aula-Hcode-Poo-ex-07-Herança.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Seção-09-->



 <?php
//40-Aula-Hcode-Poo-ex-07.php--Exemplo de Herança...
		class Documentos{ //criação da class.

			private $numero; //criação dos metodos ou atributos..

			public function getNumero(){
				return $this->numero;
			}
			public function setNumero($n){
			 $this->numero = $n;
			}

		}

		class Cpf extends Documentos{
			public function validar():bool{

			$numeroCPF = $this->getNumero();
				//aqui vai a validação do Cpf
				return true;
			}

		}

		$doc = new Cpf();
		$doc->setNumero("222222222");
		var_dump($doc->validar());
		echo "<br>";

		echo $doc->getNumero();


   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
