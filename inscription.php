<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="./script/inscript.js"></script>
</head>

<body>
    <?php include('./php/inscrip.php'); ?>
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
                                <a href="connexion.php" id="md">Connexion</a>
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
    <section>
        <div class="container">
            <h2 class="mb-3">Formulaire Inscription :</h2>
            <form class="needs-validation" method="POST" action="">
                <div class="row">
                    <div class="col-md-6 mb-3" id="g-nom">
                        <label for="nom"> Nom :</label>
                        <span>*</span> <br>
                        <input type="text" class="form-controle" placeholder="Vincent" id="nom" name="nom">
                        <?php
                        if (isset($error1)) {
                            echo '<font color="red">' . $error1 . "</font>";
                        }
                        ?>
                    </div>
                    <div class="col-md-6 mb-3" id="g-prenom">
                        <label for="prenom"> Prenom :</label>
                        <span>*</span> <br>
                        <input type="text" placeholder="Jean" id="prenom" name="prenom">
                        <?php
                        if (isset($error2)) {
                            echo '<font color="red">' . $error2 . "</font>";
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3" id="g-utili">
                        <label for="utilisateur"> Non Utilisateur :</label>
                        <span>*</span> <br>
                        <input type="text" class="form-controle" placeholder="xJeankevineDu96x" id="utilisateur"
                            name="utilisateur">
                        <?php
                        if (isset($error3)) {
                            echo '<font color="red">' . $error3 . "</font>";
                        }
                        ?>
                    </div>
                    <div class="col-md-6 mb-3" id="g-mpd">
                        <label for="mdp"> Mots de passe :</label>
                        <span>*</span> <br>
                        <input type="password" id="mdp" name="mdp">
                        <?php
                        if (isset($error4)) {
                            echo '<font color="red">' . $error4 . "</font>";
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3" id="g-date">
                        <label for="date"> Date de naissance :</label>
                        <span>*</span> <br>
                        <input type="date" class="form-controle" placeholder="Vincent" id="date" name="date">
                        <?php
                        if (isset($error5)) {
                            echo '<font color="red">' . $error5 . "</font>";
                        }
                        ?>
                        <?php
                        if (isset($error10)) {
                            echo '<font color="red">' . $error10 . "</font>";
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3" id="g-mail">
                        <label for="mail"> Adresse Mail :</label>
                        <span>*</span> <br>
                        <input type="mail" class="form-controle" placeholder="hortense.vallee@readb.site" id="mail"
                            name="mail">
                        <?php
                        if (isset($error6)) {
                            echo '<font color="red">' . $error6 . "</font>";
                        }
                        ?>
                    </div>
                    <div class="col-md-6 mb-3" id="g-ville">
                        <label for="ville"> Ville :</label>
                        <span>*</span> <br>
                        <input type="text" placeholder="Paris" id="ville" name="ville">
                        <?php
                        if (isset($error7)) {
                            echo '<font color="red">' . $error7 . "</font>";
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3" id="g-loisir">
                        <div>
                            <label>Loisir :</label>
                            <span>*</span><br>
                        </div>
                        <div>
                            <input type="checkbox" name="loisir[]" value="manga">
                            <label>Manga</label>
                        </div>
                        <div>
                            <input type="checkbox" name="loisir[]" value="voyage">
                            <label>Voyage</label>
                        </div>
                        <div>
                            <input type="checkbox" name="loisir[]" value="jeux_video">
                            <label>Jeux vidéo</label>
                        </div>
                        <div>
                            <input type="checkbox" name="loisir[]" value="film">
                            <label>Film</label>
                        </div>
                        <div>
                            <input type="checkbox" name="loisir[]" value="cuisine">
                            <label>Cuisine</label>
                        </div>
                        <div>
                            <input type="checkbox" name="loisir[]" value="sport">
                            <label>Sport</label>
                        </div>
                        <?php
                        if (isset($error8)) {
                            echo '<font color="red">' . $error8 . "</font>";
                        }
                        ?>
                    </div>
                    <div class="col-md-6 mb-3" id="g-sexe">
                        <div>
                            <label>Sexe :</label>
                            <span>*</span><br>
                        </div>
                        <div>
                            <input type="checkbox" name="sexe[]" value="homme">
                            <label>Homme</label>
                        </div>
                        <div>
                            <input type="checkbox" name="sexe[]" value="femme">
                            <label>Femme</label>
                        </div>
                        <div>
                            <input type="checkbox" name="sexe[]" value="autre">
                            <label>Autre</label>
                        </div>
                        <?php
                        if (isset($error9)) {
                            echo '<font color="red">' . $error9 . "</font>";
                        }
                        ?>
                    </div>
                    <input type="submit" class="btn btn-success btn-lg" name="inscription" value="Valider">
                </div>
            </form>
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

    </footer>
</body>

</html>