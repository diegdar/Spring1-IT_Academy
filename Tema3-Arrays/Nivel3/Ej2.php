<?php
/*Dado un array de strings, haz un programa que:
Devuelva un array donde sólo estén los strings que tengan un numero par de caracteres usando la función  array_filter()
 */

 $nombres = [3=>"ana", 5=>"Maria", 4=>"Luis"];

$nomsPares = array_filter($nombres, 'buscarNomsPares');

function buscarNomsPares($nombre)
{
    // if((strlen($nombre)%2) == 0) //si el modulo de 2 de la longitud del nombre es 0 es por es par
    // {
    //     return $nombre;
    // }

// EN OPERADOR TERNARIO
    return (strlen($nombre) % 2 == 0) ? $nombre : null; //si el modulo de 2 de la longitud del nombre es 0 es por es par
}


print_r($nomsPares);
// -----------------------------------
/*

 */

