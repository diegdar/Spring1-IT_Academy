<?php

class PokerDice{

    protected static $caras; //al ser static hace que cada instancia compartan la misma copia del array
    protected static $totalThrows; //la convertimos en static para que recoja cada valor

    public function __construct()
    {
        if(!isset(self::$caras)){ // si la propiedad $caras no esta definida  le asigna el valor del array, asi solo crea un array aunque haya varias instancias del objeto
            self::$caras = ["As", "K", "Q2", "J", "7", "8"];
            self::$totalThrows = 0;
        }
    }

    public function throw(){
        $indiceAleatorio = array_rand(self::$caras); //guarda el indice aleatorio obtenido del array
        $valorAleatorio = self::$caras[$indiceAleatorio]; //recoje la figura correspondiente a la posicion de $indiceAleatorio
        self::$totalThrows++; // cada vez que haya una nueva tirada aumentara el valor de la variable en uno

        return $valorAleatorio;
    }

    public function shapeName(){
        $ultimaFigura = $this->throw(); 
        echo $ultimaFigura; //imprime la figura que devolvio la funcion throw()
        echo "\n <br>"; 
    }    

    function tirarCincoDados(){
        for($i=0; $i<5; $i++){
            $nuevoDado = new PokerDice(); //crea cada dado
            echo "Dado " .  ($i+1) . ": "; //Imprime el numero de dado que corresponde a cada figura
            $nuevoDado->shapeName(); //imprime al figura del dado nuevo
        }
    }

    public function getTotalThrows(){ 
        return self::$totalThrows;
    }
    
}


$tirada = new PokerDice();

$tirada->shapeName();
$tirada->shapeName();

$tirada->tirarCincoDados();

echo "El número total de tiradas fueron: " . $tirada->getTotalThrows();