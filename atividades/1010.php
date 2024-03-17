<?php

$linha1 = readline("Informe os Valores da Linha 1: ");
$linha2 = readline("Informe outros Valores da Linha 2: ");

list($codigoPeca1, $numeroPeca1, $valorUnitario1) = explode(" ", $linha1);
list($codigoPeca2, $numeroPeca2, $valorUnitario2) = explode(" ", $linha2);

$codigoPeca1 = (int) $codigoPeca1;
$numeroPeca1 = (float) $numeroPeca1;
$valorUnitario1 = (float) $valorUnitario1;

$codigoPeca2 = (int) $codigoPeca2;
$numeroPeca2 = (float) $numeroPeca2;
$valorUnitario2 = (float) $valorUnitario2;

$valorSerPago = $numeroPeca1 * $valorUnitario1 + $numeroPeca2 * $valorUnitario2;

$valorSerPagoFormatado = number_format($valorSerPago, 2, '.', '');

echo "VALOR A PAGAR: R$ " . $valorSerPagoFormatado . "\n";


?>