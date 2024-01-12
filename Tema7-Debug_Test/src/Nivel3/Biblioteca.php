<?php
enum campoModificar{
    case TITULO;
    case AUTOR;
    case ISBN;
    case GENERO;
    case NUMPAGINAS;

    public function camposModificar(): string
    {
        return match($this)
        {
            self::TITULO => "titulo",
            self::AUTOR=> "autor",
            self::GENERO => "genero",
            self::ISBN => "isbn",
        };
    }
}

class Biblioteca{
    protected $libros;

    public function __construct()
    {
        $this->libros= array(); 
    }

    public function agregarLibro(Libro $libro):void
    {
        $this->libros[]=$libro; //agregara cada libro al array $libros
    }

    public function borrarLibro(string $titulo):string
    {
        $libros = $this->libros;//atributo array con los libros
        $esEliminado= false;
        $longArray = count($libros);
        $i = 0;
        while($i<$longArray && $esEliminado==false)
        { //si encuentra el libro para eliminar dejara de itererar
            if($libros[$i]->getTitulo() == $titulo)
            { //si en la iteracion actual encuentra el libro buscado en la BBDD..
                $indice = array_search($libros[$i]->getTitulo(), $libros); //da la posicion del libro en el array
                unset($libros[$indice]); //borrara el libro en la iteracion que coincida con el nombre del libro buscado
                $esEliminado = true;
            }
            $i++;
        }   
        if(!$esEliminado) 
        {//si la variable $esEliminado es false es porque no se encontro el libro para eliminar
            return "El libro '$titulo' no se puede eliminar porque no se encuentra en la BBDD";
        }else
        {
            return "El libro '$titulo' fue eliminado de la BBDD";
        }
    }

    function buscarLibro($valorBuscado) //debe devolverser un array o un string
    {
        $libros = $this->libros; //atributo array con los libros
        $longArray = count($this->libros);
        $i = 0;
        while($i<$longArray)
        { //si encuentra el libro dejara de itererar
            if(
                $libros[$i]->getTitulo() == $valorBuscado ||
                $libros[$i]->getAutor() == $valorBuscado ||
                $libros[$i]->getIsbn() == $valorBuscado ||
                $libros[$i]->getGenero()==$valorBuscado->generos())
                {
                    $librosEncontrados[]=$libros[$i]; //Si hay alguna coincidencia agregara el libro encontrado al array $librosEncontrados
                }
            $i++;
        }
            if(!empty($librosEncontrados))
            {//Si el array no esta vacio es porque encontro al menos un libro con el valor buscado
                foreach ($librosEncontrados as $key => $libro)
                {
                    echo "Titulo: {$libro->getTitulo()}\n";
                    echo "Autor: {$libro->getAutor()}\n";
                    echo "ISBN: {$libro->getIsbn()}\n";
                    echo "GENERO: {$libro->getGenero()}\n";
                    echo "Numero de páginas: {$libro->getNumPaginas()}\n\n";    
                }
            }else
            {
                return "No tenemos ningun libro por el valor buscado: '$valorBuscado' ";
            }
            
    }
    
    public function modificarLibro(string $titulo, campoModificar $campoModificar, string $nuevoValor): string
    {
        $libros = $this->libros;//atributo array con los libros
        $esEncontrado= false;
        $longArray = count($this->libros);
        $i = 0;
        while($i<$longArray && $esEncontrado==false)
        {
            if($libros[$i]->getTitulo() == $titulo)
            {
                if($campoModificar->camposModificar() == "titulo") 
                { //El metodo del enum camposModificar() traera el enum en string para ver si coincide con el campo a modificar y si es asi modificará solo ese
                    $libros[$i]->setTitulo($nuevoValor);
                    $esEncontrado = true;
                }
                if($campoModificar->camposModificar()  == "autor") 
                {
                    $libros[$i]->setAutor($nuevoValor);
                    $esEncontrado = true;
                }
                if($campoModificar->camposModificar() == "genero") 
                {
                    $libros[$i]->setGenero($nuevoValor);
                    $esEncontrado = true;
                }
                if($campoModificar->camposModificar()  == "isbn") 
                {
                    $libros[$i]->setIsbn($nuevoValor);
                    $esEncontrado = true;
                }
            }
        }
        if(!$esEncontrado) 
        {//si la variable $esEliminado es false es porque no se encontro el libro para eliminar
            return "El libro '$titulo' No se puedo modificar, ya que no se encuentra en nuestra BBDD";
        }else
        {
            return "El libro '$titulo' se ha modificado correctamente con los nuevos valores";
        }
    }

    public function devolverLibrosGrandes(): void
    {
        foreach ($this->libros as $libro) {
            if($libro->getNumPaginas() >500)
            {
                echo "El libro " . $libro->getTitulo() ." debe ser devuelto pues tiene " .$libro->getNumPaginas() . " páginas <br>";
            }
        }
    }

    /**
     * Get the value of libros
     */ 
    public function getLibros()
    {
        return $this->libros;
    }

    /**
     * Set the value of libros
     *
     * @return  self
     */ 
    public function setLibros($libros)
    {
        $this->libros = $libros;

        return $this;
    }
}