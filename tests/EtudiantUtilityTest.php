<?php

use PHPUnit\Framework\TestCase;
use src\EtudiantStorage;
use src\EtudiantUtility;

class EtudiantUtilityTest extends TestCase {
    public function testCalculateAgeMedian() {
       $etudiantStorageStub = $this->createStub(EtudiantStorage::class);
         $etudiantStorageStub->method('getEtudiants')->willReturn([
              ['prenom' => 'Prenom1', 'nom' => 'Nom1', 'age' => 20],
              ['prenom' => 'Prenom2', 'nom' => 'Nom2', 'age' => 25],
              ['prenom' => 'Prenom3', 'nom' => 'Nom3', 'age' => 30],
                ['prenom' => 'Prenom4', 'nom' => 'Nom4', 'age' => 35],
                ['prenom' => 'Prenom5', 'nom' => 'Nom5', 'age' => 40],
                ['prenom' => 'Prenom6', 'nom' => 'Nom6', 'age' => 45],
                ['prenom' => 'Prenom7', 'nom' => 'Nom7', 'age' => 50],
                ['prenom' => 'Prenom8', 'nom' => 'Nom8', 'age' => 55],
                ['prenom' => 'Prenom9', 'nom' => 'Nom9', 'age' => 60],
                ['prenom' => 'Prenom10', 'nom' => 'Nom10', 'age' => 65],
                ['prenom' => 'Prenom11', 'nom' => 'Nom11', 'age' => 70],
                ['prenom' => 'Prenom12', 'nom' => 'Nom12', 'age' => 75],
                ['prenom' => 'Prenom13', 'nom' => 'Nom13', 'age' => 80],
                ['prenom' => 'Prenom14', 'nom' => 'Nom14', 'age' => 85],
                ['prenom' => 'Prenom15', 'nom' => 'Nom15', 'age' => 90],
                ['prenom' => 'Prenom16', 'nom' => 'Nom16', 'age' => 95],
                ['prenom' => 'Prenom17', 'nom' => 'Nom17', 'age' => 100],
                ['prenom' => 'Prenom18', 'nom' => 'Nom18', 'age' => 105],
                ['prenom' => 'Prenom19', 'nom' => 'Nom19', 'age' => 110]
         ]);
       
        $etudiantUtility = new EtudiantUtility($etudiantStorageStub);
        $resultat = $etudiantUtility->calculateAgeMedian();
        $this->assertEquals(65, $resultat);
    }

    public function testCalculateAgeMedianNull() {
        $etudiantStorageStub = $this->createStub(EtudiantStorage::class);
        $etudiantStorageStub->method('getEtudiants')->willReturn([]);
        $etudiantUtility = new EtudiantUtility($etudiantStorageStub);
        $resultat = $etudiantUtility->calculateAgeMedian();
        $this->assertEquals(0, $resultat);
    }
}