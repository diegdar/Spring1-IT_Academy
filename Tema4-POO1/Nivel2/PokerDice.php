<?php

class PokerDice{

    protected $caras=["As", "K", "Q2", "J", "7", "8"]; 
    protected static $totalThrows= 0; //la convertimos en static para que recoja cada valor en cada tirada

    public function throw(){
        $indiceAleatorio = array_rand($this->caras); //guarda el indice aleatorio obtenido del array
        $valorAleatorio = $this->caras[$indiceAleatorio]; //recoje la figura correspondiente a la posicion de $indiceAleatorio
        self::$totalThrows++; // cada vez que haya una nueva tirada aumentara el valor de la variable en uno

        return $valorAleatorio;
    }

    public function shapeName(){
        $ultimaFigura = $this->throw(); 
        echo $ultimaFigura; //imprime la figura que devolvio la funcion throw()
        echo "\n <br>"; 
    }    

    public function getTotalThrows(){ 
        return self::$totalThrows;
    }
    
}

function tirarCincoDados(){
    for($i=0; $i<5; $i++){
        $nuevoDado = new PokerDice(); //crea cada dado
        echo "Dado " .  ($i+1) . ": "; //Imprime el numero de dado que corresponde a cada figura
        $nuevoDado->shapeName(); //imprime al figura del dado nuevo
    }
}

$tirada = new PokerDice();

$tirada->shapeName();
$tirada->shapeName();


tirarCincoDados();


echo "El número total de tiradas fueron: " . $tirada->getTotalThrows();