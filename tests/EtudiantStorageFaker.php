<?php 

namespace Tests;

use src\EtudiantStorage;

class EtudiantStorageFaker extends EtudiantStorage {
    public function getEtudiants() {
        return [
            ['id' => 1, 'name' => 'John Doe', 'age' => 20],
            ['id' => 2, 'name' => 'Jane Doe', 'age' => 25],
            ['id' => 3, 'name' => 'Alice Jones', 'age' => 30],
            ['id' => 4, 'name' => 'Bobby Louis', 'age' => 35],
        ];
    }
}