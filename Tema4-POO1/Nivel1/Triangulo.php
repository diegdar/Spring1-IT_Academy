<?php

require("Shape.php");

class Triangulo extends Shape{

    public function areaTriangulo(){
        $area = $this->height * $this->width / 2;

        echo "El area del triangulo es de: " . $area . "mts2";
    }

}

$triangulo = new Triangulo(3, 6);

$triangulo->areaTriangulo();