<?php

$idade = 22;
$nome = 'Luana';

// And
if (22 == $idade && 'Luana' == $nome) {
    echo 'Verdadeiro'.'<br>';
} else {
    echo 'Falso'.'<br>';
}

// Or
if (5 == $idade || 'Pikachu' == $nome) {
    echo 'Verdadeiro'.'<br>';
} else {
    echo 'Falso'.'<br>';
}

// Xor - Retorna verdadeiro quando apenas um é verdadeiro
if (22 == $idade xor 'Pikachu' == $nome) {
    echo 'Verdadeiro'.'<br>';
} else {
    echo 'Falso'.'<br>';
}

// Negação
if (22 == $idade && !('Pikachu' == $nome)) {
    echo 'Verdadeiro'.'<br>';
} else {
    echo 'Falso'.'<br>';
}
