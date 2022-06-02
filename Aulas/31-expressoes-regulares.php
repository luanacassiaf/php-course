<?php

// ^ início da expressão
// $ fim da expressão
// i case insensitive
// [] conjunto de caracteres
// {} número de ocorrências
// * nenhuma ou várias ocorrências
// + uma ou mais ocorrências

$email = 'luanacassia12@g.com';
$padraoEmail = '/^[a-z0-9.\\-\\_]+@[a-z0-9.\\-\\_]+\\.(com|br|com.br)$/i';

if (preg_match($padraoEmail, $email)) {
    echo 'Email válido: '.$email;
} else {
    echo 'Email Inválido: '.$email;
}

echo '<hr>';

$data = '09/09/2000';
$padraoData = '/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/';

if (preg_match($padraoData, $data)) {
    echo 'Data válida: '.$data;
} else {
    echo 'Data inválida: '.$data;
}
