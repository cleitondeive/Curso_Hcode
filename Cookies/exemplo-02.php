
<?php
//Usando Cookies PHP 7...
if (isset($_COOKIE["NOME_DO_COOKIE"])) {

  $obj = json_decode( $_COOKIE["NOME_DO_COOKIE"]);
  echo $obj-> empresa;
}

?>
