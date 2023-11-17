<?php

abstract class Shape{
    protected float $height;
    protected float $width;

    public function __construct($alto, $ancho){
        $this->height = $alto;
        $this->width = $ancho;
    }

    abstract public function calculaArea();
}