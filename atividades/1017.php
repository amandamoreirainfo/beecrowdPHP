<?php


    $tempoGasto = readline("Informe o Tempo Gasto na Viagem (em horas): ");
    $velocidadeMedia = readline("Informe a Velocidade Média: ");

    $tempoGasto = (int) $tempoGasto;
    $velocidadeMedia = (int) $velocidadeMedia;


    $distancia = $tempoGasto * $velocidadeMedia;
    $litrosNecessarios = $distancia / 12;

    $litrosNecessariosFormatado = number_format($litrosNecessarios, 3, '.', ' ');

    echo $litrosNecessariosFormatado . "\n";

?>
