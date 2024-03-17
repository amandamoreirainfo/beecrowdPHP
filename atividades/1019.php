<?php

    $N = readline("Informe o Tempo de duração em Segundos: ");

    $N = (int) $N;

    $horas = intDiv($N,3600);
    $minutos = intDiv(($N % 3600),60);
    $segundos = $N % 60;

    echo $horas . ":" . $minutos . ":" . $segundos . "\n";

?>