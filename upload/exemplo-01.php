  <form method="post" action="recebe_upload.php" enctype="multipart/form-data">

    <input type="file" name="fileUpload" />

    <button type="submit">send</button >
  </form>

  <?php
  //Upload de Arquivos PHP 7...
  if ($_SERVER["REQUEST_METHOD"]==="POST") {
  $file = $_FILES["fileUpload"];
  if ($file["error"]) {

  throw new Exception("Error:".$file["error"]);

  }
  $dirUploads = "uploads";

  if (!is_dir($dirUploads)) {
    mkdir($dirUploads);
  }

  if (move_uploaded_file($file["tmp_name"],$dirUploads .DIRECTORY_SEPARATOR . $file["name"])) {
    echo "Upload Realizado com sucesso";

  }
  else {
    throw new Exception("Não foi possivel realizar upload");

  }

  }

  ?>
