<?php

require_once("Formaciones.php");

class Especializacion extends Formaciones{
    private string $nomEspecializacion;
    private array $springs;


    public function __construct(string $nomFormacion, string $descripcion, string $nomEspecializacion){
        parent::__construct($nomFormacion, $descripcion);
        $this->nomEspecializacion = $nomFormacion;
        $this->springs = [];
    }

    public function setSpring(string $nombre, int $duracion):void{
        $springs = [
            "nombre"=> $nombre,
            "duracion"=>$duracion
        ];

        $this->springs[] = $springs;
    }
    public function getSpring()
    {
        foreach ($this->springs as $spring) {
            echo "Nombre Spring: " . $spring["nombre"] . "\n<br>";
            echo "Duracion Spring: " . $spring["duracion"] . " días \n<br>";
        }
    }

    /**
     * Get the value of nomFormacion
     */ 
    public function getNomFormacion()
    {
        return $this->nomFormacion;
    }

    /**
     * Set the value of nomFormacion
     *
     * @return  self
     */ 
    public function setNomFormacion($nomFormacion)
    {
        $this->nomFormacion = $nomFormacion;

        return $this;
    }

    /**
     * Get the value of descripcion
     */ 
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @return  self
     */ 
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of nomEspecializacion
     */ 
    public function getNomEspecializacion()
    {
        return $this->nomEspecializacion;
    }

    /**
     * Set the value of nomEspecializacion
     *
     * @return  self
     */ 
    public function setNomEspecializacion($nomEspecializacion)
    {
        $this->nomEspecializacion = $nomEspecializacion;

        return $this;
    }

    

    /**
     * Get the value of spring
     */ 
}
