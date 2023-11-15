<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Imprime por pantalla " Hello, World! " utilizando una variable. Después:

Transforma todos los caracteres del string a mayúsculas e imprime en pantalla.
Imprime por pantalla el tamaño (longitud) de la variable.
Imprime por pantalla el string en orden inverso de caracteres.
Crea una nueva variable con el contenido “Este es el curso de PHP” e imprime por pantalla la concatenación de ambos strings.
 -->

 <?php
    $saludo = "Hello, World";

    echo $saludo;

    $saludoMayus = "<br>" . strtoupper($saludo) . "<br>";

    echo $saludoMayus;
    print "<br> la variable tiene: " . strlen($saludo) . " caracteres <br><br>";

    print "Este es el mismo string pero alreves: " . strrev($saludo) . "<br><br>";

    $curso = "este es el curso de PHP";

    echo $saludo . " " . $curso;

?>
</body>
</html>