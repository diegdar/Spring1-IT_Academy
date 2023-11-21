<!-- Crea un programa que contenga dos arrays de números enteros/flotantes. Una vez creados, muestra por pantalla el resultado de:

La intersección de los dos arrays (números en común) 
La mezcla de ambos arrays.
 -->
 <?php
 $array1 = [1, 6, -3.7, 9, 10, 3.6, 2, 19, -7, 89];
 $array2 = [2.3, 3.6, 8.9, 9, 23.78, 2, -3.7];

 function interseccionArrays($array1, $array2): array
 {
    $valoresComunes = array_intersect($array1, $array2);

      return $valoresComunes;
 }

 function fusionArrays($array1, $array2): array
 {  
    $mezclaArrays = array_merge($array1, $array2);

    return $mezclaArrays;
 }

echo "Elementos en comun: ";
print_r(interseccionArrays($array1, $array2));

echo "<br><br> Fusion de los 2 arrays: ";
print_r(fusionArrays($array1, $array2));