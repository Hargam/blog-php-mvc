<?php
include_once('config/bdd.php');

class modeleUtilisateur {

    function __construct() {
        $this->bdd = new BDD();
    }

    function inscription($email, $mdp, $prenom, $nom) {

        $connexion = $this->bdd->connexion();

        $connexion->query("INSERT INTO utilisateurs (email, mdp, prenom, nom, photo_profil, couleur_page) VALUES ('$email','$mdp','$prenom','$nom', '', '')");
    }

    function connexion($email, $mdp) {

        $connexion = $this->bdd->connexion();

        $utilisateurs = $connexion->query("SELECT * FROM utilisateurs WHERE email = '$email' AND mdp = '$mdp'");
    
        return $utilisateurs;
    }

    function utilisateurs() {

        $connexion = $this->bdd->connexion();

        $utilisateurs = $connexion->query("SELECT * FROM utilisateurs");

        return $utilisateurs;
    }

    function utilisateurParId($id) {

        $connexion = $this->bdd->connexion();

        $utilisateurParId = $connexion->query("SELECT * FROM utilisateurs WHERE id = $id");

        return $utilisateurParId;
    }

    function modifierUtilisateurPhotoProfil($photo_profil, $id) {

        $connexion = $this->bdd->connexion();

        $connexion->query("UPDATE utilisateurs SET photo_profil = '$photo_profil' WHERE id = $id");
    }

    function modifierUtilisateurCouleurPage($couleur_page, $id) {

        $connexion = $this->bdd->connexion();

        $connexion->query("UPDATE utilisateurs SET couleur_page = '$couleur_page' WHERE id = $id");
    }

    function utilisateursRecents() {

        $connexion = $this->bdd->connexion();

        $utilisateurs = $connexion->query("SELECT * FROM utilisateurs ORDER BY id DESC LIMIT 0,4");

        return $utilisateurs;
    }
}