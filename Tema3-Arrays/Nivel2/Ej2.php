<!-- Crea un programa que liste las notas de los/as alumnos/as de una clase. Para eso deberemos utilizar un array asociativo donde la clave será el nombre de cada alumno. Cada alumno tendrá 5 notas (valoradas del 0 al 10).

Además, crea una función que, dadas las notas de todos los alumnos/as, nos muestre tanto la media de la nota de cada alumno, como la nota media de la clase entera. -->
<?php
$notasAlumnos = [
                    "Ana Nieto"=> array(3.5, 7.9, 6.8, 4.2, 8.5),
                    "Mario Paredez"=> array(5.5, 9.2, 4.8, 4.2, 7.5),
                    "Luis Ortiz"=> array(2.5, 3.9, 8.8, 4.2, 5.5),
                    "Maria Ocampo"=> array(4, 2.7, 9.3, 4.9, 6.5),
    ];

    function listarNotas($array){

        foreach ($array as $alumno => $notas) {
            echo "Las notas del alumno: " . $alumno . " son: "; //imprime el nombre de cada alumno
            foreach ($notas as $nota) {
                echo $nota . ", "; //imprime todas las notas de cada alumno
            }
            echo "<br>";
        }
    }

    function mediaNotas($array){
        $sumNotasAlumno=0;
        $sumNotasClase=0;

        foreach ($array as $alumno => $notas) {
            $sumNotasAlumno = 0; // Reinicia la variable en cada iteración para el siguiente alumno
            echo "Las nota media del alumno: " . $alumno . " es: ";
            foreach ($notas as $nota) {
                $sumNotasAlumno += $nota; //Acumula las notas del alumno actual
            }
            echo $sumNotasAlumno/5 . "<br>";
            $sumNotasClase += $sumNotasAlumno; //Acumula las notas de cada alumno para calcular la media de la clase 
        }
        echo "La nota media de la clase es: " . $sumNotasClase/count($array)/5 . "<br>"; //imprime la media de la clase: suma total de las notas de la clase entre el numero de estudiantes y el numero de notas

    }

    listarNotas($notasAlumnos);

    echo "<br>";

    mediaNotas($notasAlumnos);