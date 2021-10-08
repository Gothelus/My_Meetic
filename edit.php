<!DOCTYPE html>
<html>

<head>
    <title>My Meetic</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<?php include('./php/edits.php'); ?>
<header>
    <nav class="navbar navbar-expand-lg">
        <h1 class="navbar-brand" id="md"> My Meetic</h1>
        <a class="navbar-brand" href="accueil.php" id="black">Acceuil</a>
        <a class="nav-link" href="./profil.php" id="black">Profil</a>
        <a class="nav-link" href="./php/deconection.php" id="black">Deconnexion ?</a>
        </div>
        <div class="navbar-brand" id="logo">
            <img class="img-fluid" src="img/hearts.png">:
        </div>
    </nav>
</header>
<form method="$_POST" id="modify">
    <?php
    if (isset($error)) {
        echo '<font color="red">' . $error . "</font>";
    }
    ?>
    <p>Nom :<input type="text" method="GET" name="modify1"></p>
    <p>Prénom : <input type="text" method="GET" name="modify2"></p>
    <p>Utilisateurs : <input type="text" method="GET" name="modify3"></p>
    <p>Mots de passe : <input type="password" method="GET" name="modify4"></p>
    <p>Date de naissance : <input type="date" method="GET" name="modify5"></p>
    <p>Email : <input type="email" method="GET" name="modify6"></p>
    <p>Ville : <input type="text" method="GET" name="modify7"></p>
    <p>Loisir : <input type="text" method="GET" name="modify8"></p>
    <p>Sexe : <input type="text" method="GET" name="modify9"></p>
    <button type="submit" class="btn btn-info" id="butt2">Valider</button>
</form>

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