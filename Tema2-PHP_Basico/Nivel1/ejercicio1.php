<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Define una variable de cada tipo: integer ,  double ,  string y boolean . Imprímelas por pantalla.
Después crea una constante que incluya tu nombre y muéstralo en formato título por pantalla. -->

    <?php
    $miNumero = 23;
    $miFloat = 3.56;
    $miString = "Hola mundo";
    $miBoolean = true;

    print "El numero es: $miNumero <br> El double es: $miFloat  <br> El String es: $miString  <br> El boolean es: $miBoolean <br> <br>";

    // define("MI_NOMBRE", "Diego Dario Chacon Delgado"); 
    const MI_NOMBRE = "Diego Dario Chacon Delgado";

    echo "Mi nombre es: <h1>" . MI_NOMBRE . "</h1>";


    ?>
</body>
</html>