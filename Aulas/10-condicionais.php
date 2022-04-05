<?php

$numero = 0;
if ($numero == 10):
    echo "Igual a 10.";
elseif ($numero <= 9):
    echo "Menor ou igual a 9.";
else:
    echo "Diferente de 10.";
endif;

echo "<hr>";

$media = 7;
// Operador ternário
echo ($media >= 7) ? "Verdadeiro" : "Falso";
