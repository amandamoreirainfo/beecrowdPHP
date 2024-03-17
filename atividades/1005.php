<?php

$A = readline("Informe a Primeira Nota do Aluno: ");
$B = readline("Informe a Segunda Nota do Aluno: ");

$pesoA = 3.5;
$pesoB = 7.5;

$A = (float) $A;
$B = (float) $B;

$MEDIA = ($A * $pesoA + $B * $pesoB) / ($pesoA + $pesoB);

$mediaFormatada = number_format($MEDIA, 5, '.', '');

echo "MEDIA = " . $mediaFormatada . "\n";


?>
