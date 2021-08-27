<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <link rel="stylesheet" type"text/css" href="estilo/estilos.css">

    <title>Título da página</title>
    <meta charset="utf-8">
  </head>

  <body>



<?php

    $location = array(
    array('localizacao' => 'Estamos localizados em Chapecó, de onde enviamos 
    nossos produtos para atender aos clientes localizados em todas as 
    regiões do Brasil. '),

    );


foreach ($location as $key => $value){

  echo "<h1>" . $value["localizacao"] . "</h1>";
  
}
?>

<!--Google map-->
<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
  <iframe src="https://maps.google.com/maps?q=chapeco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
    style="border:0" allowfullscreen></iframe>
</div>

<!--Google Maps-->

</body>
</html>