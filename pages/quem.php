<?php

    $dado = array(
    array('marca' => 'Estamos localizados em Chapecó, de onde enviamos 
    nossos produtos para atender aos clientes localizados em todas as 
    regiões do Brasil. Nossos doces são diferenciados, pois utilizamos 
    as melhores matérias-primas, como chocolates suíços de excelente qualidade.', 
    'missao' => 'Existimos para fortalecer chocolates de qualidade.',
    'visao' => 'Ser a melhor empresa de chocolates do Brasil',
    'valores' => 'Sinta-se especial com a nossa marca'),

    );


foreach ($dado as $key => $value){

    echo $value["marca"];
    echo $value["missao"];
    echo $value["visao"];
}
?>