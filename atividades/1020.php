<?php


    $idadeDias = readline("Informe a Idade de uma Pessoa em Dias: ");

    
    $idadeDias = (int) $idadeDias;


    $ano = intDiv($idadeDias, 365);
    $meses = intDiv(($idadeDias % 365),30);
    $dias = ($idadeDias % 365) % 30;


    echo $ano . " ano(s)" . "\n";
    echo $meses . " mes(es)" . "\n";
    echo $dias . " dia(s)" . "\n";


?>