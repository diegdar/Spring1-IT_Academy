<?php
declare(strict_types=1);

require __DIR__ . '/../../src/Nivel2/NumberChecker.php';

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase{

    private $numberChecked;

    protected function setUp(): void{ //crea el objeto para la prueba
        parent::setUP();
        $this->numberChecked = new NumberChecker(3);
    }

    protected function tearDown(): void{ //elimina el objeto para liberar recursos
        $this->numberChecked = null;
    } 
    // ⚠️Los metodos Setup() y teaDown : son útiles para garantizar que cada test se ejecute en un entorno limpio. Esto ayuda a evitar que los resultados de un test se vean afectados por los resultados de otro test.

    public static function IsEvenDataProvider(): array{ //cada array es un  test para el metodo 'IsEven'
        return array(
            array(3, false), //valor a probar, resultado que debe dar
            array(6, true),
            array(-4, true),
        );
    }
    /**
     * @dataProvider IsEvenDataProvider
     */
    public function testIsEven($number, $expected){ //valor a testear, valor esperado
        $this->numberChecked = new NumberChecker($number);
        $result = $this->numberChecked->isEven();
        $this->assertEquals($expected, $result); //tanto el valor esperado como el resultado deben ser iguales para validar el test
    }
    public static function IsPositiveDataProvider(){
        return array(
            array(8, true),
            array(-12, false),
            array(-8, false),
        );
    }
    /**
     * @dataProvider IsPositiveDataProvider
     */
    public function testIsPositive($number, $expected){
       $this->numberChecked = new NumberChecker($number);
       $result = $this->numberChecked->isPositive();
       $this->assertEquals($expected, $result);
    }


}