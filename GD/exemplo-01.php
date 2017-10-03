
  <?php
  //Processamento de Imagem (GD) PHP 7...

  header("Content-Type: image/png");

  $image = imagecreate(256, 256);
  $black = imagecolorallocate($image, 0, 0, 0);
  $red = imagecolorallocate($image, 255, 0, 0);

  imagestring($image, 5, 60, 120, "Curso de Php 7", $red);
  imagepng($image);

  imagedestroy($image);




  ?>
