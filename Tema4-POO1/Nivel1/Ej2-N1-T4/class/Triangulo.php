<?php

require_once "Shape.php";

class Triangulo extends Shape
{
    public function calcularArea()
    {
        $area = round(($this->ancho * $this->alto),2) / 2;

        echo "\nEl area del triangulo es: {$area}mts2";
    }
}

