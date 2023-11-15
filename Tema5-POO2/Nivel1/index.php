<?php
require("Animal.php");
require("Perro.php");
require("Gato.php");

// pruebas
$rambo = new Perro("rambo");
echo $rambo->getName() . " es un perro y hace el sonido: " .  $rambo->makeSound();

echo "<br><br>";

$misifu = new Gato("misifu");
echo $misifu->getName() . " es un gato y hace el sonido: " .  $misifu->makeSound();



?>