<?php 
    $nome = $_POST['nome'] ?? '';
    $num1 = (int)$_POST['num1'] ??'';
    $num2 = (int)$_POST['num2'] ??'';

    if ($num1 + $num2) {
        echo "$nome, sua soma $num1 + $num2 é = " . ($num1 + $num2);
    }

    var_dump($_POST);
    echo"<br>";
    var_dump($num1);
    echo"<br>";
    var_dump($num2);
    echo"<br>";

?>