<?php

require_once("Formaciones.php");

class Proyecto extends Formaciones{

    public function __construct(string $nomFormacion, string $descripcion){
        parent::__construct($nomFormacion, $descripcion);
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
}
