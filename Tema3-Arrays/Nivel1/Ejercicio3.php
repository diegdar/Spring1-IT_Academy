<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Crea una función que reciba como parámetros un array de palabras y un carácter. La función nos devuelve true si todas las palabras del array tienen el carácter pasado como segundo parámetro.

Por ejemplo:

Si tenemos [“hola”, “Php”, “Html”] devolverá true si preguntamos por “h” pero falso si preguntamos por “l”.  -->
    <?php
    $nombres = ["Arturo", "manuela", "Ana"];

    function comprueba_Caracter($array, $caracter){

        $nombresMayus = array_map('strtoupper', $array);
        $caracterMayus = strtoupper($caracter);

        $seEncuentra = true; //valor iniciado por defecto
        foreach($nombresMayus as $palabra){ 
            if(strpos($palabra, $caracterMayus) === false){ //comprueba si existe el caracter en la posicion actual del array. Y tiene que ser '===' porque si fuera '==' un valor 0 o null se tomaría como true
                $seEncuentra=false;
            }
        }
        if($seEncuentra){
            return print "El caracter '$caracter' se encuentra en todas las posicion del array";
        }else{
            return print "El caracter '$caracter' NO se encuentra en todas las posicion del array";
        }
    }

    comprueba_Caracter($nombres, "m");
    ?>
</body>
</html>