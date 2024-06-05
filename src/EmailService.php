<?php

namespace src;

class EmailService
{
    public function sendEmail($to, $subject, $body)
    {
        // verifier que l'adresse email est valide
        if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Invalid email address');
        }
        // verifier que le sujet et le corps du message ne sont pas vides
        if (empty($subject) || empty($body)) {
            throw new \InvalidArgumentException('Subject and body of the message cannot be empty');
        }
        // envoyer l'email
        $result = mail($to, $subject, $body);
        if (!$result) {
            throw new \RuntimeException('Error sending email');
        }
        return $result;
    }
}
