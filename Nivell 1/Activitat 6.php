<?php
function isBitten() {
    $randomNumber = rand(0, 1);

    if ($randomNumber <= 0.5) {
        return true; 
    } else {
        return false; 
    }
}


if (isBitten()) {
    echo "¡Charlie ha mordido el dedo!";
} else {
    echo "Charlie no ha mordido el dedo.";
}

?>