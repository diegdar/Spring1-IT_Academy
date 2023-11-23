<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Haz un programa que implemente una función en la que se cuente hasta un número determinado. Si no se incluye un número determinado, el número deberá tener un valor por defecto igual a 10. Además, esta función debe tener un segundo parámetro que indique de cuánto a cuánto se cuenta(De 1 en 1, de 2 en 2…). La cuenta debe mostrarse por pantalla paso a paso.
 -->
<?php
    function cuenta(int $escalaConteo, int $numFinal = 10): void{
        $numActual = 1;

        while($numActual<=$numFinal){
            echo $numActual;
            
            if($numActual < $numFinal){ //hace que se imprima la coma despues de cada numero a excepcion del ultimo.
                echo ", ";
            }
            $numActual = $numActual + $escalaConteo; //8
        }
    }

    cuenta(3, 12);
?>
</body>
</html>