<?php
namespace Figuras;

// Siguiendo el ejercicio anterior, imagina cómo ampliarías la estructura que has creado para representar un Círculo y su correspondiente cálculo de área.

require_once("Shape.php");
use Figuras\Shape;

 class Circulo extends Shape
 {

    protected float $radio;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    public function calcularArea(): void
    {
        $area = $this->radio*(pi()**2);

        echo "El area del circulo es de: " . number_format($area, 2, ",") . "mts2";
        ;
    }
 }