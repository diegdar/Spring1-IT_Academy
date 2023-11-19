<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- $X = array (10, 20, 30, 40, 50,60);
Mostrar por pantalla el tamaño del array anterior y posteriormente elimina un elemento del array anterior. Después de eliminar el elemento, las claves enteras deben ser normalizadas (se deben reorganizar sus índices). Muestra por última vez el tamaño del array. -->
<?php
    $x = array (10, 20, 30, 40, 50,60);

    echo 'Numero de elementos del array $x: ' . count($x) .  '<br><br>';

    unset($x[2]); //elimina un elemento del array

    $nuevoArray = [];
    // Reorganizacion de claves
    foreach ($x as $posicion => $nombre) {
        $nuevoArray[] = $nombre;
    }

    echo 'Numero de elementos del nuevo array: ' . count($nuevoArray) .  '<br>';
    var_dump($nuevoArray);




 



?>
</body>
</html>