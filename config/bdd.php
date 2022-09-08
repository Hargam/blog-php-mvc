<?php
class BDD
{

    private $adresseBdd = "localhost:3306";
    private $utilisateurBdd = "root";
    private $mdpBdd = "root";
    private $nomBdd = "";

    function __construct()
    {
    }

    public function connexion()
    {

        try {

            $connexion = new PDO("mysql:host=" . $this->adresseBdd . ";dbname=" . $this->nomBdd . ";charset=utf8", $this->utilisateurBdd, $this->mdpBdd);
        } catch (PDOException $erreur) {

            echo "Erreur: " . $erreur->getMessage();
        }

        return $connexion;
    }
}
