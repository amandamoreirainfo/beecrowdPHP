<?php

$raio = readline("Informe o Valor do Raio: ");
$pi = 3.14159;

$raio = (float) $raio;

$volume = (4/3) * $pi * $raio**3;

$volumeFormatado = number_format($volume, 3, '.', '');

echo "VOLUME = " . $volumeFormatado . "\n";

?>