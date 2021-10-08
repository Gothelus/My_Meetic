<!DOCTYPE html>
<html>

<head>
    <title>My Meetic</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container-fluid bidule">
            <nav class="navbar navbar-expand-lg">
                <div class=" container-fluid">
                    <h1 class="navbar-brand" id="md"> My Meetic</h1>
                    <a class="navbar-brand" href="accueil.php" id="black">Acceuil</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <div class="dropdown">
                            <button class="dropbtn" id="md">Déjà Membre ?</button>
                            <div class="dropdown-content">
                                <a href="connexion.php" id="md">Connexion</a>
                                <a href="inscription.php" id="md">Inscription</a>
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
    <section class="back">
        <h2 class="slog">Meetic France <br>
            Le site de rencontre <br>
            pour trouver le bohneur</h2>
    </section>
    <hr>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-2 ">
                    <div class="p-5">
                        <img class="img-fluid rounded" src="icone/approved-icon-png-11.jpg" id="img" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-3">
                        <h2 class="display-6 text-center">Profil Vérifier</h2>
                        <p class="text-center">
                            Tous nos utilisateurs sont des profils vérifier : c'est-à-dire que ça prouve
                            l'authenticité de nos utilisateurs.
                            <br>
                            <br>
                            Ils sont vérifiés manuellement par notre équipe.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-lg-1 ">
                    <div class="p-5">
                        <img class="img-fluid rounded" src="icone/candle.png" id="img" alt="">
                    </div>
                </div>
                <div class="col-lg-5 order-lg-1">
                    <div class="p-3">
                        <h2 class="display-6 text-center">Soirées</h2>
                        <p class="text-center">
                            Grâce a Meetic,
                            <br>
                            <br>
                            Vous ne tiendrez plus la chandelle ( ͡° ͜ʖ ͡°)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <footer class="container px-3 py-3">
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
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="./script/script.js"></script>
    </footer>
</body>

</html>