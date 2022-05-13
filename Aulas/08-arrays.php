<?php

// Arrays
$carros = ['BMW', 'Audi', 'Hilux'];

echo $carros[0];
echo '<br>';

$carros[] = 'Amarok';
$carros[10] = 'Ferrari';

print_r($carros);
echo '<hr>';

$motos = ['Yamaha', 'Honda', 'Suzuki'];
print_r($motos);
echo '<hr>';

// Count
echo count($motos);
echo '<hr>';

// Foreach
foreach ($carros as $carro) {
    echo $carro.'<br>';
}
echo '<hr>';

// Arrays associativos
$pessoa = ['nome' => 'Luana', 'idade' => 22, 'altura' => 1.6];
echo $pessoa['nome'];
echo '<br>';

$pessoa['cidade'] = 'Townsville';
print_r($pessoa);
echo '<hr>';

foreach ($pessoa as $indice => $valor) {
    echo $indice.': '.$valor.'<br>';
}
echo '<hr>';

// Arrays multidimensionais
$evolucoes = ['Charmander' => ['Primeira evolução' => 'Charmeleon', 'Segunda evolução' => 'Charizard'],
    'Squirtle' => ['Primeira evolução' => 'Wartotle', 'Segunda evolução' => 'Blastoise'],
    'Bulbasaur' => ['Primeira evolução' => 'Ivysaur', 'Segunda evolução' => 'Venusaur'],
];
echo $evolucoes['Charmander']['Primeira evolução'];
echo '<br>';

foreach ($evolucoes as $indice => $valor) {
    echo $indice.'<br>';
}
echo '<br>';

echo 'Evoluções de Charmander: <br>';
foreach ($evolucoes['Charmander'] as $indice => $valor) {
    echo "{$indice}: {$valor} <br>";
}
echo '<br>';

echo 'Evoluções de Squirtle: <br>';
foreach ($evolucoes['Squirtle'] as $indice => $valor) {
    echo "{$indice}: {$valor} <br>";
}
echo '<br>';

echo 'Evoluções de Bulbasaur: <br>';
foreach ($evolucoes['Bulbasaur'] as $indice => $valor) {
    echo "{$indice}: {$valor} <br>";
}
