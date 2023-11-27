<?php
declare(strict_types=1);

require '../../src/Nivel1/GradoEstudiante.php';

use PHPUnit\Framework\TestCase;

class GradoEstudianteTest extends TestCase{
     public function testPrimeraDivision(){
        $grado = new GradoEstudiante(); //crea el objeto para utilizar el metodo gradoEstudiante()

        $result = $grado->gradoEstudiante(70); //pasamos el valor al metodo para guardarlo en la variable $result
        $this->assertEquals("Tiene un grado de Primera División",$result); //compara el valor esperado con el recogido por el metodo para aprobar el test
     }
     public function testSegundaDivision(){
        $grado = new GradoEstudiante();

        $result = $grado->gradoEstudiante(55);
        $this->assertEquals("Tiene un grado de Segunda División",$result);
     }
     public function testTerceraDivision(){
        $grado = new GradoEstudiante();

        $result = $grado->gradoEstudiante(39);
        $this->assertEquals("Tiene un grado de Tercera División",$result);
     }
     public function testSuspenso(){
        $grado = new GradoEstudiante();

        $result = $grado->gradoEstudiante(25);
        $this->assertEquals("El estudiante ha suspendido!",$result);
     }
     public function testValorErroneo(){
        $grado = new GradoEstudiante();

        $result = $grado->gradoEstudiante(-45);
        $this->assertEquals("debe introducir un valor entre 0 y 100",$result);
     }

}                       