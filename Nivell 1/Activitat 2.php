<?php
$saludo = "Hello, World!";

$saludoMayusculas = strtoupper($saludo);

echo $saludoMayusculas;

// Salto de línea
echo "<br>";

$longitud = strlen($saludo);
echo "La longitud de la cadena es de " . $longitud . " caracteres.";

echo "<br>";

$ordenInverso = strrev($saludo);
echo "El resultado de invertir el orden de la palabra es: " . $ordenInverso;

echo "<br>";

$curso = "Aquest és el curs de PHP";

echo $saludo . " " . $curso;
?>
