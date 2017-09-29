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
		<h1 class="h1-titulocor">Exemplo-01 DAO-PDO.</h1>
	</div>

</div>
<hr>

<!--inicio do Curso Php-->
<h1>Lets-go ex-01.Seção DAO-PDO-Select.....</h1>
<hr>

<?php
# PHP 7 Exemplo-01 DAO-PDO

class Sql extends PDO {
	private $conn;
	public function __construct(){
		$this->conn = new PDO("mysql:host=127.0.0.1;dbname=dbphp7", "root", "master30*");
	}
	private function setParams($statement, $parameters = array()){
		foreach ($parameters as $key => $value) {

			$this->setParam($statement, $key, $value);
		}
	}
	private function setParam($statement, $key, $value){
		$statement->bindParam($key, $value);
	}
	public function query($rawQuery, $params = array()){
		$stmt = $this->conn->prepare($rawQuery);
		$this->setParams($stmt, $params);
		$stmt->execute();
		return $stmt;
	}
	public function select($rawQuery, $params = array()):array
	{
		$stmt = $this->query($rawQuery, $params);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

 ?>






<script src="js/jquery-3.1.1.min.js"></script> <!==Use o Script js/jquery no Final da pagina==>
<script src="js/bootstrap.min.js"></script>	<!==Use o Script js/bootstrap no Final da pagina==>
<script src="js/main.js"></script>


</body>
</html>
