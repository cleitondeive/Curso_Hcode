
<?php
//Excluindo arquivos PHP 7...
if (!is_dir("img")) mkdir("img");
  foreach (scandir("img") as $item) {
    if (!in_array($item, array(".",".."))) {
      unlink("img/".$item);
    }
  }

  echo "ok";






?>
