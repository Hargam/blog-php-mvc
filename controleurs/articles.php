<?php
include_once('modeles/articles.php');

class controleurArticle {

    function __construct() {
        $this->modeleArticle = new modeleArticle();
    }

    function articlesParIdUtilisateur($id_utilisateur) {

        $articles = $this->modeleArticle->articlesParIdUtilisateur($id_utilisateur);

        return $articles;
    }

    function publierArticle() {

        $id_utilisateur = $_POST['id_utilisateur'];
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];

        $this->modeleArticle->publierArticle($id_utilisateur, $titre, $contenu);
    }

    function articleParId($id) {

        $articles = $this->modeleArticle->articleParId($id);

        return $articles;
    }

    function articles() {

        $articles = $this->modeleArticle->articles();

        return $articles;
    }

    function articlesRecents() {

        $articles = $this->modeleArticle->articlesRecents();

        return $articles;
    }
}