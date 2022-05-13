<?php

$pokemons = ['Fogo' => 'Charmander', 'Água' => 'Squirtle', 'Planta' => 'Bulbasaur'];

if (is_array($pokemons)) {
    echo 'É um array. <br>';
} else {
    echo 'Não é array. <br>';
}

if (in_array('Pichu', $pokemons)) {
    echo 'Existe no array. <br>';
} else {
    echo 'Não existe no array. <br>';
}
echo '<hr>';

// Índices do array pokemons são valores do array keys
$keys = array_keys($pokemons);
print_r($keys);
echo '<br>';

// Valores do array pokemons são valores do array values
$values = array_values($pokemons);
print_r($values);
echo '<hr>';

$agua = ['Squirtle', 'Totodile', 'Piplup'];
$fogo = ['Charmander', 'Cyndaquil', 'Torchic'];

// União dos elementos de dois arrays
$uniao = array_merge($agua, $fogo);
print_r($uniao);
echo '<hr>';

// Apaga elementos do final do array
echo array_pop($uniao).'<br>';
print_r($uniao);
echo '<hr>';

// Apaga elementos do início do array
echo array_shift($uniao).'<br>';
print_r($uniao);
echo '<hr>';

// Adiciona elementos no início do array
array_unshift($uniao, 'Pikachu', 'Chikorita');
print_r($uniao);
echo '<hr>';

// Adiciona elementos no final do array
array_push($uniao, 'Eevee');
print_r($uniao);
echo '<hr>';

// Cria um array utilizando um array para chaves e outro para valores
print_r($keys);
echo '<br>';
print_r($values);
echo '<br>';
$equipe = array_combine($keys, $values);
print_r($equipe);
echo '<hr>';

// Soma elementos numéricos de array
$soma = [5.5, 4.4, 3.3];
echo array_sum($soma);
echo '<hr>';

// Transforma string em array
$data = '02/10/2020';
$novaData = explode('/', $data);
print_r($novaData);
echo '<hr>';

$passaros = ['Moltres', 'Zapdos', 'Articuno'];
$string = implode(', ', $passaros);
echo $string;
echo '<hr>';
