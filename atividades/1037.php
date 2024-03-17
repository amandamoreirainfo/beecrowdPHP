<?php

$N = readline("Informe um Número: ");

$N = (float) $N;

if (($N >= 0) && ($N <= 25 )){

    echo "Intervalo [0,25]";

}else if(($N > 25) && ($N <= 50)){

    echo "Intervalo (25,50]";

}else if(($N > 50) && ($N <= 75)){

    echo "Intervalo (50,75]";

}else if(($N > 75) && ($N <= 100)){

    echo "Intervalo (75,100]";

}else{

    echo "Fora de intervalo";

}

?>
