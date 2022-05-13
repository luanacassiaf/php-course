<?php

for ($contador = 0; $contador <= 10; ++$contador) {
    echo "8 x {$contador} = ".($contador * 8).'<br>';
}

echo '<hr>';

$pokemons = ['Charmander', 'Squirtle', 'Bulbasaur'];

foreach ($pokemons as $index => $pokemon) {
    echo $index.' - '.$pokemon.'<br>';
}
