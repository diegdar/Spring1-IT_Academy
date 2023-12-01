<?php
namespace Figuras;
require_once "Shape.php";

use Figuras\Shape;

class Rectangulo extends Shape{

    public function __construct(float $alto, float $ancho){
        $this->height = $alto;
        $this->width = $ancho;
        
    }

    public function calcularArea(): void{
        $area = $this->height * $this->width;

        echo "El area del rectangulo es de: " . number_format($area, 2, ",") . "mts2";
    }

}

