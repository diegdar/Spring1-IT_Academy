<?php

Class Cine
{
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
    public function getPeliculas()
    {
        return $this->peliculas;
    }

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