<?php

    $funcionarios = array(
        array("nome" => "Alex", "idade" => 21, "salario" => 1285.27, "ativo" => true),
        array("nome" => "Thiago", "idade" => 24, "salario" => 1300.00, "ativo" => true),
        array("nome" => "Deborah", "idade" => 23, "salario" => 2000.00, "ativo" => false),
        array("nome" => "Leonardo", "idade" => 34, "salario" => 6300.00, "ativo" => true),
    );
    $bonificacao = 0.5;

    foreach($funcionarios as $vet){
        if($vet["ativo"]){
            $vet["salario"] += $vet["salario"] * $bonificacao;
            echo "Funcionario: {$vet['nome']} - Salario: {$vet['salario']}\n";
        } else {
            echo "Funcionario: " .$vet["nome"] . " - Salario: {$vet["salario"]} - INATIVO!\n";
        }
    }
    /*$funcionarios = array(
        array("nome" => "Alex", "idade" => 21, "salario" => 1285.27, "ativo" => true),
        array("nome" => "Emerson", "idade" => 35, "salario" => 3885.27, "ativo" => false),
        array("nome" => "Osvaldo", "idade" => 54, "salario" => 5285.27, "ativo" => true),
     );
     
     $bonificacao = 10;
     
     foreach($funcionarios as $funcionario){
         if($funcionario["ativo"]){
          $funcionario["salario"] += $funcionario["salario"] * ($bonificacao/100);
     
          echo "Funcionario: {$funcionario['nome']} - {$funcionario['salario']}\n";
         } else {
          echo "Funcionario: {$funcionario['nome']} - INATIVO\n";
         }
     }*/
?>