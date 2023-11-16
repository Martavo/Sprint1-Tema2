<?php

$min_llamada = 34;

function llamada ($min_llamada){
    $coste = 0;

    if ($min_llamada <= 3){
        echo "El coste de la llamada es de 10 cts";
    }elseif ($min_llamada > 3) {
        $extra = $min_llamada-3;
        $coste = ($extra*0.5)+0.10;

        echo "El coste de la llamada es de " . $coste . " €.";
    }

}

llamada($min_llamada);


?>