<!-- Escribe una función que determine la cantidad total a pagar por una llamada telefónica según las siguientes premisas:

-Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
-Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
 -->
<?php
function costeLlamada(int $durHours, int $durMins): void{

    $durMinutos = ($durHours * 60 ) + $durMins;

    if($durMinutos<3){ //si el tiempo es inferior a 3 minutos
        $coste = 0.10;
        echo "La duración de la llamada fue de " . $durMinutos .  " minutos y su coste es de: " . $coste . "€";
    }else{ //Si el tiempo es superior a 3 minutos
        $tiempoExcedente = $durMinutos - 3;
        $coste = ($tiempoExcedente*0.05) + 0.10;
        echo "La duración de la llamada fue de " . $durMinutos .  " minutos y su coste es de: " . $coste . "€";
    }
}
$horas = 1;
$minutos = 25;
costeLlamada($horas, $minutos);