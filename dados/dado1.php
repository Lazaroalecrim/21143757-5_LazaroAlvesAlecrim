<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <link rel="stylesheet" type"text/css" href="estilo/estilos.css">

    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>

<div id="example1">
<h1>Informações Produto</h1>


<?php

$produtos1 = array(
    array('ingredientes' =>  'Chocolate ao leite (acucar , leite integral em pó, manteiga de cacau , massa de cacau, creme de leite em pó, 
    emulsificantes lecitina de soja e ésteres de ácido ricinoleico interesterificados com poliglicerol e aromatizante), recheio de trufa ao 
    leite (chocolate ao leite, creme vegetal, álcool de cereais, aromatizante, umectante glicerina, conservante sorbato de potássio e enzima 
    invertase) e recheio de trufa branca sabor maracujá (chocolate branco (acucar, manteiga de cacau, leite integral em pó, soro de leite em 
    pó, creme de leite em pó, extrato de malte, emulsificantes lecitina de soja e ésteres de ácido ricinoleico interesterificados com poliglicerol e aromatizante), creme vegetal, suco de maracujá, álcool de cereais, extrato de malte, aromatizantes, umectante glicerina, enzima invertase, conservante sorbato de potássio e acidulante ácido citrico). CONTÉM GLÚTEN CONTÉM LACTOSE',
    'preco' => 3.55,
    'nutricional' => 'Porção de 30g (01 unidade)(*) % Valores diários com base em uma dieta de 2.000 kcal 
    ou 8400 kJ. Seus valores diários podem ser maiores ou menores dependendo de suas necessidades energéticas.
     (**) VD não estabelecido'),
    );

foreach ($produtos1 as $key => $value){

     print_r ( "<h2> Trufa maracujá 30g  Valor R$ " . $value["preco"] . "</h2>");     
}
?>

<img src="imagem/bomarac.png" alt="some text" width=300 height=200 margin=100>

<?php
foreach ($produtos1 as $key => $value){
       
    print_r ("<h3> Ingredientes: " . $value["ingredientes"] . "</h3>");
      
}

?>
<?php
foreach ($produtos1 as $key => $value){  
    
    print_r ("<h3> Nutricional: " . $value["nutricional"] . "</h3>");
 
}
?>

<!-- Tablete Chocoladate -->


 </body>
</html>