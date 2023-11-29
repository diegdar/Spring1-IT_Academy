<?php
declare(strict_types=1);

require __DIR__ . '/../../src/Nivel1/NumberChecker.php';

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase{

    public function testIsPositive(){
        $numberChecked = new NumberChecker(3);
        $resultPositivo = $numberChecked->isPositive();
        $this->assertEquals(true, $resultPositivo);

        $numberChecked = new NumberChecker(-8);
        $resultNegativo = $numberChecked->isPositive();
        $this->assertEquals(true, $resultNegativo);

    }

    public function testIsEven(){
        $numberChecked = new NumberChecker(5);
        $resultImpar = $numberChecked->isEven();
        $this->assertEquals(false, $resultImpar);
        
        $numberChecked = new NumberChecker(10);
        $resultPar = $numberChecked->isEven();
        $this->assertEquals(false, $resultPar);

    }

}