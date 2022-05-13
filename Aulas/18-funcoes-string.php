<?php

$nome = 'Luana';
$caixaAlta = strtoupper($nome);
echo $caixaAlta.'<br>';

$caixaBaixa = strtolower($nome);
echo $caixaBaixa.'<br>';

echo '<hr>';

$mensagem = 'Hello World';
// Retorna parte da string, a partir do caractere 5,
// Com duas posições incluindo a posição 5
echo substr($mensagem, 5, 2);

echo '<hr>';

// Complementa outra string com a quantidade indicada de caracteres
$pokemon = 'Pikachu';
$novoPokemon = str_pad($pokemon, 10, '*');
echo $novoPokemon.'<br>';
$novoPokemonL = str_pad($pokemon, 10, '*', STR_PAD_LEFT);
echo $novoPokemonL.'<br>';
$novoPokemonLR = str_pad($pokemon, 10, '*', STR_PAD_BOTH);
echo $novoPokemonLR;

echo '<hr>';

$string = str_repeat($mensagem, 5);
echo $string.'<br>';

echo '<hr>';

echo strlen($mensagem);

echo '<hr>';

$texto = 'Temos que pegar pokémon.';
$novoTexto = str_replace('pokémon', 'pocket monsters', $texto);
echo $novoTexto;

echo '<hr>';

echo strpos($texto, 'pokémon');
