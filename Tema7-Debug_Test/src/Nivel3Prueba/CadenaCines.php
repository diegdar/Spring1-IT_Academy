<?php

class CadenaCines{
    protected $cines;

    public function __construct()
    {
        $this->cines = array();
    }

    public function agregarCine(Cine $cine):void
    {
        $this->cines[] = $cine;
    }

    public function mostrarpeliculas(): void
    {
        foreach ($this->cines as $cine) {
            
            echo "<h2>El cine {$cine->getNomCine()} en  {$cine->getPoblacion()} tiene las siguientes peliculas: </h2>";
            foreach($cine->getPeliculas() as $pelicula)
            {//getPeliculas() nos da el array con las peliculas del cine en la iteracion actual
                echo "<br><br> Pelicula: {$pelicula["titulo"]}" . PHP_EOL;
                echo "<br> Duración: {$pelicula["duracion"]}" . PHP_EOL;
                echo "<br> Director: {$pelicula["director"]}" ;
                echo "<br>";
            }
            echo "<hr>";
        }
    }

    public function PeliMayorDuracion():void
    {
        foreach ($this->cines as $cine)
        {
            $peliMayorDuracion= $cine->getPeliculas()[0]; //toma el valor de la primera pelicula almacenada para poder compararla con el resto
            echo "<h2>El cine  {$cine->getNomCine()}  en  {$cine->getPoblacion()}  tiene la siguiente pelicula con mayor duracion: </h2>";
            foreach($cine->getPeliculas() as $pelicula)
            {//getPeliculas() nos da el array con las peliculas del cine en la iteracion actual
                if($pelicula["duracion"]>$peliMayorDuracion["duracion"])
                {
                    $peliMayorDuracion = $pelicula;
                }
            }
            echo "<br><br> Pelicula: {$peliMayorDuracion["titulo"]}" . PHP_EOL;
            echo "<br> Duración: {$peliMayorDuracion["duracion"]}" . PHP_EOL;
            echo "<br> Director: {$peliMayorDuracion["director"]}" ;
            echo "<br>";
            echo "<hr>";          
        }
    }

    public function BuscarPeliDirector(string $nomDirector):void
    {
        $nomsPeliculas= [];
        $pelisEncontradas= [];
        foreach ($this->cines as $cine)
        {
            $peliculas = $cine->getPeliculas();
            foreach($peliculas as $pelicula)
            {//getPeliculas() nos da el array con las peliculas del cine en la iteracion actual
                if($pelicula["director"]==$nomDirector && !in_array($pelicula["titulo"], $nomsPeliculas))
                { //Entrara si la pelicula actual es igual al nombre del director que buscamos Y no este dentro de los titulos de peliculas guardados en el array $nomsPeliculas
                    $nomsPeliculas []= $pelicula["titulo"];
                    $pelicula["nomCine"]= $cine->getNomCine(); //nos permite agregar al array el nombre del cine
                    $pelisEncontradas []= $pelicula ;
                }
            }
            // print_r($pelisEncontradas);
        }        

        if(!empty($pelisEncontradas))
        {
            echo "<h2>Encontramos en los siguientes cines las peliculas del director $nomDirector: </h2><br><br>" ;
            foreach ($pelisEncontradas as $pelicula)
            {
                echo "<h3>Cine '{$pelicula["nomCine"]}' tiene la(s) siguiente(s) pelicula(s): </h3>";
                echo "<br><br> Pelicula: {$pelicula["titulo"]}" . PHP_EOL;
                echo "<br> Duración: {$pelicula["duracion"]}" . PHP_EOL;
                echo "<br> Duración: {$pelicula["nomCine"]}" . PHP_EOL;
                echo "<br>";
                echo "<hr>";          
    
            }
        }else
        {
            echo "No tenemos peliculas con el director $nomDirector";
        }

    }
    /**
     * Get the value of cines
     */ 
    public function getCines()
    {
        return $this->cines;
    }

    /**
     * Set the value of cines
     *
     * @return  self
     */ 
    public function setCines($cines)
    {
        $this->cines = $cines;

        return $this;
    }
}