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
		<h1 class="h1-titulocor">25-Aula-Hcode-Poo-Fundamentos em 30 Minutos.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Poo Rb-Tech em 30 Minutos-->



 <?php

	class Produto{

		private $descricao; //caracteristicas ou Atributos da minha classe Produto
		private $preco;     //caracteristicas ou Atributos da minha classe Produto

		public function __construct($descricao,$preco){
			$this->descricao = $descricao;
			$this->preco = $preco;

		}
		
		public function getDetalhes(){ //comportamentos functions nosso metodos

			return "O Produto {$this->descricao} Custa: {$this->preco} Reais";

		}

		public function setDescricao($valor){ //no set efetuo as validaçoes para entrada de valores
			$this->descricao = $valor;
		}
		public function setPreco($valor){ //no set efetuo as validaçoes para entrada de valores
			$this->preco = $valor;
		}
		public function getDescricao(){ //no get faço a formatação p/ saidas desse valor
			return $this->descricao;
		}
		public function getPreco(){ //no get faço a formatação p/ saidas desse valor
			return $this->preco;
		}

	}

	$p1 = new Produto('Livro',50);
	//add valores para o nosso produto
	//$p1->setDescricao ('Livro');
	//$p1->setPreco (50);

	var_dump($p1);

	//echo $p1->getDetalhes();
	


   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
