<!-- La criba de Eratóstenes es un algoritmo pensado para encontrar números primos dentro de un intervalo dado. Basándote en la información del enlace adjunto, implementa la criba de Eratóstenes dentro de una función, de tal forma que podamos invocar la función para un número concreto.
 -->
<?php

function mostrarPrimos(int $n): array {
    $numPrimos = [] ;
    $esPrimo = true;
    for ($i=$n; $i>1; $i--) { //$i sera el valor a anlizar si es primo
        $esPrimo = true;
        for ($j=2; $j<$i; $j++) { //$j sera el valor que dividirá a $i y si su residuo es 0 en alguna de las iteraciones es porque no es primo
            if($i%$j == 0){
                $esPrimo = false;
            }
        }
        if($esPrimo){
            array_push($numPrimos, $i);
        }
    }

    return $numPrimos;

}

$primos = mostrarPrimos(20);

for ($i=0; $i < count($primos); $i++) { 
    echo $primos[$i] . ", ";
}