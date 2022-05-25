<?php
    // Caso arquivo requerido não seja encontrado,
    // um erro é produzido e o script é interrompido
    require 'header.php';

    // Se o arquivo já foi incluído,
    // não inclui novamente
    require_once 'header.php';
?>

<h1>Hello World</h1>

<?php
    // Caso arquivo incluído não seja encontrado,
    // um aviso é produzido, mas o script é executado
    include 'footer.php';

    // Se o arquivo já foi incluído,
    // não inclui novamente
    include_once 'footer.php';
?>