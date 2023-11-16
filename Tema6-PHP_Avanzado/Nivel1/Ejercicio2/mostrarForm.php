<?php
session_start(); //mantiene la sesion
?>

<style>
    .usuario{
        color: red;
        text-align: center;
        font-weight: bold;
    }
</style>
<?php
    require("formulario.php");

    $_SESSION["usu"] = $_GET["usuario"];

    $usu = $_SESSION["usu"];

    if($usu!=null){ //solo mostrará el mensaje si se introducieron datos en la casilla usuario del formulario
        echo"<br><br>";
        echo "<h2 class='usuario'>Bienvenido $usu! </h2>";
    }



?>