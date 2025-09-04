<?php 
    $nome = $_POST['nome'] ?? '';
    $cidade = $_POST['cidade'] ?? '';

    if ($cidade == "Curitiba" || $cidade == "curitiba" || $cidade == "CURITIBA" ) {
        echo "Seja bem-vindo, Curitibano!";
    } else {
        echo "<p> Seja bem-vindo $nome!</p>";
    }
?>
