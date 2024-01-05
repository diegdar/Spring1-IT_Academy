<?php
require_once "Shape.php";

class Rectangulo extends Shape
{
    public function calcularArea()
    {
        $area = round(($this->ancho * $this->alto), 2);

        echo "\nEl area del rectangulo es: {$area}mts2";
    }
}

