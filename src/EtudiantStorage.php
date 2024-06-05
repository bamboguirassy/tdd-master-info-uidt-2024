<?php
namespace src;
class EtudiantStorage
{
    public function getEtudiants()
    {
        // $nombre généré aléatoirement
        $nombre = rand(0, 20);
        // retourner une liste d'étudiants générés de maniere aléatoire avec les attributs prenom, nom, age
        $etudiants = [];
        for ($i = 0; $i < $nombre; $i++) {
            $etudiants[] = [
                'prenom' => 'Prenom' . $i,
                'nom' => 'Nom' . $i,
                'age' => rand(16, 30)
            ];
        }
        return $etudiants;
    }
}
