<?php
namespace Figuras;
require_once("Shape.php");

use Figuras\Shape;

class Triangulo extends Shape{

    public function __construct(float $alto, float $ancho){
        $this->height = $alto;
        $this->width = $ancho;
        
    }


    public function calcularArea(): void{
        $area = $this->height * $this->width / 2;

        echo "El area del triangulo es de: " . number_format($area, 2, ",") . "mts2";
    }
}

