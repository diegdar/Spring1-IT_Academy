<?php
class Employee{
    private string $nombre;
    private int $sueldo;

    public function __construct($nombre, $sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    function imprime(){
        if($this->sueldo>6000){
            echo $this->nombre . " debe pagar impuestos";
        }else{
            echo $this->nombre . " No debe pagar impuestos";
        }
    }

}

// Pruebas:
$empleado = new Employee("diego", 4500);
$empleado->imprime();