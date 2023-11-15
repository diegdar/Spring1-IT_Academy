<?php

class PokerDice{

    public function throw(){
        $caras = ["As", "K", "Q2", "J", "7", "8"];
        $indiceAleatorio = array_rand($caras); //guarda el indice aleatorio obtenido del array
        $valorAleatorio = $caras[$indiceAleatorio]; 

        return $valorAleatorio;
    }

    public function shapeName(){
        $ultimaFigura = $this->throw();
        echo $ultimaFigura;
    }


    
}

$tirada = new PokerDice();

$tirada->shapeName();