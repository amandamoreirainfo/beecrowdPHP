<?php


$linha1 = readline("Informe os Valores: ");
$linha2 = readline("Informe os Valores: ");


list($x1, $y1) = explode(" ", $linha1);
list($x2, $y2) = explode(" ", $linha2);

$x1 = (float) $x1;
$y1 = (float) $y1;
$x2 = (float) $x2;
$y2 = (float) $y2;


$distancia = sqrt(pow($x2 - $x1,2) + pow($y2 - $y1, 2));


$distanciaFormatada = number_format($distancia, 4, '.', ' ');


echo $distanciaFormatada . "\n";

?>
