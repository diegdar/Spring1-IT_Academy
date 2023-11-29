<?php

require_once("Shape.php");

class Triangulo extends Shape{

    public function calcularArea(){
        $area = $this->height * $this->width / 2;

        echo "El area del triangulo es de: " . $area . "mts2";
    }
}

