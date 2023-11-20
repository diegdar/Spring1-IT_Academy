<?php
declare(strict_types=1);

require 'NumberChecker.php';

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase{

    private $numberChecked;


    protected function setUp(): void{

        parent::setUP();
        $this->numberChecked = new NumberChecker(2);
    }

    protected function tearDown(): void{
        $this->numberChecked = null;
    }

    public function testIsEven(){
        $result = $this->numberChecked->isEven();
        $this->assertEquals(true, $result);
    }
    public function testIsPositive(){
        $result = $this->numberChecked->isPositive();
        $this->assertEquals(true, $result);
    }

}