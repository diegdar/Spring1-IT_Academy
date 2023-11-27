<?php
declare(strict_types=1);

require __DIR__ . '/../../src/Nivel1/NumberChecker.php';

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase{

    public function testIsPositive(){
        $numberChecked = new NumberChecker(3);

        $result = $numberChecked->isPositive();

        $this->assertEquals(true, $result);
    }

    public function testIsEven(){
        $numberChecked = new NumberChecker(5);

        $result = $numberChecked->isEven();
        $this->assertEquals(false, $result);
    }

}