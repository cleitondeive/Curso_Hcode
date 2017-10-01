
<?php
//Lendo e manipulando pastas/diretórios com PHP 7
$name = "imagens";
if(!is_dir($name)){
	mkdir($name);
	echo("DIretório $name Criado com Sucesso");
}
else{
	rmdir($name);
	echo"Ja existe o diretório:$name  e foi removido com sucesso...";
}


 ?>




