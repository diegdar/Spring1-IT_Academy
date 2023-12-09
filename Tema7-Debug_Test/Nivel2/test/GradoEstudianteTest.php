<?php
declare(strict_types=1);

require __DIR__ . '/../../src/Nivel2/GradoEstudiante.php';

use PHPUnit\Framework\TestCase;

class GradoEstudianteTest extends TestCase{
   protected $gradoEstudiante;

   protected function setUp(): void{ //crea el objeto para la prueba
      parent::setUP();
      $this->gradoEstudiante = new GradoEstudiante();
  }

  protected function tearDown(): void{ //elimina el objeto para liberar recursos
      $this->gradoEstudiante = null;
  } 
  // ⚠️Los metodos Setup() y tearDown : son útiles para garantizar que cada test se ejecute en un entorno limpio. Esto ayuda a evitar que los resultados de un test se vean afectados por los resultados de otro test.

  public static function PrimeraDivisionDataProvider(): array{ 
   return array(
         array(66, "Tiene un grado de Primera División"), //valor a probar, resultado que debe dar
      );
  }
/**
 * @dataProvider PrimeraDivisionDataProvider
   */
  public function testPrimeraDivision($value, $expected): void{
      $grado = new GradoEstudiante();
      $result = $grado->gradoEstudiante($value);
      $this->assertEquals($expected, $result);
  }
  public static function SegundaDivisionDataProvider(): array{ 
   return array(
         array(46, "Tiene un grado de Segunda División"), 
         array(51, "Tiene un grado de Segunda División"), 
         array(59, "Tiene un grado de Segunda División"), 
      );
  }
/**
 * @dataProvider PrimeraDivisionDataProvider
   */
  public function testSegundaDivision($value, $expected): void{
      $grado = new GradoEstudiante();
      $result = $grado->gradoEstudiante($value);
      $this->assertEquals($expected, $result);
  }

  public static function TerceraDivisionDataProvider(): array{
      return array(
         array(33, "Tiene un grado de Tercera División"), 
         array(38, "Tiene un grado de Tercera División"), 
         array(44, "Tiene un grado de Tercera División"), 
      );
   }
/**
 * @dataProvider TerceraDivisionDataProvider
   */
   public function testTerceraDivision($value, $expected): void{
      $grado = new GradoEstudiante();
      $result = $grado->gradoEstudiante($value);
      $this->assertEquals($expected, $result);
   }     
  public static function SuspensoDataProvider(): array{
      return array(
         array(32, "El estudiante ha suspendido!"), 
         array(22, "El estudiante ha suspendido!"), 
         array(9, "El estudiante ha suspendido!"), 
      );
   }
/**
 * @dataProvider SuspensoDataProvider
   */
   public function testSuspenso($value, $expected): void{
      $grado = new GradoEstudiante();
      $result = $grado->gradoEstudiante($value);
      $this->assertEquals($expected, $result);
   }     
  public static function ValorErroneoDataProvider(): array{
      return array(
         array(32, "debe introducir un valor entre 0 y 100"), 
         array(22, "debe introducir un valor entre 0 y 100"), 
         array(19, "debe introducir un valor entre 0 y 100"), 
      );
   }
/**
 * @dataProvider SuspensoDataProvider
   */
   public function testValorErroneo($value, $expected): void{
      $grado = new GradoEstudiante();
      $result = $grado->gradoEstudiante($value);
      $this->assertEquals($expected, $result);
   }     
}    