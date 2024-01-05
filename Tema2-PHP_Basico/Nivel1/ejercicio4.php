<?php
/*Haz un programa que implemente una función en la que se cuente hasta un número determinado. Si no se incluye un número determinado, el número deberá tener un valor por defecto igual a 10. Además, esta función debe tener un segundo parámetro que indique de cuánto a cuánto se cuenta(De 1 en 1, de 2 en 2…). La cuenta debe mostrarse por pantalla paso a paso.

NOTAS 🗒️:
1ª: En cada iteración le suma el valor de la variable $escalaConteo al valor que tiene $i y se lo reasigna para hacer el intervalo de conteo.
.
 */
$numero = 3;
$escalaConteo = 3;
function contarNumeros($escalaConteo, $numero=10, )
{
    if($escalaConteo<$numero)
    {                           //Nota 1ª
        for ($i=0; $i <$numero ; $i+=$escalaConteo) { 
            echo $i+1 . "\n";
        }
    }else
    {
        echo "el valor del numero a contar no puede ser mayor o igual que al intervalo a contar";
    }
}


contarNumeros($escalaConteo);

