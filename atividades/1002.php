<?php

$raio = readline("Informe o Valor do Raio: ");

$raio = (float) $raio;
$n = 3.14159;

$area = $n * $raio**2;

$areaFormatada = number_format($area, 4, '.', '');

echo "A=" . $areaFormatada . "\n";

?>
