<html>

<head>
    <title>Connection</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style/style.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<?php include('./php/recherch.php'); ?>

<header>
    <nav class="navbar navbar-expand-lg">
        <h1 class="navbar-brand" id="md"> My Meetic</h1>
        <a class="navbar-brand" href="accueil.php" id="black">Acceuil</a>
        <a class="nav-link" href="./edit.php" id="black">Editer Mon profil</a>
        <a class="nav-link" href="./php/deconection.php" id="black">Deconnexion ?</a>
        </div>
        <div class="navbar-brand" id="logo">
            <img class="img-fluid" src="img/hearts.png">
        </div>
    </nav>
</header>
<section>
    <div class="addAMember">
        <form method="POST">
            <h3>Recherche</h3>
            <select name="genre" class="genre form-control membersadded" required>
                <option value="" disabled selected hidden>Sélectionner votre sexe</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
                <option value="autre">Autre</option>
            </select><br />
            <select name="loisir" class="loisir form-control membersadded" required>
                <option value="" disabled selected hidden>Sélectionner un loisir</option>
                <option value="manga">Mangas</option>
                <option value="voyage">Voyage</option>
                <option value="jeux video">Jeux vidéo</option>
                <option value="film">Film</option>
                <option value="cuisine">Cuisine</option>
                <option value="sport">Sport</option>
            </select><br />
            <br /><label for="ville">*Ville: </label>
            <input type="text" name="ville" id="ville" class="form-control membersadded" /><br>
            <div class="city_content_input"></div>
            <input type="submit" name="account" value="Send" class="btn addButMem" />
        </form>
        <?php if ($reponse->rowCount() > 0) { ?>
        <?php while ($a = $reponse->fetch()) { ?>
        <ul>
            <li class="film">Nom : <?php echo $a['nom'] ?></li>
            <li class="film">Prenom : <?php echo $a['prenom'] ?></li>
            <li class="film">Date de naissance : <?php echo $a['date_naissance'] ?></li>
            <li class="film">Loisir : <?php echo $a['loisir'] ?></li>
            <li class="film">Ville : <?php echo $a['ville'] ?></li>
        </ul>

        <?php } ?>
        <?php } else { ?>
        Aucun résultat pour: <?= $barre ?>...
        <?php } ?>
</section>
<footer class="container px-3 py-3" id="foots">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="./script/script.js"></script>
</footer>

</html>