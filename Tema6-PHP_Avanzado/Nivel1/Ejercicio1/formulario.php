<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="mostrarForm.php" method="get">
        <tr>
            <td>Nombre</td>
            <td><label for="nombre"></label>
                <input type="text" name="nombre" id="nombre">
            </td>
        </tr>
        <tr>
            <td>Apellido</td>
            <td>
                <label for="apellido"></label>
                <input type="text" name="apellido" id="apellidollido">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="enviar" value="Enviar">
            </td>
        </tr>


    </form>
</body>

</html>