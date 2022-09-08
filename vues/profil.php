<!DOCTYPE html>
<html>
    <head>

    </head>

    <?php
    foreach($utilisateurParId as $utilisateur) {
    ?>

    <body style="background: <?php echo $utilisateur['couleur_page']; ?>">
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
            if($utilisateur['email'] == $_COOKIE['email']) {

                echo "
                <form method='POST'>
                    <input type='text' name='couleur_page' placeholder='Couleur page'>
                    <input type='hidden' name='id' value='" . $utilisateur['id'] . "'>
                    <input type='submit' name='modifier-couleur-page' value='Modifier la couleur de la page de profil'>
                </form>
                <br>";
            }

            echo "
            <img src='" . $utilisateur['photo_profil']. "' style='width: 200px;height:200px;border-radius: 50%;overflow:hidden;border:2px solid #000000;background: #FFF'>
            ";

            if($utilisateur['email'] == $_COOKIE['email']) {
                
                echo "
                <form method='POST'>
                    <input type='text' name='photo_profil' placeholder='Votre photo de profil'>
                    <input type='hidden' name='id' value='" . $utilisateur['id'] . "'>
                    <input type='submit' name='modifier-photo-profil' value='Modifier la photo de profil'>
                </form>
                <br>";
            }


            echo "<h3>" . $utilisateur['prenom'] . " " . $utilisateur['nom'] . "</h3><br>
            Email: " . $utilisateur['email'];

            if($utilisateur['email'] == $_COOKIE['email']) {

                echo "<form method='POST'>
                    <input type='submit' name='deconnexion' value='Se déconnecter'>
                </form>";
            }


            if($utilisateur['email'] == $_COOKIE['email']) {

                echo "
                <h2>Publier un article</h2>
                <form method='POST'>
                    <input type='text' name='titre' placeholder='Titre'>
                    <textarea name='contenu'></textarea>
                    <input type='hidden' name='id_utilisateur' value='" . $utilisateur['id'] . "'>
                    <input type='submit' name='publier-article' value='Publier'>
                </form>";
            }

            echo "<h2>Articles publiés par cet utilisateur</h2>";
            echo "<ul>";
            foreach($articlesParIdUtilisateur as $article) {

                echo "<li>
                    <h3>" . $article['titre'] . "</h3>
                    <a href='?page=article&id=" . $article['id'] . "'>Lire l'article</a>
                </li>";
            }
            echo "</ul>";
            ?>

        </main>
        <footer>

        </footer>
    </body>

    <?php
    }
    ?>
</html>