
<?php
//Usando Cookies PHP 7...
$data = array(
"empresa"=>"Webmars Treinamentos"
);

setcookie("NOME_DO_COOKIE",json_encode($data),time() + 3600);
echo "ok";

?>
