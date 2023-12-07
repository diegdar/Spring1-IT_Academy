<?php
require "Biblioteca.php";
require "Libro.php";

$biblioteca = new Biblioteca();

$libro1 = new Libro("La isla del tesoro", "Robert Louis Stevenson", "978-84-206-7028-6", genero::AVENTURAS, 300);
$libro2 = new Libro("Cien años de soledad", "Gabriel García Márquez", "978-84-339-7665-6", genero::FANTASTICO, 450);
$libro3 = new Libro("El juego de Ender", "Orson Scott Card", "978-84-9634-480-0", genero::CIENCIAFICCION, 550);
$libro4 = new Libro("Dune", "Frank Herbert", "978-84-345-0152-9", genero::CIENCIAFICCION, 600);

$biblioteca->agregarLibro($libro1);
$biblioteca->agregarLibro($libro2);
$biblioteca->agregarLibro($libro3);
$biblioteca->agregarLibro($libro4);
    // var_dump($biblioteca->getLibros());

// echo $biblioteca->borrarLibro("La isla del tesoro");
    // var_dump($biblioteca->buscarLibro("Ciencia Ficción"));

// echo $biblioteca->modificarLibro("La isla del tesoro", campoModificar::AUTOR, "Prueba autor");
    // var_dump($biblioteca->getLibros());

$biblioteca->devolverLibrosGrandes();



