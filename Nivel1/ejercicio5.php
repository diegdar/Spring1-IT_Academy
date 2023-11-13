<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Escribir una función para verificar el grado de un/a estudiante de acuerdo con la nota.

Condiciones:

Si la nota es 60% o más, el grado debería ser Primera División.
Si la nota está entre el 45% y el 59%, el grado debería ser Segunda División.
Si la nota está entre 33% a 44%, el grado debería ser Tercera División.
Si la nota es menor a 33%, el estudiante reprobará. -->
<?php
    function gradoEstudiante($grado){
        if($grado>=60){
            echo "El estudiante tiene un grado de Primera División";
        }else if($grado>=45 && $grado<=59){
            echo "El estudiante tiene un grado de Segunda División";
        }else if($grado>=33 && $grado<=44){
            echo "El estudiante tiene un grado de Tercera División";
        }else if($grado<33){
            echo "El estudiante ha suspendido!";
        }else{
            echo "debe introducir un valor entre 0 y 100";
        }
    }

    gradoEstudiante(52);

?>
</body>
</html>