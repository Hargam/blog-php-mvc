<?php
include_once('modeles/utilisateurs.php');

class controleurUtilisateur {

    function __construct() {
        $this->modeleUtilisateur = new modeleUtilisateur();
    }

    function inscription() {

        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];

        $this->modeleUtilisateur->inscription($email, $mdp, $prenom, $nom);
    }

    function connexion() {

        $email = $_POST['email'];
        $mdp = $_POST['mdp'];

        $utilisateurs = $this->modeleUtilisateur->connexion($email, $mdp);
    
        if($utilisateurs->rowCount() == 1) {

            foreach($utilisateurs as $utilisateur) {

                setcookie('email', $utilisateur['email']);
                setcookie('prenom', $utilisateur['prenom']);

                echo "Bonjour " . $utilisateur['prenom'];
            }
        }
        else {

            echo "L'email ou le mot de passe est incorrect :(";
        }
    }

    function deconnexion() {

        // On supprime les cookies en mémoire
        unset($_COOKIE['email']);
        unset($_COOKIE['prenom']);

        // On remplace les cookies avec des valeurs vides
        // On renseigne une date passée pour expiré le cookie
        setcookie('email', '', time() - 3600);
        setcookie('prenom', '', time() - 3600);
    }

    function utilisateurs() {

        $utilisateurs = $this->modeleUtilisateur->utilisateurs();

        return $utilisateurs;
    }

    function utilisateurParId($id) {

        $utilisateurParId = $this->modeleUtilisateur->utilisateurParId($id);

        return $utilisateurParId;
    }

    function modifierUtilisateurPhotoProfil() {

        $photo_profil = $_POST['photo_profil'];
        $id = $_POST['id'];

        $this->modeleUtilisateur->modifierUtilisateurPhotoProfil($photo_profil, $id);
    }

    function modifierUtilisateurCouleurPage() {

        $couleur_page = $_POST['couleur_page'];
        $id = $_POST['id'];

        $this->modeleUtilisateur->modifierUtilisateurCouleurPage($couleur_page, $id);

        setcookie('couleur_page', $couleur_page);
    }

    function utilisateursRecents() {

        $utilisateurs = $this->modeleUtilisateur->utilisateursRecents();

        return $utilisateurs;
    }
}