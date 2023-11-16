<?php

function Eratosthenes($limit) {
    
    $esPrim = array_fill(2, $limit, true); 
    /*array donde se indica a partir del numero que iniciamos, la cantidad va marcada por el limit 
    y solo se introducen los true*/

    for ($i = 2; $i * $i <= $limit; $i++) {
        if ($esPrim[$i]) {
            for ($j = $i * $i; $j <= $limit; $j += $i) {
                $esPrim[$j] = false;
            }
        }
    }

    // La funcion array_filters devolvera solo los true del array de primos
    $prims = array_keys(array_filter($esPrim));
    return $prims;
}


$limit = 70;
$result = Eratosthenes($limit);


echo "Nombres primers fins a $limit: " . implode(', ', $result);
//funcion implide para concatenar elementos de un array

?>