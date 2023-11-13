<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Charlie me mordió el dedo! Charlie te morderá el dedo exactamente el 50% del tiempo.

Escribe La función isBitten() que devuelve TRUE con un 50% de probabilidad y FALSE de lo contrario.
Importante:
Puede que la función rand() te resulte útil.
 -->
<?php
    function isBitten(){
        $isBitten = rand(1,2); //genera numeros aleatorios(valor minimo el 1 y el maximo el 2) siendo posible solo el 1 o el 2 con 50% de probabilidad para cada uno

        if($isBitten==1){
            echo "Charlie te morderá el dedo!";
        }else{
            echo "Charlie NO te morderá el dedo!";
        }
    }

    isBitten();
?>
</body>
</html>