<?php
include_once('controleurs/utilisateurs.php');
include_once('controleurs/articles.php');

class routeur {

    function __construct() {
        $this->controleurUtilisateur = new controleurUtilisateur();
        $this->controleurArticle = new controleurArticle();
    }

    function routes() {

        $url = $_GET['page'];

        if($url == "connexion") {

            if(isset($_POST['connexion'])) {

                $this->controleurUtilisateur->connexion();
            }

            include_once('vues/connexion.php');
        }
        elseif($url == "inscription") {

            if(isset($_POST['inscription'])) {
                
                $this->controleurUtilisateur->inscription();
            }

            include_once('vues/inscription.php');
        }
        elseif($url == "profil") {

            if(isset($_POST['deconnexion'])) {

                $this->controleurUtilisateur->deconnexion();
            }

            if(isset($_POST['modifier-photo-profil'])) {

                $this->controleurUtilisateur->modifierUtilisateurPhotoProfil();
            }

            if(isset($_POST['modifier-couleur-page'])) {

                $this->controleurUtilisateur->modifierUtilisateurCouleurPage();
            }

            if(isset($_POST['publier-article'])) {

                $this->controleurArticle->publierArticle();
            }

            $articlesParIdUtilisateur = $this->controleurArticle->articlesParIdUtilisateur($_GET['id']);

            $utilisateurParId = $this->controleurUtilisateur->utilisateurParId($_GET['id']);
            
            include_once('vues/profil.php');
        }
        elseif($url == "article") {

            $articleParId = $this->controleurArticle->articleParId($_GET['id']);
        
            include_once('vues/article.php');
        }
        else {

            $utilisateursRecents = $this->controleurUtilisateur->utilisateursRecents();
            $articles = $this->controleurArticle->articles();
            $articlesRecents = $this->controleurArticle->articlesRecents();

            include_once('vues/accueil.php');
        }
    }
}