<!DOCTYPE html>
<html>

<head>

    <head>
        <title>Connection</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./style/style.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
</head>
<?php include('./php/connect.php') ?>

<body>
    <header>
        <div class="container-fluid bidule">
            <nav class="navbar navbar-expand-lg">
                <div class=" container-fluid">
                    <h1 class="navbar-brand" id="md"> My Meetic</h1>
                    <a class="navbar-brand" href="accueil.php" id="black">Acceuil</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <div class="dropdown">
                            <button class="dropbtn" id="md">Déjà Membre ?</button>
                            <div class="dropdown-content">
                                <a href="connexion.php" id="md">Connexions</a>
                                <a href="inscription.php" id="md">inscription</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-brand" id="logo">
                    <img class="img-fluid" src="img/hearts.png">
                </div>
            </nav>
        </div>
    </header>
    <h2 class="connec">Connection :</h2>
    <section class="connect">
        <form action="" method="POST" class="email">
            <label for="POST">Adresse Mail : </label>
            <input type="text" name="email"><br>
            <label for="POST">Mots de passe :</label>
            <input type="password" name="password">
            <input type="submit" class="btn btn-outline-success" id="butt" name="connects" value="Connexion"></input>
        </form>
        <?php
        if (isset($erreur)) {
            echo '<font color="red">' . $erreur . "</font>";
        }
        ?>
    </section>
    <hr id="foot">
    <footer class="container px-3 py-3" id="foot">
        <div class="row">
            <div class="col-5 col-md">
                <h4> Plan du site </h4>
                <ul class="list-unstyled text-small">
                    <li class="nav-item">
                        <a class="text-muted" href="accueil.php">
                            Accueil
                        </a>
                    </li>

                    <li>
                        <a class="text-muted" href="connexion.php">
                            Connexion
                        </a>
                    </li>
                    <li>
                        <a class="text-muted" href="inscription.php">
                            Inscription
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-6 col-md">
                <h4>Nous contacter</h4>
                <ul class="list-unstyled text-small">
                    <li class="text-muted">
                        Téléphone : 04 66 66 66 66
                    </li>

                    <li class="text-muted">
                        Fax : 04 72 72 72 72
                    </li>

                    <li class="text-muted">
                        Adresse : My Meetic - je ne sais pas ou,OU 0000
                    </li>

                    <li>
                        <a href="#">
                            Formulaire de contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="./script/script.js"></script>
    </footer>
</body>

</html>