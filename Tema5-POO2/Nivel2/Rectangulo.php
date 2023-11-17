<?php

require("Shape.php");

class Rectangulo extends Shape{

    public function calculaArea(){
        $area = $this->height * $this->width;

        echo "El area del rectangulo es de: " . $area . "mts2";
    }

}

$rectangulo = new Rectangulo(3, 6);

$rectangulo->calculaArea();