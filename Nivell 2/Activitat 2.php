<?php

$total = 0; 

afegirProducte('xocolata', 2);
afegirProducte('xiclets', 1);
afegirProducte('caramels', 1);

echo "Total de la compra: $total euros";

function afegirProducte($producte, $quantitat) {
    global $total; 

    switch ($producte) {
        case 'xocolata':
            $subtotal = 1 * $quantitat;
            break;
        case 'xiclets':
            $subtotal = 0.5 * $quantitat;
            break;
        case 'caramels':
            $subtotal = 1.5 * $quantitat;
            break;
        default:
            $subtotal = 0;
            break;
    }

    $total += $subtotal; 

    return $total; 
}

?>
