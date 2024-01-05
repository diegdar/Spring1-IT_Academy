<?php
require_once "class/Rectangulo.php";
require_once "class/Triangulo.php";
require_once "class/Shape.php";

$triangulo1 = new Triangulo(1.45, 6.70);
$rectangulo1 = new Rectangulo(4, 2.5);

$triangulo1->calcularArea();
$rectangulo1->calcularArea();

