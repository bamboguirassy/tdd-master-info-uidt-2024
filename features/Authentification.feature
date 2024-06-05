Feature: Authentification
  Scenario: Utilisateur se connecte avec des identifiants valides
    Given l'utilisateur est sur la page de connexion
    When l'utilisateur entre des identifiants valides
    Then l'utilisateur est connecté avec succès