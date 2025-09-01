<?php 
    $peso = "49.9"; // váriavel que armazena o peso
    $altura = "1.69"; // váriavel que armazena a altura
    $imc = $peso / ($altura * $altura); // cálculo do IMC

    // estrutura condicional para determinar a classificação do IMC

    if ($imc < 18.5) {
       echo "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc<= 24.9) {
       echo "Peso normal";
    } elseif ($imc >= 25 && $imc <= 29.9) {
       echo "Sobrepeso";
    } else {
       echo "Obesidade";
    } 
?>