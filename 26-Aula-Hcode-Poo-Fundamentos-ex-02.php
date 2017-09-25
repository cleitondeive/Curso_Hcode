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
		<h1 class="h1-titulocor">26-Aula-Hcode-Poo-Fundamentos em 30 Minutos ex-02.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Poo Rb-Tech em 30 Minutos-->



 <?php

	//Criação da Classe Fabricante
	class Fabricante{
		private $nome;

		public function __construct($nome){
			$this->nome = $nome;

		}
		public function getNome(){
			return $this->nome;
		}
	}

    //Criação da Classe Produto
	class Produto{

		private $descricao; //caracteristicas ou Atributos da minha classe Produto
		private $preco;     //caracteristicas ou Atributos da minha classe Produto
		private $fabricante;
		public function __construct($descricao,$preco,Fabricante $fabricante){
			$this->descricao = $descricao;
			$this->preco = $preco;
			$this->fabricante = $fabricante;

		}
		
		public function getDetalhes(){ //comportamentos functions nosso metodos

			return "O Produto {$this->descricao} Custa: {$this->preco} Reais. Fabricante: {$this->fabricante->getNome()}";

		}

	
	}
	$f1 = new Fabricante('Editora B');
	$p1 = new Produto('Livro',50, $f1);
	//add valores para o nosso produto
	//$p1->setDescricao ('Livro');
	//$p1->setPreco (50);

	//var_dump($p1);

	echo $p1->getDetalhes();
	


   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
