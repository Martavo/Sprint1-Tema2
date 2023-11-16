<?php
function contar($num = 10, $paso = 1) {
    for ($i = 1; $i <= $num; $i += $paso) {
        echo $i . "<br>";
    }
}

contar();

echo "<br>";

contar(20, 2);

?>