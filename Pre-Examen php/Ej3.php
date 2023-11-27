<?php
class Formaciones{
    protected string $nom;
    protected string $descripcion;

    public function getNom(){
        return $this->nom;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

}

class Fundamentos extends Formaciones{
    public function __construct($nom, $descripcion){
        $this->nom = $nom;
        $this->descripcion = $descripcion;
    }
}
class EspeMentorizadas extends Formaciones{
    protected string $nomEspecializacion;
    protected string $nomSpring;
    protected string $duracionSpring;


    public function getNomEspecializacion(){
        return $this->nomEspecializacion;
    }

    public function getNomSpring(){
        return $this->nomSpring;
    }

    public function getDuracionSpring(){
        return $this->duracionSpring;
    }

    public function setNomEspecializacion($nomEspecializacion){
        $this->nomEspecializacion = $nomEspecializacion;
    }

    public function setNomSpring($nomSpring){
        $this->nomSpring = $nomSpring;
    }

    public function setDuracionSpring($duracionSpring){
        $this->duracionSpring = $duracionSpring;
    }

}

class FrontEnd extends EspeMentorizadas{

}
class Backend extends EspeMentorizadas{

}
class FullStack extends EspeMentorizadas{

}
class DataScience extends EspeMentorizadas{

}


class Proyecto extends Formaciones{
    public function __construct($nom, $descripcion){
        $this->nom = $nom;
        $this->descripcion = $descripcion;
    }
}
class BusquedaTrabajo extends Formaciones{
    public function __construct($nom, $descripcion){
        $this->nom = $nom;
        $this->descripcion = $descripcion;
    }
}
