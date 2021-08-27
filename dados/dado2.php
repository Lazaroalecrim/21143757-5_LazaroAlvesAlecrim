<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <link rel="stylesheet" type"text/css" href="estilo/estilos.css">

    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
  <h1>Informações Produto</h1>

<?php


$produtos2 = array(
    array('ingredientes1' =>  'Açúcar, Leite Em Pó Integral, Manteiga De Cacau, Pasta De Cacau, Pistache, Macadâmia Caramelizada (Macadâmia, Açúcar E Canela),
    Amêndoas, Emulsificante Lecitina De Soja E Aromatizante. ALÉRGICOS: CONTÉM PISTACHE, MACADÂMIA, AMÊNDOAS E DERIVADOS DE LEITE E SOJA. PODE CONTER AMENDOIM, 
    AVELÃ, CASTANHA-DE-CAJU, CASTANHA-DO-BRASIL E NOZES. CONTÉM LACTOSE. NÃO CONTÉM GLÚTEN.',
    'preco' => 23.95,
    'nutricional' => 'Porção 25g (1/4 da unidade).
    Qtde. por porção	% VD(*)
    Valor energético	145kcal = 609kJ	(7%VD*)
    Carboidratos	12g	(4%VD*)
    Proteínas	2,2g	(3%VD*)
    Gorduras totais	9,8g	(18%VD*)
    Gorduras saturadas	5,3g	(24%VD*)
    Fibra alimentar	1,0g	(4%VD*)
    Sódio	27mg	(1%VD*)
    “Não contém quantidades significativas de gorduras trans.”
    *% Valores Diários de referência com base em uma dieta de 2000 kcal ou 8400 kJ.
    Seus valores diários podem ser maiores ou menores dependendo de suas necessidades energéticas. '),
    );
?>
<?php
foreach ($produtos2 as $key => $value){

     print_r ( "<h2> TABLETE AO LEITE C/ MACAD, PSTC E AMD 100G  Valor R$ " . $value["preco"] . "</h2>");     
}

?>

<img src="imagem/tab1.jpg" alt="some text" width=350 height=350 margin=100>

<?php
foreach ($produtos2 as $key => $value){

print_r ( "<h3> Ingredientes: " . $value["ingredientes1"] . "</h3>");     
}

?>

<?php

foreach ($produtos2 as $key => $value){

print_r ( "<h3> Tabela nutricional:  " . $value["nutricional"] . "</h3>");     
}

?>
</body>
</html>