<?php

function IMC(float $alt, int $peso): string{
    $imc = $peso / ($alt**2);

    if($imc> 30){
        return "Este indice " . number_format($imc, 2) ." equivale a: Obesidad";
    }else if($imc >=25){
        return "Este indice " . number_format($imc, 2) ." equivale a: Sobrepeso";
    }else if($imc >= 18.5){
        return "Este indice " . number_format($imc, 2) ." equivale a: Peso Normal";
    }else{
        return "Este indice " . number_format($imc, 2) ." equivale a: Bajo Peso";
    }

}

$altura = 1.5;
$peso = 68;

echo IMC($altura, $peso);

