<?php

namespace src;

class EtudiantUtility
{
    public $etudiantStorage;
    public function __construct(EtudiantStorage $etudiantStorage)
    {
        $this->etudiantStorage = $etudiantStorage;
    }

    public function calculateAgeMedian() {
        $etudiants =  $this->etudiantStorage->getEtudiants();
        if(count($etudiants) == 0) {
            return 0;
        }
        $sommeAge = 0;
        foreach($etudiants as $etudiant) {
            $sommeAge += $etudiant['age'];
        }
        return $sommeAge / count($etudiants);
    }
}
