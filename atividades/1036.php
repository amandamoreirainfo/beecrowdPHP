<?php


    $linha = readline("Informe os Valores: ");

    list($A, $B, $C) = explode(" ", $linha);

    $A = (float) $A;
    $B = (float) $B;
    $C = (float) $C;

    $delta = pow($B,2) - 4 * $A * $C;


    if ($A == 0 || $delta < 0){

        echo "Impossivel calcular" . "\n";

    }else{

        $raizDelta = sqrt($delta);
        $raiz1 = (-$B + $raizDelta) / (2*$A);
        $raiz2 = (-$B - $raizDelta) / (2*$A);

        $raiz1Formatada = number_format($raiz1, 5, '.', ' ');
        $raiz2Formatada = number_format($raiz2, 5, '.', ' ');

        echo "R1 = " . $raiz1Formatada . "\n";
        echo "R2 = " . $raiz2Formatada . "\n";


    }

   
?>