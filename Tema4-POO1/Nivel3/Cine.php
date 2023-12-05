<?php

Class Cine{
    protected string $nomCine;
    protected string $poblacion;
    protected array $peliculas;

    public function __construct(string $nomCine, string $poblacion){
        $this->nomCine = $nomCine;
        $this->poblacion = $poblacion;
        $this->peliculas = [];
    }

    public function agregarPelicula(string $tituloPeli, int $duracion, string $director): void{
        $peliculas =[
            "titulo"=> $tituloPeli,
            "duracion"=> $duracion,
            "director"=> $director
        ];
        $this->peliculas []= $peliculas; //agrega al atributo de clase el array recogido
    }

    public function mostrarPeliculas():void{
        echo "El cine {$this->nomCine} en {$this->poblacion} tiene las siguientes peliculas: ";
        foreach ($this->peliculas as $pelicula) {

            echo "<br> Pelicula: {$pelicula['titulo']} <br>";
            echo "Pelicula: {$pelicula['duracion']} <br>";
            echo "Pelicula: {$pelicula['director']} <br>";
        }
    }

    public function mostrarPeliMayorDuracion(): array{
        $peliMayorDuracion= null;
        foreach ($this->peliculas as $pelicula) {
            if(!$peliMayorDuracion || $pelicula["duracion"]>$peliMayorDuracion){ //1º
                $peliMayorDuracion = $pelicula;
            }
        }

        return $peliMayorDuracion;
        //🗒️1º: !$peliMayorDuracion -> si el valor de la variable esta vacio(null) tomara el valor de la primera pelicula. Si no lo esta comprobará la segunda condicion y es si la siguiente pelicula tiene una duracion mayor a la guardada en la variable $peliMayorDuracion para asi esta reemplace su valor
    }

    public function getPeliculas(){
        $peliculasCine = [];
            foreach ($this->peliculas as $pelicula) {
            $peliculasCine = $pelicula;
            $peliculasCine["nomCine"]=$this->nomCine; //**1 */
        }
        return $peliculasCine;
        
        //🗒️1º: agrega el nombre asociativo del cine
    }
    

    /**
     * Get the value of nomCine
     */ 
    public function getNomCine()
    {
        return $this->nomCine;
    }

    /**
     * Set the value of nomCine
     *
     * @return  self
     */ 
    public function setNomCine($nomCine)
    {
        $this->nomCine = $nomCine;

        return $this;
    }

    /**
     * Get the value of poblacion
     */ 
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Set the value of poblacion
     *
     * @return  self
     */ 
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    /**
     * Get the value of peliculas
     */ 

    /**
     * Set the value of peliculas
     *
     * @return  self
     */ 
    public function setPeliculas($peliculas)
    {
        $this->peliculas = $peliculas;

        return $this;
    }
}