<?php

require_once("Shape.php");

class Rectangulo extends Shape{

    public function calcularArea(){
        $area = $this->height * $this->width;

        echo "El area del rectangulo es de: " . $area . "mts2";
    }

}

