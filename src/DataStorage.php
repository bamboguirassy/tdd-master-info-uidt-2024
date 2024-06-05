<?php

namespace src;

class DataStorage {
    public function getUserById($userId) {
        // Requête SQL simulée pour récupérer l'utilisateur
        return ['id' => $userId, 'name' => 'John Doe'];
    }
}