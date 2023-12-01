<?php
 require_once("Rectangulo.php");
 require_once("Triangulo.php");
 require_once("Circulo.php");

 use Figuras\Rectangulo;
 use Figuras\Triangulo;
 use Figuras\Circulo;

$rectangulo = new Rectangulo(3.4, 6);
$rectangulo->calcularArea();

echo"<br><br>";

$triangulo = new Triangulo(3, 6.8);
$triangulo->calcularArea();

echo"<br><br>";

$triangulo = new Circulo(8);
$triangulo->calcularArea();

