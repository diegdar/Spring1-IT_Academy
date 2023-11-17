<?php


//Clase abstracta padre
abstract class Trabajador
{
    //Atributos de clase
    protected $nombre;
    protected $sueldo;
    //Constructor de clase
    public function __construct($nom, $sue)
    {
        $this->nombre = $nom;
        $this->sueldo = $sue;
    }
    //Metodos de clase
    public function retornarSueldo()
    {
        return $this->sueldo;
    }
}

//Clase hija
class Empleado extends Trabajador
{
}
//Clase hija
class Gerente extends Trabajador
{
}

//Creacion e inicializacion de objetos
$vec[] = new Empleado('juan', 1200);
$vec[] = new Empleado('ana', 1000);
$vec[] = new Empleado('carlos', 1000);
$vec[] = new Gerente('jorge', 25000);
$vec[] = new Gerente('marcos', 8000);

$sumal = 0;
$suma2 = 0;
for ($f = 0; $f < count($vec); $f++) 
{
    if ($vec[$f] instanceof Empleado) {
        $sumal = $sumal + $vec[$f]->retornarSueldo();
    } else if ($vec[$f] instanceof Gerente) {
        $suma2 = $suma2 + $vec[$f]->retornarSueldo();
    }
}

echo 'Gastos en sueldos de Empleados:' . $sumal . '<br>'; //Gastos en sueldos de Empleados:3200
echo 'Gastos en sueldos de Gerentes: ' . $suma2 . '<br>'; //Gastos en sueldos de Gerentes: 33000

