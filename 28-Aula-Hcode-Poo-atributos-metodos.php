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
		<h1 class="h1-titulocor">28-Aula-Hcode-Poo-atributos-Metodos.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Seção-09-->



 <?php
#Conhecendo os Atributos e Métodos...
//Criação da Classe carro
	class Carro{

		private $modelo; //Criação dos metodos e Atributos..
		private $motor; //Criação dos metodos e Atributos..
		private $ano;  //Criação dos metodos e Atributos..

//Chamada da Função Get_Modelo para retornar o this-> os dados
  public function getModelo(){
		return $this->modelo;
	}
	//Chamada da Função Set para setar os dados
	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	//Chamada da Função Get_Motor
	  public function getMotor():float{
			return $this->motor;
		}
		//Chamada da Função Set para setar os dados
		public function setMotor($motor){
			$this->motor = $motor;
		}
		//Chamada da Função Get_Ano
		  public function getAno():int{
				return $this->ano;
			}
			//Chamada da Função Set para setar os dados
			public function setAno($ano){
				$this->ano = $ano;
			}
 //Função para exibir dados do Atributos da classe carro.

	  public function exibir(){
			return array(
				'modelo'=>$this-> getModelo(),
				'motor'=>$this->getMotor(),
				'ano'=>$this->getAno(),

			);

		}

	}

	$car1 = new Carro();//instancio a minha variavel.. com o objeto New.
	$car1->setModelo("Gol Gt"); //uso o set porque só ele consegue visualizar no metodo private
	$car1->setMotor(1.6);
	$car1->setAno(2017);

	var_dump($car1->exibir());




   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
