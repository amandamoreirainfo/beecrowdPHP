<?php

$linha = readline("Informe os Números: ");

list($a, $b, $c) = explode(" ",$linha);


$a = (int) $a;
$b = (int) $b;
$c = (int) $c;


$maiorAB = ($a + $b + abs($a - $b)) / 2;

$maior = ($maiorAB + $c + abs($maiorAB - $c)) / 2;

echo $maior . " eh o maior" . "\n";


?>
