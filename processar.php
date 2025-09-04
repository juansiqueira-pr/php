<?php 
    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $idade = (int)$_POST ['idade'] ?? '';

    if ($idade < 18) {
        echo "Olá, $nome. Você é menor de idade, infelizmente não pode se cadastrar.";
    } else {
        echo "<h2> Cadastro Concluído!</h2>";
        echo "<h3> Dados do usuário:</h3>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Idade:</strong> $idade</p>";
    }



?>