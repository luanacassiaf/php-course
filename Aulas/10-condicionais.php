<?php

// If e Else
$numero = 0;
if ($numero == 10) :
    echo "Igual a 10.";
elseif ($numero <= 9) :
    echo "Menor ou igual a 9.";
else :
    echo "Diferente de 10.";
endif;

echo "<hr>";

$media = 7;
// Operador ternário
echo ($media >= 7) ? "Verdadeiro" : "Falso";

echo "<hr>";

// Switch e Case
$cor = 'B';
switch ($cor):
    case 'R':
        echo 'Vermelho';
        break;
    case 'G':
        echo 'Verde';
        break;
    case 'B':
        echo 'Azul';
        break;
    default:
        echo 'Não é vermelho, verde ou azul.';
endswitch;
