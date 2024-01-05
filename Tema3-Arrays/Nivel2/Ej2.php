<?php
/*Crea un programa que liste las notas de los/as alumnos/as de una clase. Por eso deberemos utilizar un array asociativo donde la clave será el nombre de cada alumno. Cada alumno tendrá 5 notas (valoradas del 0 al 10).

Además, crea una función que, dadas las notas de todos los alumnos/as, nos muestre tanto la media de la nota de cada alumno, como la nota media de la clase entera.
 */

$notas = [
    "Manuel"=>[3.5, 7, 4, 9, 7],
    "Andres"=>[7.3, 3.4, 8.7, 6.4, 7.3],
    "Ana"=>[5.9, 3.2, 8.6, 3.2, 6.9]
];


print_r($notasDecimales);
function listarNotas(array $notas)
{
    foreach ($notas as $nom_alumno => $notas_alumno) {
        echo"Las notas del alumno/a {$nom_alumno} son: ";

        foreach ($notas_alumno as $key => $nota) {
            echo"\n" . $nota;
        
        }
        echo"\n\n";
    }
}

function mostrarNotaMediaAlumno($array)
{   

    define("NUMERO_NOTAS", 5);
    $numAlumnos = count($array);

    $sumaNotasClase=0;
    $mediaAlumno=0;
    echo"***NOTA MEDIA ALUMNOS:";
    foreach ($array as $key => $notasAlumno) {
        $mediaAlumno= array_reduce($notasAlumno, fn($acumulador, $valor)=>($acumulador+$valor))/NUMERO_NOTAS;
        $sumaNotasClase += $mediaAlumno;

        echo "\n La media del alumno {$key} es: {$mediaAlumno} ";
    }

    echo"\n\n***NOTA MEDIA CLASE:";
    echo "\n La nota media de la clase es: " . round(($sumaNotasClase/$numAlumnos), 2);

}

// print_r(listarNotas($notas));
// print_r(mostrarNotaMediaAlumno($notas));
// -----------------------------------
/*
***MEDIA ALUMNOS:
 La media del alumno Manuel es: 6.1 
 La media del alumno Andres es: 6.62 
 La media del alumno Ana es: 5.56 

***MEDIA CLASE:
 La nota media de la clase es: 6.09
 */

