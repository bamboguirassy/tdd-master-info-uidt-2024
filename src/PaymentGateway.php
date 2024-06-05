<?php

namespace src;

class PaymentGateway {
    public function processPayment($amount) {
        // verifier que le montant est valide
        if (!is_numeric($amount) || $amount <= 0) {
            throw new \InvalidArgumentException('Invalid amount');
        }
        // definir le gateway de paiement
        $gateway = 'paypal';
        // effectuer le paiement
       $result = $this->processPaymentWithGateway($amount, $gateway);

        return $result;
    }


    public function processPaymentWithGateway($amount, $gateway) {
        // Logique de traitement de paiement en utilisant une passerelle de paiement spécifique
        
        // verifier que le montant est valide
        if (!is_numeric($amount) || $amount <= 0) {
            throw new \InvalidArgumentException('Invalid amount');
        }
        // verifier que la passerelle de paiement est valide
        if (!in_array($gateway, ['paypal', 'stripe', 'authorize.net'])) {
            throw new \InvalidArgumentException('Invalid payment gateway');
        }
        // effectuer le paiement

        return true;
    }
}