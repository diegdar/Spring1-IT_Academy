<!-- Escribir una función para verificar el grado de un/a estudiante de acuerdo con la nota.

Condiciones:

Si la nota es 60% o más, el grado debería ser Primera División.
Si la nota está entre el 45% y el 59%, el grado debería ser Segunda División.
Si la nota está entre 33% a 44%, el grado debería ser Tercera División.
Si la nota es menor a 33%, el estudiante reprobará. -->

<!-- Practicamos algo de TDD. Recuerda el ejercicio 5 del nivel de PHP Básicos y piensa tests que podrías realizar para probar su correcto funcionamiento. Programa y después realiza el programa a testear paso a paso según validas los test previamente creados. -->
<?php
    class GradoEstudiante{

        function gradoEstudiante($nota){
            if($nota < 0 || $nota > 100){
                return "debe introducir un valor entre 0 y 100";
            } else if($nota >= 60){
                return "Tiene un grado de Primera División";
            } else if($nota >= 45){
                return "Tiene un grado de Segunda División";
            } else if($nota >= 33){
                return "Tiene un grado de Tercera División";
            } else if($nota < 33){
                return "El estudiante ha suspendido!";
            }
        }
    }

?>
</body>
</html>