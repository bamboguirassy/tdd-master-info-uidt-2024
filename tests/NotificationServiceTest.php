<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use src\NotificationService;
use src\EmailService;
use src\DataStorage;

class NotificationServiceTest extends TestCase {
    public function testNotifyUser() {
        // Création d'un spy pour l'objet EmailService
        $emailServiceSpy = $this->getMockBuilder(EmailService::class)
                                ->onlyMethods(['sendEmail'])
                                ->getMock();
        $emailServiceSpy->expects($this->once())
                        ->method('sendEmail')
                        ->with("user@example.com", "Notification", "Message de notification")
                        ->willReturn(true);
        //Création d'un spy pour l'objet DataStorage
        $dataStorageSpy = $this->getMockBuilder(DataStorage::class)
                            ->onlyMethods(['getUserById'])
                            ->getMock();
        $dataStorageSpy->expects($this->once())
                        ->method('getUserById')
                        ->with(1)
                        ->willReturn(['id' => 1,'email' => 'user@example.com']);

        // Injection du spy dans le NotificationService
        $notificationService = new NotificationService($emailServiceSpy,$dataStorageSpy);

        // Appel de la méthode à tester
        $result = $notificationService->notifyUser(1, "Message de notification");

        // Vérification des résultats
        $this->assertTrue($result);
    }
    
    public function testNotifyUserWithNullUser() {
        // Création d'un spy pour l'objet EmailService
        $emailServiceSpy = $this->getMockBuilder(EmailService::class)
                                ->onlyMethods(['sendEmail'])
                                ->getMock();
    
        // Création d'un spy pour l'objet DataStorage
        $dataStorageSpy = $this->getMockBuilder(DataStorage::class)
                                ->onlyMethods(['getUserById'])
                                ->getMock();
        // Définir le comportement du spy pour retourner null (utilisateur non trouvé)
        $dataStorageSpy->expects($this->once())
                        ->method('getUserById')
                        ->with(2) // ID d'utilisateur différent pour ce test
                        ->willReturn(null);
    
        // Injection des spys dans le NotificationService
        $notificationService = new NotificationService($emailServiceSpy, $dataStorageSpy);
    
        // Appel de la méthode à tester et vérification de l'exemption
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('User not found');
    
        // Appel de la méthode à tester
        $notificationService->notifyUser(2, "Message de notification");
    } 
    
    
}