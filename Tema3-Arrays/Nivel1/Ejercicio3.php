<?php
/*Crea una función que reciba como parámetros un array de palabras y un carácter. La función nos devuelve true si todas las palabras del array tienen el carácter pasado como segundo parámetro.

Por ejemplo:

Si tenemos [“hola”, “Php”, “Html”] devolverá true si preguntamos por “h” pero falso si preguntamos por “l”.
 */

 
$palabras = ['hola', 'Php', 'Html'];
$letra = 'h';

function compruebaCaracter(array $palabras, string $letra):bool
{
    
  $seEncuentra = false;
  foreach ($palabras as $key => $palabra) {
                    //si encuentra la palabra el valor sera 0 y cambiara el valor de $seEncuentra a 'true'
    $seEncuentra = strcasecmp($palabra[$key], $letra)==0 ? true : $seEncuentra;
  }

  return $seEncuentra;
}

function mostrarResultado($palabras, $letra):string
{
    if(compruebaCaracter($palabras, $letra))
    {
        return "la {$letra} se encuentra en todas la palabras";
    }else
    {
        return "la {$letra} NO se encuentra en todas la palabras";
    }
}

// -----------------------------------
print_r(mostrarResultado($palabras, $letra));
