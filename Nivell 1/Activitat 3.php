<?php
$X = 5;
$Y = 10;
$N = 3.6;
$M = 8.3;

echo $X ." y ". $Y; 
echo "<br>";
echo ($X+$Y); //suma
echo "<br>";
echo ($X-$Y); //resta
echo "<br>";
echo ($X%$Y); //modulo
echo "<br>";
echo ($X*$Y); //producto

echo "<br>";
echo $N ." y ". $M; 
echo "<br>";
echo ($N+$M); //suma
echo "<br>";
echo ($N-$M); //resta
echo "<br>";
echo ($N%$M); //modulo
echo "<br>";
echo ($N*$M); //producto
echo "<br>";

echo ($X*2) .", ". ($Y*2) .", ". ($N*2) .", ". ($M*2);  //doble de cada valor
echo "<br>";
echo "La suma de todas las variables es: " . ($X+$Y+$M+$N);
echo "<br>";
echo "El producto de todas las variables es: " . ($X*$Y*$M*$N);
echo "<br>";


// Ejercicio de la funcion calculado

$num1 = 4;
$num2 = 23;
$operacion = "suma";

function calculadora ($num1, $num2, $operacion){
    $resultado = 0;  

    switch($operacion){
        case "suma":
            $resultado = $num1 + $num2;
            break;
        case "resta":
            $resultado = $num1 - $num2;
            break;
        case "multiplicacion":
            $resultado = $num1 * $num2;
            break;
        case "division":
            if ($num2 != 0){
                $resultado = $num1 / $num2;
            }else{
                $resultado  = "No se puede dividir entre 0";
            }
            break;
        default:
            $resultado = "Operación no válida";
            break;
    }

    return $resultado;
}

echo "El resultado de la operacion " . $operacion . " es " . calculadora($num1, $num2, $operacion);
?>