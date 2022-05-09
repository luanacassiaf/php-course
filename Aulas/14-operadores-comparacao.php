<?php

// Operador de igualdade
if(10 == "10"):
    echo "Verdadeiro" . '<br>';
else:
    echo "Falso" . '<br>';
endif;

if(10 != "10"):
    echo "Verdadeiro" . '<br>';
else:
    echo "Falso" . '<br>';
endif;

echo '<hr>';

// Operador de identidade
if(10 === "10"):
    echo "Verdadeiro" . '<br>';
else:
    echo "Falso" . '<br>';
endif;

if(10 !== "10"):
    echo "Verdadeiro" . '<br>';
else:
    echo "Falso" . '<br>';
endif;

echo '<hr>';

// Operador de diferença
if(10 <> 11):
    echo "Verdadeiro" . '<br>';
else:
    echo "Falso" . '<br>';
endif;

echo '<hr>';

// Menor
if(10 < 11):
    echo "Verdadeiro" . '<br>';
else:
    echo "Falso" . '<br>';
endif;

// Menor ou igual
if(10 <= 11):
    echo "Verdadeiro" . '<br>';
else:
    echo "Falso" . '<br>';
endif;

// Maior
if(10 > 11):
    echo "Verdadeiro" . '<br>';
else:
    echo "Falso" . '<br>';
endif;

// Maior ou igual
if(10 >= 11):
    echo "Verdadeiro" . '<br>';
else:
    echo "Falso" . '<br>';
endif;

echo '<hr>';

// Spaceship
var_dump(10 <=> 11);
// Lado esquerdo menor: -1
// Lados de mesmo valor: 0
// Lado direito menor: 1
