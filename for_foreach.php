<?php

    for($i = 0; $i < 10; $i++){
        //echo "Primeiro FOR:\n".$i."\n";
    }


    $vetor = array(1,2,3,4,5);
    for($i=0; $i < 5; $i++){
        //echo "Segundo FOR:\n".$vetor[$i] ."\n";
    }


    /*FOREACH([vetor] as [variável]) 
      VARIÁVEL: representa um elemento do $vetor a cada iteração
    */
    foreach($vetor as $item){
        //echo "Terceiro FOR:\n".$item."\n";
    }

    //BREAK
    $salvador = 10;
    for($i=0;;$i++){
        if($i == $salvador){
            break;
        }
        //echo "Quarto FOR:\n".$i."\n";
    }

    $vetor2 = array("Thiago", "Deborah", "Daniel", "Yuri");

    foreach($vetor2 as $variavel){
        //echo $variavel."\n";
    }

    //CONTINUE
    for($i=0; $i < 10; $i++){
        if($i%2 == 0){
            continue;
        }
        //echo $i;
    }

    //Exemplo
    $colecao = [1, 3, 5, 7, 9, 10, 8, 4, 5];
    for($i=0; $i < count($colecao); $i++){
        if($colecao[$i]%2 == 0){
            echo "Par: ".$colecao[$i]."\n";
        } else {
            echo "Impar: ".$colecao[$i]."\n";
        }
    }

?>