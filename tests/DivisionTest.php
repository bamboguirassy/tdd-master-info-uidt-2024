<?php 
// importation de la classe TestCase de PHPUnit
use PHPUnit\Framework\TestCase;
// importation de la classe MathFunctions
use src\MathFunctions;

class DivisionTest extends TestCase {
    public function testDivision() {
        $result = MathFunctions::divide(10, 2); // Appel de la fonction de division
        $this->assertEquals(5, $result); // Vérification du résultat attendu
    }

    public function testDivisionByZero() {
        $this->expectException(InvalidArgumentException::class); // On s'attend à une exception de type InvalidArgumentException
        MathFunctions::divide(10, 0); // Appel de la fonction de division
    }
}