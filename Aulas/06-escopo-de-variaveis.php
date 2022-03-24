<?php
// Escopo global
$nome = "Luana";
$a = 1;
$b = 3;
$c = 7;

function exibeNome() 
{
    // Escopo local
    global $nome;
    echo $nome;
}

exibeNome();
echo '<hr>';

/*************************************/

function exibeCidade() 
{
    global $cidade;
    $cidade = 'Townsville';
}

exibeCidade();
echo $cidade;
echo '<hr>';

/*************************************/

function soma()
{
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();
