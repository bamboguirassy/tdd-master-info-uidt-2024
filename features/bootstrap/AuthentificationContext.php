<?php

use Behat\Behat\Context\Context;
use src\User;

class AuthentificationContext implements Context
{
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    /**
     * @Given l'utilisateur est sur la page de connexion
     */
    public function lUtilisateurEstSurLaPageDeConnexion()
    {
        $this->user->visitLoginPage();
    }

    /**
     * @When l'utilisateur entre des identifiants valides
     */
    public function lUtilisateurEntreDesIdentifiantsValides()
    {
        $this->user->login('nom_utilisateur', 'mot_de_passe');
    }

    /**
     * @Then l'utilisateur est connecté avec succès
     */
    public function lUtilisateurEstConnecteAvecSucces()
    {
        if (!$this->user->isLoggedIn()) {
            throw new \Exception("L'utilisateur n'est pas connecté avec succès.");
        }
    }
}