<!-- Crea un programa que, dado un número (declarado como variable o entrado por terminal) dibuje (con el
carácter "#") un triángulo lateral. Por ejemplo:
Input 3
4
Output 

#
##
###
##
#

#
##
###
#### 
###
##
#

-->
<?php

function dibujarTriangulo($numFilas) {
    $caracter = "#";
    $numFilas;

    // Primera mitad
    for ($i=0; $i<$numFilas; $i++) { 
        for ($j=0; $j<=$i; $j++) { 
            echo $caracter;
        }
        echo "\n<br>";
    }

    // Segunda mitad
    for ($i=0; $i<$numFilas; $i++) { 
        for ($j=$numFilas-1; $j>=$i; $j--) { 
            echo $caracter;
        }
        echo "\n<br>";
    }

    

}


dibujarTriangulo(5);