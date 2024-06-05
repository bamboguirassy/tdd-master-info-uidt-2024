<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use src\PaymentProcessor;

class PaymentProcessorTest extends TestCase {
    public function testProcessPayment() {
        // Création d'un fake pour le PaymentGateway
        $paymentGatewayFake = new PaymentGatewayFake();

        // Injection du fake dans le PaymentProcessor
        $paymentProcessor = new PaymentProcessor($paymentGatewayFake);

        // Appel de la méthode à tester
        $result = $paymentProcessor->processPayment(100);

        // Vérification des résultats
        $this->assertTrue($result);
    }
}