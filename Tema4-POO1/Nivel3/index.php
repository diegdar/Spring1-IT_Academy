<?php
require "Cine.php";

$cines = []; //guardara todos los cines

// Agregamos algunos cines al array
$cines['Cinesa'] = new Cine('Cinesa', 'Madrid');
$cines['Yelmo'] = new Cine('Yelmo', 'Barcelona');
$cines['TicketMaster'] = new Cine('TicketMaster', 'Valencia');

// Agregamos algunas películas a los cines
$cines['Cinesa']->agregarPelicula('La terminal', 175, 'Steven Spielberg');
$cines['Yelmo']->agregarPelicula('El señor de los anillos: La comunidad del anillo', 201, 'Peter Jackson');
$cines['TicketMaster']->agregarPelicula('Tiburon I', 90, 'Steven Spielberg');
$cines['Cinesa']->agregarPelicula('El señor de los anillos: La comunidad del anillo', 201, 'Peter Jackson');



function imprimirPeliculasCines(array $cines): void
{
    foreach ($cines as $cine) {
        echo "<br>";
        $cine->mostrarPeliculas();
    }
}

function mostrarPeliculaMayorCines(array $cines): void
{
    foreach ($cines as $nomCine => $cine) {
        echo "<br>";
        $peliMayorDur = $cine->mostrarPeliMayorDuracion();

        echo "<br>En el cine $nomCine la pelicula que tiene de mayor duración es '{$peliMayorDur['titulo']}' con una duracion de {$peliMayorDur['duracion']} minutos ";
    }
}

// function buscarCinesDirector(string $nomDirector, array $cines): array
// {
//     $pelisEncontradas = [];
//     foreach ($cines as $cine) {

//         $pelicula = $cine->buscarDirector($nomDirector);

//         array_push($pelisEncontradas, $pelicula);
//     }
//     return $pelisEncontradas;

// }


function buscarCinesDirector(string $nomDirector, array $cines): array
{
    $pelisEncontradas = [];
    $nomPelicula = "";
    foreach ($cines as $cine)
    {
        $pelicula = $cine->getPeliculas();
        if ($pelicula["director"] == $nomDirector && $nomPelicula != $pelicula["titulo"]) {
            $nomPelicula = $pelicula["titulo"];
            array_push($pelisEncontradas, $pelicula);
        }
    }
    return $pelisEncontradas;
}


$pelisDirector = buscarCinesDirector("Steven Spielberg", $cines);

function imprimirCinesDirector(array $pelisDirector): void
{

    foreach ($pelisDirector as $peliculas) {
        if (isset($peliculas)) { //**1º */
            foreach ($peliculas as $peli) {
                echo "Cine: {$peli['nomcine']} <br>";
                echo "Pelicula: {$peli['titulo']} <br>";
                echo "Duracion: {$peli['duracion']} <br>";
            }
        }
    }
    if (empty($pelisDirector)) { //si no hay datos en el array
        echo "El director no tiene peliculas en nuestros cines!";
    }
    // 🗒️**1º: Cuando un cine no tenga ese director la funcion isset() devuelve false porque el valor esta nulo o vacio.
}
// function imprimirCinesDirector(array $pelisDirector): void
// {

//     foreach ($pelisDirector as $peliculas) {
//         if (isset($peliculas)) { //**1º */
//             foreach ($peliculas as $peli) {
//                 echo "Cine: {$peli['nomcine']} <br>";
//                 echo "Pelicula: {$peli['titulo']} <br>";
//                 echo "Duracion: {$peli['duracion']} <br>";
//             }
//         }
//     }
//     if (empty($pelisDirector)) { //si no hay datos en el array
//         echo "El director no tiene peliculas en nuestros cines!";
//     }
//     // 🗒️**1º: Cuando un cine no tenga ese director la funcion isset() devuelve false porque el valor esta nulo o vacio.
// }
//⚠️APARCADO-PENDIENTE

// imprimirPeliculasCines($cines);

// mostrarPeliculaMayorCines($cines);

imprimirCinesDirector($pelisDirector);
