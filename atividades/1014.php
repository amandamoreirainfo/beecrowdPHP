<?php


$X = readline("Informe a Distancia Total Percorrida: ");
$Y  = readline("Informe o Total de Combustivel Gasto: ");


$X = (int) $X;
$Y = (float) $Y;


$combustivelGasto  = $X / $Y;

$combustivelGastoFormatado = number_format($combustivelGasto, 3, '.', ' ');


echo $combustivelGastoFormatado . " km/l" . "\n";


?>
