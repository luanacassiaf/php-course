<?php
// Arrays
$carros = array("BMW", "Audi", "Hilux");

echo $carros[0];
echo '<br>';

$carros[] = "Amarok";
$carros[10] = "Ferrari";

print_r($carros);
echo '<hr>';

$motos = ["Yamaha", "Honda", "Suzuki"];
print_r($motos);
echo '<hr>';

// Count
echo count($motos);

// Foreach
foreach($carros as $valor) {
    
}
