<?php

function exibirNome($nome)
{
    echo "Nome: {$nome}";
}

exibirNome('Luana');
echo '<hr>';

function calcularMedia($nome, $n1, $n2, $n3, $n4)
{
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if ($media >= 6) {
        echo "{$nome} foi aprovado(a) com a média {$media}. <br>";
    } else {
        echo "{$nome} foi reprovado(a) com a média {$media}. <br>";
    }
}

calcularMedia('Pikachu', 8, 7, 6, 5);
calcularMedia('Pichu', 4, 3, 2, 1);
