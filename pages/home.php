<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Título da página</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>


  <!-- Layout -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagem/doce1.jpg" class="d-block w-100" alt="doces">
      <div class="carousel-caption d-none d-md-block">
        <h1>Feitos sob medida para a sua vontade de chocolate!</h1>
        <p>Uma sobremesa perfeita com combinações deliciosas</p>



      </div>
    </div>
  </div>


  <div class="alert alert-danger" role="alert">
    <h3>Deixe o seu dia muito mais gostoso, veja agora mais detalhes abaixo das nossas linhas!</h3>
  </div>

  <!--- Outro menu -->

  <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="imagem/mousse.jpg" alt="Mousses">
    <div class="card-body">
      <h5 class="card-title">Mousses</h5>
      <p class="card-text">Creme ao leite 36% cacau com recheio cremoso de mousse tradicional 
        (leite condensado e chocolate) decorada com frutas importadas.</p>
    </div>
    <div class="card-footer">
      <p><small class="text-muted">Last updated 3 mins ago</small></p>
      <a href="index.php?det1=dados/dado3.php" class="btn btn-primary">Ver detalhes</a></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="imagem/barra.jpg" alt="Tablete">
    <div class="card-body">
      <h5 class="card-title">Tablete de chocolate</h5>
      <p class="card-text">Produzida artesanalmente, perfeita para comer de colherada. Camadas intercaladas do nosso 
        delicioso tablete com creme de avelã, chocolate branco e cobertura de pedaços de chocolate branco.</p>
    </div>
    <div class="card-footer">
      <p><small class="text-muted">Last updated 3 mins ago</small></p>
      <a href="index.php?det2=dados/dado2.php" class="btn btn-primary">Ver detalhes</a></p>

    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="imagem/marac1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Maracujá</h5>
      <p class="card-text">Levemente firme por fora, com recheio macio. Bombom de maracujá equilibrando doce 
        e azedo num recheio cremoso e com casquinha de chocolate meio amargo pra dar mais sabor ainda!</p>
    </div>
    <div class="card-footer">
      <p><small class="text-muted">Last updated 3 mins ago</small></p>
      <a href="index.php?det3=dados/dado1.php" class="btn btn-primary">Ver detalhes</a></p>

    </div>
  </div>
</div>


    <main>


    <?php

   // include ("dados/dado.php");

    if (isset($_GET["det1"]) && !empty($_GET["det1"])) {
      $det1 = $_GET["det1"];
      include($det1);
    } else {
      //include ("dados/dado.php");
    }

    // include ("dados/dado.php");
 
     if (isset($_GET["det2"]) && !empty($_GET["det2"])) {
       $det2 = $_GET["det2"];
       include($det2);
     } else {
       //include ("dados/dado.php");
     }

     // include ("dados/dado.php");
  
      if (isset($_GET["det3"]) && !empty($_GET["det3"])) {
        $det = $_GET["det3"];
        include($det3);
      } else {
        //include ("dados/dado.php");
      }
      
      ?>
  
     

</main>
  

  </form>
  </nav>

  <div class="p-3 mb-2 bg-secondary text-white">.</div>
  <!--<div class="p-3 mb-2 bg-gradient-blue text-blue">.bg-gradient-danger</div> -->


  <!-- Footer -->

  <!-- Footer -->

</body>

</html>