<style>
    .usuario{
        color: red;
        text-align: center;
        font-weight: bold;
    }
</style>
<?php
    require("formulario.php");

    $nom = $_GET["nombre"];
    $ape = $_GET["apellido"];

    if($nom!=null && $ape!=null){ //solo mostrará el mensaje si se introducieron datos en las variables

        echo"<br><br>";
        echo "<h2 class='usuario'>Hola $nom $ape ! </h2>";

    }
?>