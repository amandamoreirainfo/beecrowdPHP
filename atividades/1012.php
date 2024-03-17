
<?php

$linha = readline("Informe  os Valores: ");
$pi = 3.14159;

list($A, $B, $C) = explode(" ", $linha);

$A = (float) $A;
$B = (float) $B;
$C = (float) $C;


$areaTrianguloRetangulo = 1/2 * $A * $C;
$areaCirculo = $pi * $C**2;
$areaTrapezio = 1/2 * ($A + $B) * $C;
$areaQuadrado = $B**2;
$areaRetangulo = $A * $B;

$areaTrianguloRetanguloFormatado = number_format($areaTrianguloRetangulo, 3, '.', '');
$areaCirculoFormatado = number_format($areaCirculo, 3, '.', '');
$areaTrapezioFormatado = number_format($areaTrapezio, 3, '.', '');
$areaQuadradoFormatado = number_format($areaQuadrado, 3, '.', '');
$areaRetanguloFormatado = number_format($areaRetangulo, 3, '.','');

echo "TRIANGULO: " . $areaTrianguloRetanguloFormatado . "\n";
echo "CIRCULO: " . $areaCirculoFormatado . "\n";
echo "TRAPEZIO: " . $areaTrapezioFormatado . "\n";
echo "QUADRADO: " . $areaQuadradoFormatado . "\n";
echo "RETANGULO: " . $areaRetanguloFormatado . "\n";

?>
