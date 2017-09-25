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
		<h1 class="h1-titulocor">27-Aula-Hcode-Poo-Fundamentos em 30 Minutos ex-02.php</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Poo Rb-Tech em 30 Minutos-->



 <?php

	//Criação da Classe Conta
	class Conta{
		protected $agencia;
		protected $conta;
		protected $saldo;
	
	public function __construct($agencia,$conta,$saldo){
		$this->agencia = $agencia;
		$this->conta = $conta;
		$this->saldo = $saldo;
	}
	public function getDetalhes(){
		return "Agencia: {$this->agencia} | Conta: {$this->conta} | Saldo: {$this->saldo}<br />";
	}
	public function depositar($valor){
		$this->saldo += $valor;
		echo "Deposito de : {$valor}| Saldo Atual: {$this->saldo}<br />";
	 }
	 
	}

	class Poupanca extends Conta{
		public function saque($valor){
		if($this->saldo >= $valor):
			$this->saldo -=$valor;
			echo "Saque de : {$valor}| Saldo Atual: {$this->saldo}<br />";
		else:
			echo "Saque Não Autorizado de Valor | Saldo Atual: {$this->saldo}<br/>";
		endif;

		}

	}
//Criação da Classe Corrente

    
	class Corrente extends Conta{
		protected $limite;
		public function __construct($agencia,$conta,$saldo,$limite){
			parent:: __construct($agencia,$conta,$saldo);
			$this->limite = $limite;
		}

		public function saque($valor){
		if(($this->saldo + $this->limite) >= $valor):
			$this->saldo -=$valor;
			echo "Saque de : {$valor}| Saldo Atual: {$this->saldo}<br />";
		else:
			echo "Saque Não Autorizado de Valor | Saldo Atual: {$this->saldo} | Limite: {$this->limite}<br/>";
		endif;

		}

	}




	$c1 = new Corrente(100,2586,5000,500);
	$c1->depositar(1800);
	$c1->saque(2500);
	$c1->saque(6500);
	echo $c1->getDetalhes();
	
   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
