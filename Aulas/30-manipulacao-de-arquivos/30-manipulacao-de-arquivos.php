<?php

$file = 'arquivo.txt';
$content = "Testando\r\n";

// Abre arquivo somente para escrita
$openFile = fopen($file, 'a');
fwrite($openFile, $content);
fclose($openFile);

// Abre arquivo somente para leitura
$openFile = fopen($file, 'r');
$size = filesize($file);

while(!feof($openFile)) {
    $linha = fgets($openFile, $size);
    echo $linha . '<br>';
}
fclose($openFile);