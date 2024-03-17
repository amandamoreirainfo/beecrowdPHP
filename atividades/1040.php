<?php

    $linha = readline("Informe 4 Notas de um Aluno: ");

    list($N1,$N2,$N3,$N4) = explode(" ", $linha);
    
    $N1 = (float) $N1;
    $N2 = (float) $N2;
    $N3 = (float) $N3;
    $N4 = (float) $N4;

    $peso1 = 2;
    $peso2 = 3;
    $peso3 = 4;
    $peso4 = 1;

    $media = ($peso1 * $N1 + $peso2 * $N2 + $peso3 * $N3 + $peso4 * $N4) / ($peso1 + $peso2 + $peso3 + $peso4);

    $mediaFormatada = number_format($media, 1, '.', ' ');

    echo "Media: " . $mediaFormatada . "\n";

    if ($mediaFormatada >= 7){

        echo "Aluno aprovado" . "\n";

    }else if($mediaFormatada < 5){

        echo "Aluno reprovado" . "\n";

    }else if(($mediaFormatada >= 5) && ($mediaFormatada <= 6.9 )){

        echo "Aluno em exame" . "\n";
        $notaExame = readline("Informe a Nota do Exame: ");
        $notaExame = (float) $notaExame;
        $mediaFinal =($mediaFormatada + $notaExame) / 2;
        $mediaFinalFormatada = number_format($mediaFinal, 1, '.', ' ');

        if($mediaFinalFormatada >= 5.0 ){

            echo "Aluno aprovado" . "\n";

        }else if($mediaFinalFormatada <= 4.9){

            echo "Aluno Reprovado" . "\n";

        } 

        echo "Media Final: " . $mediaFinalFormatada . "\n";

    }







?>