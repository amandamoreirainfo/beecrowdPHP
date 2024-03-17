<?php

$nomeVendedor = readline("Informe o Nome do Vendedor: ");
$salarioFixo = readline("Informe o Salário Fixo: ");
$totalVendas = readline("Informe o Total de Vendas Efetuadas por ele no mês: ");
$comissao = 0.15;

$salarioFixo = (float) $salarioFixo;
$totalVendas = (float) $totalVendas;

$totalReceber = $salarioFixo + ($totalVendas * $comissao);

$totalReceberFormatado = number_format($totalReceber, 2, '.', '');

echo "TOTAL = R$ " . $totalReceberFormatado . "\n";

?>