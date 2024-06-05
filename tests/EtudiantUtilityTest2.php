<?php

use PHPUnit\Framework\TestCase;
use src\EtudiantStorage;
use src\EtudiantUtility;
use Tests\EtudiantStorageFaker;

class EtudiantUtilityTest2 extends TestCase {
    public function testCalculateAgeMedian() {
       
       $etudiantStorageFaker = new EtudiantStorageFaker();
        $etudiantUtility = new EtudiantUtility($etudiantStorageFaker);
        $resultat = $etudiantUtility->calculateAgeMedian();
        $this->assertEquals(30, $resultat);
    }
}