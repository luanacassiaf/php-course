<?php
$nome = 'Luana';
echo 'Nome: ' . $nome;
echo '<br>';

echo 'Escapando as \'aspas\'';
echo '<hr>';

// Aspas duplas são interpretativas
echo "Nome: $nome";
echo '<br>';
echo "Nome: \"$nome\"";


