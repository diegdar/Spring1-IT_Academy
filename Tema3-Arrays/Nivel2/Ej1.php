<!-- Crea un programa que contenga dos arrays de números enteros/floados. Una vez creados, muestra por pantalla el resultado de:

La intersección de los dos arrays (números en común) ❓Pregunta❓: te refieres numero enteros en comun con uno flotante. Ej: 2 = 2.0?
La mezcla de ambos arrays.
 -->
 <?php
 $arrayEnteros = [1, 6, -3, 9, 10, 189, 2, 19, -7, 89];
 $arrayFloats = [2.3, 3.6, 8.9, 9.0, 23.78, 2.00, -3.0];

 function interseccionArrays($arrayEnteros, $arrayFloats): array
 {
     $valoresComunes = [];
      for($i=0; $i<count($arrayEnteros); $i++){
         for($j=0; $j<count($arrayFloats); $j++){
             if(floatval($arrayEnteros[$i]) == $arrayFloats[$j]){ //floatval convierte los enteros en numeros floats para poder comparar cada elemento
                 array_push($valoresComunes, $arrayEnteros[$i]); //introducira los valores en comun en el array
             }
         }
      }

      return $valoresComunes;
 }

 function fucionArrays($arrayEnteros, $arrayFloats): array
 {  
    $mezclaArrays = array_merge($arrayEnteros, $arrayFloats);

    return $mezclaArrays;
 }


echo "Elementos en comun: ";
print_r(interseccionArrays($arrayEnteros, $arrayFloats));
echo "<br><br> Fusion de los 2 arrays: ";
print_r(fucionArrays($arrayEnteros, $arrayFloats));