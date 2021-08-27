<?php

    $dado = array(
    array('somos' => ' Somos a confeitaria da Doces e CIA, uma confeitaria especializada em doces de alto padrão, com receitas trazidas da Itália pela nossa família. ', 
    'fazemos' => 'Fazemos todos os tipos de doces trufados, em especial o de brigadeiro tradicional, o nosso delicioso e irresistível doce italiano e outras 
    receitas de doces com 70% de cacau natural.',
    'começamos' => 'Estamos no mercado desde 1953 e, por isso, somos uma das confeitarias mais tradicionais da cidade de Chapecó.',
    'atividade' => 'Nosso objetivo é oferecer para você os doces mais gostoso, fresquinho, crocante e saboroso de Chapecó, agora entregue no seu endereço, 
    pelo nosso serviço de delivery, em parceria com o iFood e o Uber Eats!'),

    );


foreach ($dado as $key => $value){

    echo "<h3>" . $value["somos"] . "</h3>";

    echo "<h3>" . $value["fazemos"] . "</h3>";

    echo "<h3>" . $value["começamos"] . "</h3>";

    echo "<h3>" . $value["atividade"] . "</h3>";


   
}
?>