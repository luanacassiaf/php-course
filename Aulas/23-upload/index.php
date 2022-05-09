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
    if(isset($_POST['enviar'])):
        $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
        
        if(in_array($extensao, $formatosPermitidos)):
            $pasta = "arquivos/";
            $temp = $_FILES['arquivo']['tmp_name'];
            $novoNome = uniqid().".$extensao";

            if(move_uploaded_file($temp, $pasta.$novoNome)):
                $mensagem = "Upload feito com sucesso.";
            else:
                $mensagem = "Erro.";
            endif;
        else:
            $mensagem = "Formato inválido.";
        endif;

        echo $mensagem;
    endif;
?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <input type="submit" name="enviar">
    </form>
</body>
</html>