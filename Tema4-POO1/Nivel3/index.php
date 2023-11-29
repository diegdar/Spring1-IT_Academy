<?php
require_once("Cine.php");

$cine1 = new Cine("Madrid", "Yelmo");

$cine1->crearPeliculas("Arma Letal", 120, "Richard Donner
");

$cine1->mostrarDatosPeliculass();