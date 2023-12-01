<?php

require_once("Formaciones.php");
require_once("Fundamentos.php");
require_once("Especializaciones.php");
require_once("Proyecto.php");
require_once("BusquedaTrabajo.php");

require_once("Frontend.php");
require_once("Backend.php");
require_once("Fullstack.php");
require_once("DataScience.php");


$fundamentos1 = new Fundamentos("Java","fundamentos en Java");
echo $fundamentos1->getNomFormacion();

echo "<br>";

$especializacion1 = new Especializacion("Especializacion","Especializacion en php", "PHP");
$especializacion1->setSpring("T1-Maquetacion",21);

$especializacion1->getSpring();
