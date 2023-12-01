<?php
 require_once("Rectangulo.php");
 require_once("Triangulo.php");

 use Figuras\Rectangulo;
 use Figuras\Triangulo;

$rectangulo = new Rectangulo(3, 6);
$rectangulo->calcularArea();

echo"<br><br>";

$triangulo = new Triangulo(3, 6);
$triangulo->calcularArea();