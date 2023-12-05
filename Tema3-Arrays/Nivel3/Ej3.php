<!-- Dado un array de enteros, haz un programa que nos devuelva la suma de los enteros del array que sean primos usando la función array_reduce()-->
<?php
$valores = [7, 1, 3, 2, 6, 11, 10, 12, 8, 7];

function encontrarPrimo(int $valor): bool{
    $esPrimo = true;
    if($valor<2){ 
        $esPrimo = false;
    }
    for($i=2; $i<$valor; $i++){
        if($valor % $i == 0){ //si el residuo es 0 es porque es divisible por otro valor por lo que no sera primo
            $esPrimo = false;
            return $esPrimo;
        }
    }
    return $esPrimo; //devolvera true si nunca entra dentro del condicional 'if'
}


echo array_reduce($valores, function ($suma, $valor) {//**1º */
    if (encontrarPrimo($valor)) {
        return $suma += $valor;
    } else{
        return $suma;
    }
});

//**1º:  la función array_reduce() recorre el array  y en cada iteración toma un valor del array que lo guarda en $valor y comprueba si es primo, si es asi lo sumará al valor aumulativo de $suma. 
