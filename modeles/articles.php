<?php
include_once('config/bdd.php');

class modeleArticle {

    function __construct() {
        $this->bdd = new BDD();
    }

    public function articlesParIdUtilisateur($id_utilisateur) {

        $connexion = $this->bdd->connexion();

        $articles = $connexion->query("SELECT * FROM articles WHERE id_utilisateur = $id_utilisateur");

        return $articles;
    }

    public function publierArticle($id_utilisateur, $titre, $contenu) {

        $connexion = $this->bdd->connexion();

        $connexion->query("INSERT INTO articles (id_utilisateur, titre, contenu) VALUES ($id_utilisateur,'$titre','$contenu')");
    }

    public function articleParId($id) {

        $connexion = $this->bdd->connexion();

        $articles = $connexion->query("SELECT * FROM articles WHERE id = $id");

        return $articles;
    }

    function articles() {

        $connexion = $this->bdd->connexion();

        $articles = $connexion->query("SELECT * FROM articles ORDER BY id DESC");

        return $articles;
    }

    function articlesRecents() {

        $connexion = $this->bdd->connexion();

        $articles = $connexion->query("SELECT * FROM articles ORDER BY id DESC LIMIT 0,3");

        return $articles;
    }
}