<?php

namespace src;

class PaymentProcessor {
    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway) {
        $this->paymentGateway = $paymentGateway;
    }

    public function processPayment($amount) {
        return $this->paymentGateway->processPayment($amount);
    }
}