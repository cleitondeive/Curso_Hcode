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
		<h1 class="h1-titulocor">38-Aula-Hcode-Poo-ex-05.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Seção-09-->



 <?php
//38-Aula-Hcode-Poo-ex-05.php Encapsulamento...

	class Pessoa{
		public $nome = "Rsmus Lerdof";
		protected $idade = 43;
		private $senha = "123456";



		public function verDados(){
			echo $this->nome."<br>";
			echo $this->idade."<br>";
			echo $this->senha."<br>";

		}

	}

	//Criar uma Class
	class Programador extends Pessoa{


				public function verDados(){
					echo get_class($this)."<br>"; //isso é apenas para testar de qual dados esta vindo a class.
					echo $this->nome."<br>";
					echo $this->idade."<br>";
					echo $this->senha."<br>";

				}

	}

	$obj = new Programador();
	//	echo $obj->idade;
	$obj->verDados();



   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
