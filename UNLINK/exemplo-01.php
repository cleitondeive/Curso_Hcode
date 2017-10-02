
<?php
//Excluindo arquivos PHP 7...

$file = fopen("teste.txt","w+");

fclose($file);

unlink("teste.txt");
echo "Arquivo removido com sucesso...";




?>
