<!-- a) Escribe un programa que, dada una altura y un peso, nos devuelva su índice de
masa corporal(IMC).EI IMC se calcula dividiendo el peso(en kg) entre el cuadrado de
la altura(en metros). Debemos mostrar además, qué rango de IMC estamos:
IMC
Menos de 18.5
18.5-24.9
25-29.9
Más de 30.0
Rango Valor
Bajo peso normal
Normal
Sobrepeso
Obesidad -->
<?php

function darIMC(float $alt, int $peso): string{
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

echo darIMC($altura, $peso);

