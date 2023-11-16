<?php

$nota = 22;

grado_estudio($nota);

function grado_estudio($nota)
{
    if ($nota >= 60) {
        echo "Corresponde a la primera división";
    } elseif ($nota >= 45 && $nota <= 59) {
        echo "Corresponde a la segunda división";
    } elseif ($nota >= 33 && $nota <= 44) {
        echo "Corresponde a la tercera división";
    } else {
        echo "Tienes que volver a probar";
    }
}



?>