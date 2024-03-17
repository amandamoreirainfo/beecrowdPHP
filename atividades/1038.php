<?php

    $linha = readline("Informe o código e a quantidade deste item: ");
    list($codigoItem, $quantidadeItem) = explode(" ", $linha);

    $codigoItem = (int) $codigoItem;
    $quantidadeItem = (int) $quantidadeItem;


    if ($codigoItem == 1){
        $precoItem = 4.00;
    }else if ($codigoItem == 2){
        $precoItem = 4.50;
    }else if ($codigoItem == 3){
        $precoItem = 5.00;
    }else if ($codigoItem == 4){
        $precoItem = 2.00;
    }else if($codigoItem == 5){
        $precoItem = 1.50;
    }else{
        echo "Código e Quantidade de Item Invalidos";
    }

    $total = $quantidadeItem * $precoItem;

    $totalFormatado = number_format($total,2, '.', ' ');

    echo "Total: R$ " . $totalFormatado . "\n";

?>