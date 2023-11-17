<?php

require("Shape.php");

class Rectangulo extends Shape{

    public function areaRectangulo(){
        $area = $this->height * $this->width;

        echo "El area del rectangulo es: " . $area . "mts2";
    }

}

$rectangulo = new Rectangulo(3, 6);

$rectangulo->areaRectangulo();