<?php

    $N = readline("Informe um Valor: ");

    $N = (int) $N;

    echo $N . "\n";

    $nota100 = intDiv($N,100);
    $N = $N % 100;

    $nota50 = intDiv($N,50);
    $N = $N % 50;

    $nota20 = intDiv($N,20);
    $N = $N % 20;

    $nota10 = intDiv($N,10);
    $N = $N % 10;

    $nota5 = intDiv($N,5);
    $N = $N % 5;

    $nota2 = intDiv($N,2);
    $N = $N % 2;

    $nota1 = intDiv($N,1);

    
    echo $nota100 . " nota(s) de R$ 100,00" . "\n";
    echo $nota50 . " nota(s) de R$ 50,00" . "\n";
    echo $nota20 . " nota(s) de R$ 20,00" . "\n";
    echo $nota10 . " nota(s) de R$ 10,00" . "\n";
    echo $nota5 . " nota(s) de R$ 5,00" . "\n";
    echo $nota2 . " nota(s) de R$ 2,00" . "\n";
    echo $nota1 . " nota(s) de R$ 1,00" . "\n";


?>
