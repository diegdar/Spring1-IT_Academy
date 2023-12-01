<?php

namespace Figuras;

abstract class Shape{
    protected float $height;
    protected float $width;
    protected float $radio;


    abstract public function calcularArea(): void;
}