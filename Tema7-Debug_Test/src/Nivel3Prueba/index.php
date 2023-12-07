<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <div class="contenedor">
        <section class="encabezado">
            <img id="logo" src="img/logoCadenaCines.png" alt="logo empresa yelmo">
        </section>
    </div>
    <?php
require "CadenaCines.php";
require "Cine.php";
// require "Pelicula.php";


$CadenaCines = new CadenaCines();

$cine['Yelmo-Roquetes'] = new Cine('Yelmo-Roquetes', 'Madrid');
$cine['Yelmo-Maquinista'] = new Cine('Yelmo-Maquinista', 'Barcelona');
$cine['Yelmo-Cabecera'] = new Cine('Yelmo-Cabecera', 'Valencia');

$CadenaCines->agregarCine($cine['Yelmo-Roquetes']);
$CadenaCines->agregarCine($cine['Yelmo-Maquinista']);
$CadenaCines->agregarCine($cine['Yelmo-Cabecera']);


$cine['Yelmo-Roquetes']->agregarPelicula('La terminal', 175, 'Steven Spielberg');
$cine['Yelmo-Maquinista']->agregarPelicula('El señor de los anillos: La comunidad del anillo', 201, 'Peter Jackson');
$cine['Yelmo-Cabecera']->agregarPelicula('Tiburon I', 90, 'Steven Spielberg');
$cine['Yelmo-Roquetes']->agregarPelicula('ET', 183, 'Steven Spielberg');
$cine['Yelmo-Cabecera']->agregarPelicula('ET', 183, 'Steven Spielberg');

// $CadenaCines->mostrarpeliculas();

// $cines = $CadenaCines->getCines();
// var_dump($cines);

// $CadenaCines->PeliMayorDuracion();

$CadenaCines->BuscarPeliDirector("Steven Spielberg");
?>

</body>

</html>