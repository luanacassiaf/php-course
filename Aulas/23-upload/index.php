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
        $formatosPermitidos = ['png', 'jpeg', 'jpg', 'gif'];
        $numArquivos = count($_FILES['arquivo']['name']);
        $contador = 0;

        while ($contador < $numArquivos) {
            $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

            if (in_array($extensao, $formatosPermitidos)) {
                $pasta = 'arquivos/';
                $temp = $_FILES['arquivo']['tmp_name'][$contador];
                $novoNome = uniqid().".{$extensao}";

                if (move_uploaded_file($temp, $pasta.$novoNome)) {
                    echo "Upload feito com sucesso em {$pasta}.{$novoNome}. <br>";
                } else {
                    echo 'Erro ao enviar arquivo. <br>';
                }
            } else {
                echo "Extensão {$extensao} não permitida. <br>";
            }

            ++$contador;
        }
    }
?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple>
        <input type="submit" name="enviar">
    </form>
</body>
</html>