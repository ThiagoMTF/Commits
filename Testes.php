<?php
$preco = 20000;
$numero_parcelas = 10;
$desconto = 1500;
$valor_juros = 50;

$total = $preco + $numero_parcelas * $valor_juros - $desconto;

echo $total;
?>