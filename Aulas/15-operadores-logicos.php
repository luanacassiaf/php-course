<?php

$idade = 22;
$nome = "Luana";

// And
if (22 == $idade && $nome == 'Luana') :
    echo "Verdadeiro" . '<br>';
else :
    echo "Falso" . '<br>';
endif;

// Or
if (5 == $idade || $nome == 'Pikachu') :
    echo "Verdadeiro" . '<br>';
else :
    echo "Falso" . '<br>';
endif;

// Xor - Retorna verdadeiro quando apenas um é verdadeiro
if (22 == $idade xor $nome == 'Pikachu') :
    echo "Verdadeiro" . '<br>';
else :
    echo "Falso" . '<br>';
endif;

// Negação
if (22 == $idade && !($nome == 'Pikachu')) :
    echo "Verdadeiro" . '<br>';
else :
    echo "Falso" . '<br>';
endif;
