<?php
 require_once("Rectangulo.php");

 require_once("Triangulo.php");

$rectangulo = new Rectangulo(3, 6);
$rectangulo->calcularArea();

echo"<br><br>";

$triangulo = new Triangulo(3, 6);
$triangulo->calcularArea();