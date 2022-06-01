<?php

date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/y H:i:s');
echo "<hr>";

$date = date('Y-m-d H:i:s');
echo $date;
echo "<hr>";

echo time();
echo "<hr>";

// MKTIME
$formarData = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m/y - h:i A', $formarData);
echo "<hr>";

// STRTOTIME
$data = '2019-04-10 13:30:00';
$data = strtotime(($data));

echo date('d/m/Y', $data);