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
            <h2>Inscription</h2>
            <form method="POST">
                <input type="email" name="email" placeholder="Votre email">
                <input type="password" name="mdp" placeholder="Votre mot de passe">
                <input type="text" name="prenom" placeholder="Votre prénom">
                <input type="text" name="nom" placeholder="Votre nom">

                <input type="submit" name="inscription" value="S'inscrire">
            </form>
        </main>
        <footer>

        </footer>
    </body>
</html>