<?php
class Cine{
    protected string $poblacion;
    protected string $nomCine;
    protected array $peliculas;

    public function __construct(string $poblacion, string $nomCine){
        $this->poblacion = $poblacion;
        $this->nomCine = $nomCine;
        $this->peliculas = [];
    }

    public function crearPeliculas(string $nomPeli, int $duracion, string $director): void{

        $peliculas = [
            "titulo"=>$nomPeli, 
            "duracion"=>$duracion, 
            "director"=>$director
        ];
        $this->peliculas[] = $peliculas;
    }

    public function mostrarDatosPeliculass(): void{
        echo "Cine " . $this->nomCine . " en la ciudad de " . $this->poblacion . "<br>";
       foreach ($this->peliculas as $pelicula) {
            echo "Titulo pelicula: " . $pelicula["titulo"] . "\n";
            echo "Duración: " . $pelicula["duracion"] . "<br>";
            echo "Director: " . $pelicula["director"] . "<br>";
       }
    }
    //⚠️APARCADO: En proceso
}

