<?php 
    $nome = $_GET['nome'] ?? '';
    $cidade = $_GET['cidade'] ?? '';

    echo "<p><strong>Olá $nome da cidade de $cidade, seja bem-vindo!</strong></p>";
  
?>
