
  <?php
  //Usando a cURL PHP 7...
  $cep = "78128248";
  $link = "http://apps.widenet.com.br/busca-cep/api/cep/$cep.json";

  $ch = curl_init($link);

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $response = curl_exec($ch);

  curl_close($ch);

  $data = json_encode($response, true);

  print_r($data);

  ?>
