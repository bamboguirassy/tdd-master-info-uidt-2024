<?php

use PHPUnit\Framework\TestCase;
use src\MathFunctions;

class MathFunctionsTest extends TestCase {
    public function testAdd() {
        $mathFunctions = new MathFunctions();
        $this->assertEquals(4, $mathFunctions->add(2, 2));
        $this->assertEquals(0, $mathFunctions->add(-2, 2));

    }

    /**
     * Test factoriel function
     */
    public function testFactoriel() {
        $mathFunctions = new MathFunctions();
        $this->assertEquals(1, $mathFunctions->factoriel(0));
        $this->assertEquals(1, $mathFunctions->factoriel(1));
        $this->assertEquals(120, $mathFunctions->factoriel(5));
        $this->expectException(InvalidArgumentException::class);
        $mathFunctions->factoriel(-5);
    }
}