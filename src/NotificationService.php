<?php

namespace src;

class NotificationService {
    private $emailService;
    private $dataStorage;

    public function __construct(EmailService $emailService, DataStorage $dataStorage) {
        $this->emailService = $emailService;
        $this->dataStorage = $dataStorage;
    }

    public function notifyUser($userId, $message) {
        // instancier le service de stockage de données
        // récupérer les informations de l'utilisateur
        $user = $this->dataStorage->getUserById($userId);
        // verifier que l'utilisateur existe
        if (!$user) {
            throw new \InvalidArgumentException('User not found');
        }
        // envoyer une notification par email
      return  $this->emailService->sendEmail($user['email'], 'Notification', $message);
    }
}