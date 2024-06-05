<?php

namespace src;

class Majority
{
    public function checkSeniority($age)
    {
        if (!is_numeric($age)) {
            return "Invalid age";
        }
        if ($age < 0) {
            return "Invalid age";
        }
        if ($age < 18) {
            return "Minor";
        }
        if ($age >= 18) {
            return "Adult";
        }
        return "Invalid age";
    }

    /**
     * Cette fonction retourne true si le nombre est pair, false sinon
     * @param int $nombre
     * @return bool
     */

    public function isNombrePair($nombre)
    {
        return $nombre % 2 == 0;
    }
}
