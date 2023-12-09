<?php
declare(strict_types=1);

require __DIR__ . '/../../src/Nivel3/Biblioteca.php';
require __DIR__ . '/../../src/Nivel3/Libro.php';

use PHPUnit\Framework\TestCase;

class BibliotecaTest extends TestCase
{
    private $biblioteca;

    protected function setUp(): void{ //crea el objeto para la prueba
        parent::setUP();
        $this->biblioteca = new Biblioteca();
    }

    protected function tearDown(): void{ //elimina el objeto para liberar recursos
        $this->biblioteca = null;
    } 

    public function testAgregarLibro(): void
    {
    // Creacion instancia de cada objeto para utilizar sus metodos
    $biblioteca = new Biblioteca();
    $libro = new Libro("La hojarasca", "Gabriel García Marquez", "3462027581", genero::FANTASTICO, 423);

    
    $biblioteca->agregarLibro($libro);//agrega el libro creado en la biblioteca
    $libros = $biblioteca->getLibros();//se obtiene la lista de libros de biblioteca

    $this->assertCount(1, $libros); //Se realiza la aserción de que la lista de libros tenga un tamaño de 1
    $this->assertEquals($libro, $libros[0]); //Indicamos que el primer libro en la lista sea el mismo que se agregó '$libros[0]'.
    }

    
}

 