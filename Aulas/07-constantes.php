<?php

// Constantes
define('NOME', 'Yuri');
define('IDADE', 1);

define('POKEMON', ['Charmander', 'Squitle', 'Bulbasaur']);

echo NOME;
var_dump(NOME);
echo 'O gato '.NOME.' tem '.IDADE.' ano.';
echo '<hr>';

echo POKEMON[2];
var_dump(POKEMON);

// Constantes são globais

function exibeNome()
{
    echo NOME;
}

exibeNome();
