<!-- Crea una clase Employee, define como atributos su nombre y sueldo. Definir un método initialize que reciba como parámetros el nombre y sueldo. Plantear un segundo método print que imprima el nombre y un mensaje si debe pagar o no impuestos (si el sueldo supera 6000, paga impuestos). -->

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