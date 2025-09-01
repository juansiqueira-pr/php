<?php 
    $dia_semana = 7; // variável que armazena o dia da semana (1 a 7)
    $status; // variável que armazena status do dia

    // estrutura condicional para determinar se é dia útil ou fim de semana

    if ($dia_semana >=2 && $dia_semana <= 6) {
        $status = "Dia útil";
    } else {
        $status = "Fim de semana";
    }

    // estrutura switch para determinar o nome do dia da semana

    switch ($dia_semana) {
        case 1: 
            echo $status = "Domingo\n". $status;
            break;
        case 2:
            echo $status = "Segunda-feira\n". $status;
            break;
        case 3:
            echo $status = "Terça-feira\n". $status;
            break;
        case 4:
            echo $status = "Quarta-feira\n". $status;
            break;
        case 5:
            echo $status = "Quinta-feira\n". $status;
            break;
        case 6:
            echo $status = "Sexta-feira\n". $status;
            break;
        case 7:
            echo $status = "Sábado\n". $status;
            break;
        default:
            echo $status = "Dia inválido";
            break;
    }
?>
