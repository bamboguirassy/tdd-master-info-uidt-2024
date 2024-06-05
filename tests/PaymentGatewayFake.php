<?php

namespace Tests;

use src\PaymentGateway;

class PaymentGatewayFake extends PaymentGateway {
    public function processPayment($amount) {
        // Simulation d'un traitement de paiement réussi
        return false;
    }
}