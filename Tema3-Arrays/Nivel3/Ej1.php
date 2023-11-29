<!-- Dado un array de enteros, haz un programa que:

Retorne cada valor del array elevado al cubo utilizando la función array_map(). -->
<?php

function elevarAlCubo(int $num): int{

    return $num**3;
}

$numEnteros = [2,4, 6, 8, 10];

print_r(array_map("elevarAlCubo", $numEnteros));

