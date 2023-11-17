<!-- Sobreescribe alguna de las lógicas de entre todos los métodos mágicos existentes (que no sea __construct)
 -->
<?php
class Persona{
    protected $nombre;
    protected $apellido;

    public function __construct($nom, $ape){
        $this->nombre = $nom;
        $this->apellido =$ape;
    }

    public function __toString()
    {
        return 'La persona ' . $this->nombre . ' ' . $this->apellido . ' trabaja en nuestra empresa.';
    }
}

// pruebas:
$persona1 = new Persona("Manuel", "Gomez");
$persona2 = new Persona("Ana", "Perez");

echo $persona1 . "<br>";
echo $persona2;


?>