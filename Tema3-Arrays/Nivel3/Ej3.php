<?php
/*Dado un array de enteros, haz un programa que devuelva la suma de los enteros del array que sean primos,  utilizando la función array_reduce().

NOTAS🗒️:
1ª: Si hay un numero inferior que se pueda didivir con $numero es porque no es primo y por lo tanto ya no seguira buscando en los demas numeros inferiores. Si en cambio no se ha podido didivir por el numero actual es porque aun puede ser primo y seguira iterando para seguir dividiendo con el inmediato inferior y ver si es primo.
 */

 $numeros = [4, 5, 8, 13, -7, 2];

$sumaPrimos = array_reduce($numeros, function($suma, $valor){
    if(encontrarPrimo($valor))
    {
        return $suma += $valor; //si el valor del array pasado es primo se sumara a la variable $suma
    }else
    {
        return $suma; //si el valor pasado del array NO es primo devolvemos la variable $suma sin sumar el numero
    }
});

function encontrarPrimo(int $numero): bool
{
    $esPrimo = true;

    $i=2;
    while($esPrimo==true && $i<$numero)
    {
        $esPrimo= ($numero%$i==0)? false: true; //Nota 1ª

        $i++;
    }
    return $esPrimo;        
}


print_r($sumaPrimos);
// -----------------------------------
/*

 */

