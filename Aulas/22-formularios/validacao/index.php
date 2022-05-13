<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST['enviar'])) {
            $erros = [];

            if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
                $erros[] = 'Idade precisa ser inteiro.';
            }

            if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
                $erros[] = 'Peso precisa ser float.';
            }

            if (!$altura = filter_input(INPUT_POST, 'altura', FILTER_VALIDATE_FLOAT)) {
                $erros[] = 'Altura precisa ser float.';
            }

            if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
                $erros[] = 'IP inválido.';
            }

            if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
                $erros[] = 'URL inválida.';
            }

            if (!empty($erros)) {
                foreach ($erros as $erro) {
                    echo "<li> {$erro} </li>";
                }
            } else {
                echo 'Dados corretos';
            }
        }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Idade: <input type="text" name="idade"><br>
        Peso: <input type="text" name="peso"><br>
        Altura: <input type="text" name="altura"><br>
        IP: <input type="text" name="ip"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar">Enviar</button>
    </form>
</body>
</html>