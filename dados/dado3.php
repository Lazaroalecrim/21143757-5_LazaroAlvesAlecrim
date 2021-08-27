<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <link rel="stylesheet" type"text/css" href="estilo/estilos.css">

    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>

<?php


$produtos3 = array(
    array('ingredientes1' =>  'recheio sabor torta de morango ( leite integral em pó, gordura vegetal, açúcar, emulsificantes ésteres de ácido 
    ricinoleico interesterificados com poliglicerol e lecitina de soja, aromatizantes, acidulante ácido cítrico e corante artificial vermelho 40), 
    chocolate ao leite (açúcar, leite integral em pó, manteiga de cacau, massa de cacau, creme de leite em pó, emulsificantes lecitina de soja e
     ésteres de ácido ricinoleico interesterificados com poliglicerol e aromatizante), chocolate branco, açúcar granulado e biscoito. CONTÉM GLÚTEN CONTÉM LACTOSE',
    'preco' => 15.99,
    'nutricional' => 'Porção de 200g (2 copos)
    (*) % Valores diários de referência com base em uma dieta de 2.000kcal ou 8.400kJ. Seus valores diários 
    podem ser maiores ou menores dependendo de suas necessidades energéticas. (**) VD não estabelecido. '),
    );
?>
    <?php
foreach ($produtos3 as $key => $value){
    print_r ( "<h2>Mousse morango 300G  Valor R$ " . $value["preco"] . "</h2>");     

}
?>
<img src="imagem/mousse1.jpg" alt="some text" width=350 height=350 margin=100>
<?php
foreach ($produtos3 as $key => $value){
    print_r ( "<h3> Ingredientes " . $value["ingredientes1"] . "</h3>");     

}
foreach ($produtos3 as $key => $value){

    print_r ( "<h3> Nutricional info.  " . $value["nutricional"] . "</h3>");     
}

?>

</body>
</html>