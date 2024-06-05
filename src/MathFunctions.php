<?php
namespace src;

use InvalidArgumentException;

class MathFunctions {
    public function add($a, $b) {
        return $a + $b;
    }

    public static function divide($dividend, $divisor) {
        if ($divisor === 0) {
            throw new InvalidArgumentException("Division by zero");
        }
        return $dividend / $divisor;
    }


    public function factoriel($n) {
        if ($n < 0) {
            throw new InvalidArgumentException("Le factoriel d'un nombre négatif n'est pas défini");
        }
        if ($n === 0) {
            return 1;
        }
        return $n * $this->factoriel($n - 1);
    }
}