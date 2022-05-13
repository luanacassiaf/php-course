<?php

$value = 1234.56;
$price = number_format($value, 2, ',', '.');

echo "O valor do produto é R$ {$price}";

echo '<hr>';

// Arredondar
echo round(5.7).'<br>';

// Arredondar para cima
echo ceil(3.10).'<br>';

// Arredondar para baixo
echo floor(3.90).'<br>';

echo '<hr>';

echo rand(1, 20);
