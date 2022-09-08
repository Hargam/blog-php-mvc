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
            <h2>Connexion</h2>

            <?php
            if(!isset($_COOKIE['prenom'])) {
                ?>
            <form method="POST">
                <input type="email" name="email" placeholder="Votre email">
                <input type="password" name="mdp" placeholder="Votre mot de passe">

                <input type="submit" name="connexion" value="Se connecter">
            </form>

            <?php
            }
            else {

                echo "Bonjour " . $_COOKIE['prenom'] . "";
            }
            ?>
        </main>
    </body>
</html>