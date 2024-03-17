<?php

$numeroFuncionario = readline("Informe o Número do Funcionário: ");
$horasTrabalhadas = readline("Informe o Número de Horas Trabalhadas: ");
$valorPorHora = readline("Informe o Valor que Recebe por Hora: ");

$numeroFuncionario = (int) $numeroFuncionario;
$horasTrabalhadas = (int) $horasTrabalhadas;
$valorPorHora = (float) $valorPorHora;

$salario = $horasTrabalhadas * $valorPorHora;

$salarioFormatado = number_format($salario, 2, '.', '');

echo "NUMBER = " . $numeroFuncionario . "\n";
echo "SALARY = U$ " . $salarioFormatado . "\n";

?>