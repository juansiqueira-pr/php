<?php 
    $valor_compra = 140; // variável que armazena o valor original
    $cupom = true; // variável que armazena o status do cupom
    $tem_desconto = ($valor_compra >= 150 || $cupom); // variável que define as condições de valor mínimo para desconto ou se possui cumpom
    $desconto = $tem_desconto ? "Desconto de 10% aplicado" : "Não possui desconto"; // operador ternário que define a mensagem de desconto
    $calculo = $tem_desconto ? $valor_compra - ($valor_compra * 0.1) : $valor_compra; // operador ternário que realiza o cálculo do desconto caso "$tem_desconto" for verdadeiro

    echo "Valor original da compra: " . $valor_compra . "\n" . $desconto . "\n";
    echo "Valor final: " . $calculo;
?>