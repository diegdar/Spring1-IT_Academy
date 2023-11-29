<!-- Dado un array de strings, haz un programa que:

Devuelva un array donde sólo estén los strings que tengan un numero par de caracteres usando la función  array_filter()
-->

<?php 

function caracteresPares(string $valor): bool{

    $valorStr = strval($valor);
    $cantValor = strlen($valorStr);

    if ($cantValor%2 == 0 ) {
        return true;
    } else {
        return false;
    }
}

$nombres = ["luna", "rodri", "perro", "sol", "cuadro", "un"];

print_r(array_filter($nombres, "caracteresPares"));

