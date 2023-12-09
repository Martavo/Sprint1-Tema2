<?php

$nota = 22;

grado_estudio($nota);

function grado_estudio($nota)
{
    if ($nota >= 60) {
        echo "Corresponde a la primera división";
    } elseif ($nota >= 45) {
        echo "Corresponde a la segunda división";
    } elseif ($nota >= 33) {
        echo "Corresponde a la tercera división";
    } else {
        echo "Tienes que volver a probar";
    }
}



?>