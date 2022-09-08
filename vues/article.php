<!DOCTYPE html>
<html>
    <head>

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

            <?php
            foreach($articleParId as $article) {

                echo "<h2>" . $article['titre'] . "</h2>
                <p>" . $article['contenu'] . "</p>";
            }
            ?>

        </main>
        <footer>

        </footer>
    </body>
</html>