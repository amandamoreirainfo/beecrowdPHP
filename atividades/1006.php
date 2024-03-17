<?php

$A = readline("Informe a Primeira Nota do Aluno: ");
$B = readline("Informe a Segunda Nota do Aluno: ");
$C = readline("Informe a Terceira Nota do Aluno: ");

$pesoA = 2;
$pesoB = 3;
$pesoC = 5;

$A = (float) $A;
$B = (float) $B;
$C = (float) $C;

$MEDIA = ($A * $pesoA + $B * $pesoB + $C * $pesoC) / ($pesoA + $pesoB + $pesoC);

$mediaFormatada = number_format($MEDIA, 1, '.', '');

echo "MEDIA = " . $mediaFormatada . "\n";


?>
