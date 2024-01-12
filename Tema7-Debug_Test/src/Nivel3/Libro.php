<?php

enum genero{
    case AVENTURAS;
    case CIENCIAFICCION;
    case CUENTO;
    case NOVELAPOLICIAL;
    case PARANORMAL;
    case DISTOPIA;
    case FANTASTICO;

    public function generos():string{
        return match($this){
            self::AVENTURAS=>"Aventuras",
            self::CIENCIAFICCION => "Ciencia Ficción",
            self::CUENTO => "Cuento",
            self::NOVELAPOLICIAL => "Cuento",
            self::PARANORMAL => "Paranormal",
            self::DISTOPIA => "Distopía",
            self::FANTASTICO => "Fantástico",
        };
    }
}

class Libro
{
    protected string $titulo;
    protected string $autor;
    protected string $isbn;
    protected genero $genero;
    protected int $numPaginas;

    public function __construct(string $titulo, string $autor, string $isbn, genero $genero, int $numPaginas)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->genero = $genero;
        $this->numPaginas = $numPaginas;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of isbn
     */ 
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @return  self
     */ 
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero->generos();
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get the value of numPaginas
     */ 
    public function getNumPaginas()
    {
        return $this->numPaginas;
    }

    /**
     * Set the value of numPaginas
     *
     * @return  self
     */ 
    public function setNumPaginas($numPaginas)
    {
        $this->numPaginas = $numPaginas;

        return $this;
    }
}