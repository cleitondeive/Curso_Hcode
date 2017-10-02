
<?php
//Criando arquivos com fopen() PHP 7
$file = fopen("log.txt","a+");
fwrite($file, date("Y-m-d H:i:s")."\r\n");
fclose($file);
echo "Arquivo Criado com Sucesso";

?>
