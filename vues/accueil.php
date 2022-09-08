<!DOCTYPE html>
<html>
    <head>
        <link href="public/css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>PHP Projet - exo 1</h1>
            <nav>
                <ul>
                    <li>
                        <a href="?page=inscription">Inscription</a>
                    </li>
                    <li>
                        <a href="?page=connexion">Connexion</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>

            <section id="utilisateurs-recents">
                <div>
                    <h2>Les derniers utilisateurs inscrits</h2>

                    <ul>
                    <?php
                    foreach($utilisateursRecents as $utilisateur) {

                        echo "<li>
                            <article>
                                <a href='?page=profil&id=" . $utilisateur['id'] . "'>
                                    <div class='cadre'>
                                        <img src='" . $utilisateur['photo_profil']. "'>
                                    </div>
                                    <h3>" . $utilisateur['prenom']. " " . $utilisateur['nom'] . "</h3>
                                </a>
                            </article>
                        </li>";
                    }
                    ?>
                    </ul>
                </div>
            </section>

            <section id="articles">
                <div>
                    <h2>Les articles</h2>
                    <ul>

                        <?php
                        foreach($articles as $article) {

                            echo "<li>
                                <article>
                                    <img src='" . $article['image'] . "'>
                                    <div>
                                        <h3>" . $article['titre'] . "</h3>
                                        <a href='?page=article&id=" . $article['id'] . "'>Lire l'article</a>
                                    </div>    
                                </article>
                            </li>";
                        }
                        ?>

                    </ul>
                </div>
            </section>

            <section id="articles-recents">
                <div>
                    <h2>Les derniers articles</h2>

                    <ul>
                        <?php
                        foreach($articlesRecents as $article) {

                            echo "<li>
                                <h3>" . $article['titre'] . "</h3>
                                <a href='?page=article&id=" . $article['id'] . "'>Lire l'article</a>
                            </li>";
                        }
                        ?>
                    </ul>
                </div>
            </section>
            
        </main>
        <footer>

        </footer>
    </body>
</html>