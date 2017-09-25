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
 </nav>

<div class="container">
	<div class="colxs12">
		<h1 class="h1-titulocor">Cadastro_Name_Space_Auto_Load</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php Auto_Load_Name_Space-->

 <?php

	 class Cadastro{

		 private $nome;
		 private $email;
		 private $senha;

		 public function getNome():string{
			return $this->nome;
		 }

		 public function setNome($nome){
			 $this->nome = $nome;
		 }

		 public function getEmail():string
		 {
			return $this->email;
		 }

		 public function setEmail($email){
			 $this->email = $email;
		 }

		 public function getSenha():string
		 {
			 return $this->senha;
		 }

		 public function setSenha($senha){
			 $this->senha = $senha;
		 }

		  public function __tostring(){
			  
			 return json_encode(array(
				"nome"=>$this->getNome(),
				"email"=>$this->getEmail(),
				"senha"=>$this->getSenha()

			));
		  }


	 }

	 /*

		   public function __tostring(){
			  return json_encode(array(
				 "nome"=>$this->getNome(),
				 "email"=>$this->getEmail(),
				 "senha"=>$this->getSenha()

			  ));
		   }
		   */

   ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>






</body>
</html>
