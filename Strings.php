<?php

    $nome = 'Thiago';
    //echo "$nome Muniz Taveira Filho\n";//INTERPOLAÇÃO DE STRINGS
    $nome[2] = 'e';

    //echo $nome;

    //sttr_replace(SEARCH, REPLACE, SUBJECT)
    //echo str_replace("Muniz", "Funk", "Thiago Muniz Taveira Filho");
    $testeSub = "Thiago Muniz";
    $stringSubs = str_replace($testeSub, "Deborah", $testeSub);
    echo $testeSub, "\n$stringSubs";

?>