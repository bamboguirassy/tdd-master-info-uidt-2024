<?php

namespace src;

class UserService {
    private $dataStorage;

    public function __construct(DataStorage $dataStorage) {
        $this->dataStorage = $dataStorage;
    }

    public function getUserById($userId) {
        return $this->dataStorage->getUserById($userId);
    }
}