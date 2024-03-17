<?php

$A = readline("Informe o Valor de A: ");
$B = readline("Informe o Valor de B: ");
$C = readline("Informe o Valor de C: ");
$D = readline("Informe o Valor de D: ");

$A = (int) $A;
$B = (int) $B;
$C = (int) $C;
$D = (int) $D;

$DIFERENCA = ($A * $B - $C * $D);


echo "DIFERENCA = " . $DIFERENCA . "\n";


?>