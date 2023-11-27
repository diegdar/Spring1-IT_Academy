<?php
function sumarDigitos(int $numero): int {

$numString = strval($numero); //convierte el numero en string

$suma = 0;

    for ($i=0; $i < strlen($numString); $i++) { 
        $suma += $numString[$i] * 1; //al multiplicarlo por 1 el string se convierte en numero y luego se suma a la variable acumulativa $suma
    }

    return $suma;
}
$numero = 133;

echo sumarDigitos($numero);



