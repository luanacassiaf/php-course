<?php

$senha = '123456';
$senha_db = '$2y$10$rWc00GLeuUyss5kFw62eLeZhSuxgsrMpzmMSsmGs83/9v9UYFhPnm';

// CRIPTOGRAFIA DE MÃO DUPLA
$novasenha = base64_encode($senha);
echo "base64: {$novasenha} <br>";
echo 'Sua senha é: '.base64_decode($novasenha).'<br>';

echo '<hr>';

// CRIPTOGRAFIA DE MÃO ÚNICA
echo 'MD5: '.md5($senha).'<br>';
echo 'SHA1: '.sha1($senha).'<br>';

echo '<hr>';
$options = ['cost' => 10];
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo $senhaSegura;

echo '<br>';
if (password_verify($senha, $senha_db)) {
    echo 'Senha válida';
} else {
    echo 'Senha inválida';
}
