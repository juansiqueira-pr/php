<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semaforo</title>
</head>

<body>
    <?php 
        
        $mensagem = "";
        $mensagem .= "Selecione uma cor do semáforo";
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["cor"])) {
                $cor = $_POST["cor"] ?? '';
                $mensagem = $_POST[''] ??'';

            if ($cor == 'vermelho') {
                $mensagem="Pare!";
            } elseif ($cor == 'amarelo') {
                $mensagem="Atenção!";
            } elseif ($cor == 'verde') {
                $mensagem="Siga!";
            } else {
                $mensagem="Cor inválida!";
            }
        }
    }
        ?>

    <h1>Semáforo</h1>
    <h2><?php echo $mensagem?></h2>

    <form method="post" action="exercicio1.php">
        <select name="cor" id="cor">
            <option value="" disabled selected>Selecione</option>
            <option value="vermelho">Vermelho</option>
            <option value="amarelo">Amarelo</option>
            <option value="verde">Verde</option>
            <option value="azul">Azul</option>
            <option value="roxo">Roxo</option>
        </select>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>

