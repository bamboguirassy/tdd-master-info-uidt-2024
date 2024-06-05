<?php
// src/User.php
namespace src;

class User
{
    private $loggedIn = false;

    public function visitLoginPage()
    {
        // Méthode hypothétique pour accéder à la page de connexion
        echo "L'utilisateur accède à la page de connexion.\n";
    }

    public function login($username, $password)
    {
        // Méthode hypothétique pour se connecter avec des identifiants
        echo "L'utilisateur entre les identifiants : $username / $password.\n";
        // Supposons que la connexion réussit
        $this->loggedIn = true;
    }

    public function isLoggedIn()
    {
        if($this->loggedIn) {
            echo "L'utilisateur est connecté.\n";
        } else {
            echo "L'utilisateur n'est pas connecté.\n";
        }
        // Méthode hypothétique pour vérifier si l'utilisateur est connecté
        return $this->loggedIn;
    }
}