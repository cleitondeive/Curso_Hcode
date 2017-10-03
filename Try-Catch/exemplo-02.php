
  <?php
  //Tratamentos Try-Catch PHP 7...
function trataNome($name){
  if (!$name) {
      throw new Exception("Nenhum nome foi informado ", 1);
  }
   echo ucfirst($name)."<br>";

}

try {
  trataNome("Cleiton");
  trataNome("");

} catch (Exception $e) {
  echo $e->getMessage();

}finally{
  echo "Executou o try!";
}




  ?>
