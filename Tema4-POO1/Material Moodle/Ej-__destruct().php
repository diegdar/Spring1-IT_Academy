<?php


////Definicion de Clase
class Banner 
{
//Atributos de clase
    private $ancho;
    private $alto;
    private $mensaje;
    private $imagen;
    private $colorTexto;
    private $colorFondo;
    //Constructor de clase
    function __construct ($an, $al, $men)
    {
        $this->ancho=$an;
        $this->alto=$al;
        $this->mensaje=$men;
        $this->imagen=imageCreate ($this->ancho, $this->alto) ;
        $this->colorTexto=imageColorAllocate ($this->imagen, 255, 255, 0) ;
        $this->colorFondo=imageColorAllocate ($this->imagen, 255, 0, 0) ;
        imageFill ($this->imagen, 0, 0, $this->colorFondo) ;
    }

//Metodos de clase
    public function graficar ()
    {
    imageString ($this->imagen, 5, 50, 10, $this->mensaje, $this->colorTexto);
    header ("Content-type: image/png") ;
    imagePNG ($this->imagen) ;
    }

    public function __destruct ()
    {
    imageDestroy ($this->imagen) ;
    }
}

//Creacion e inicializacion de objetos
$banerl=new Banner (428, 45, 'Sistema de Ventas por Mayor y Menor') ;
$banerl->graficar ();

