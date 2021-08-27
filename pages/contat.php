<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <link rel="stylesheet" type"text/css" href="estilo/estilos.css">

    <title>Título da página</title>
    <meta charset="utf-8">
  </head>

  <body>


  <?php

  $dado = array(
    array('contat' => ' Contate-nos, estamos prontos para te atender!',
        'tel' => 'Telefone principal (49) 3311-1111',
        'atendimento' => 'Seguanda a sábado das 07:30 às 18:00 sempre aberto ao meio dia!'
  ),

    );


foreach ($dado as $key => $value){

    echo "<h3>" . $value["contat"] . "</h3>";

}
foreach ($dado as $key => $value){

  echo "<h3>" . $value["tel"] . "</h3>";

}
foreach ($dado as $key => $value){

  echo "<h3>" . $value["atendimento"] . "</h3>";

}

?>

<div>

<form name="meu_form">

  <h1>Entre em contato</h1>

  <input type="text" id="nomeid" placeholder="Tiago Vale" required="required" name="nome" />
  <label for="nome">Nome</label>
  <nav>----</nav>
  
  <input type="tel" id="foneid" placeholder="(xx)xx-xx-xx-xx" name="fone" />
  <label for="fone">Fone</label>
  <nav>----</nav>
  <input type="email" id="emailid" placeholder="fulano@mail.com" name="email" />
  <label for="email">Email</label>
  <nav>----</nav>
  <textarea placeholder="Deixe sua opnião"></textarea>

  <input type="submit" class="enviar" onclick="Enviar();" value="Enviar" />
</form>

</div>

<div class="p-3 mb-2 bg-secondary text-white"></div>


</body>
</html>
