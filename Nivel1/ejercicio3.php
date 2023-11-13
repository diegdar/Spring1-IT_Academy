<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- a) Declara dos variables X e Y de tipo int, dos variables N y M de tipo double y asigna a cada una un valor. A continuación, muestra por pantalla para X e Y :

El valor de cada variable.
La suma.
La resta.
El producto.
El módulo.
Por N y M realizarás lo mismo.

Para todas las variables (X, Y, N, M):

El doble de cada variable.
La suma de todas las variables.
El producto de todas las variables.
b) Crea una función  Calculadora que reciba dos números por parámetro, y en un tercer parámetro te permita realizar la suma, la resta, la multiplicación o la división de los dos números. -->
<?php
    $x = 3; $y = 12;
    $n = 2.45; $m = 13.56;

    echo '***Para las variables $x e $y: <br>';
    echo "El valor de x es: " . $x . "<br>";
    echo "El valor de y es: " . $y . "<br>";
    echo "La suma es: " . $x + $y . "<br>";
    echo "La resta es: " . $x - $y . "<br>";
    echo "El producto es: " . $x * $y . "<br>";
    echo "El modulo es: " . $x % $y . "<br>";

    echo '<br>***Para las variables $n y $m: <br>';
    echo "El valor de n es: " . $n . "<br>";
    echo "El valor de m es: " . $m . "<br>";
    echo "La suma es: " . $n + $m . "<br>";
    echo "La resta es: " . $n - $m . "<br>";
    echo "El producto es: " . number_format(($n * $m), 2, ","). "<br>";
    echo "El modulo es: " . $n % $m . "<br>";

    echo '<br><br>***Para todas las variables (X, Y, N, M): <br>';
        echo "El doble de la variable X es: " . $x * 2 . "<br>";
        echo "El doble de la variable Y es: " . $y * 2 . "<br>";
        echo "El doble de la variable M es: " . $m * 2 . "<br>";
        echo "El doble de la variable N es: " . $n * 2 . "<br>";

        echo "La suma de todas las variables es: " . $x + $y + $m + $n . "<br>";
        echo "El producto de todas las variables es: " . number_format(($x * $y * $m * $n), 2, ",", ".") . "<br>";
    
    function calculadora($num1, $num2, $operacion){
        switch($operacion){
            case "suma":  
                    return $num1 + $num2;
                    break;
            case "resta":  
                    return $num1 - $num2;
                    break;
            case "multipliacion":  
                    return $num1 * $num2;
                    break;
            case "division":  
                    return $num1 / $num2;
                    break;
        }
    }

    echo calculadora(4, 5, "division");

?>

</body>
</html>