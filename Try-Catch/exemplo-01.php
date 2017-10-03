
  <?php
  //Tratamentos Try-Catch PHP 7...
  try {
    throw new Exception("Houve um Erro", 400); //esse codigo 400 eu que criei..


  } catch (Exception $e) {
    echo json_encode(array(
      "message"=>$e->getmessage(),
      "line"=>$e->getline(),
      "file"=>$e->getfile(),
      "code"=>$e->getcode()
    ));

  }



  ?>
