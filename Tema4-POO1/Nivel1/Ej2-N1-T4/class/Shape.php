<?php

abstract class Shape
{
    protected float $ancho;
    protected float $alto;

    public function __construct($ancho, $alto)
    {
        $this->ancho= $ancho;
        $this->alto= $alto;
    }
    
    abstract public function calcularArea();

}

