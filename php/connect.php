<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=meetic;charset=utf8', 'gothelus', '231098');

if (isset($_POST['connects'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = sha1($_POST['password']);
    if (!empty($email) and !empty($password)) {
        $requser = $bdd->prepare('SELECT * FROM client WHERE mail = ? AND mdp = ?');
        $requser->execute(array($email, $password));
        $userexist = $requser->rowCount();
        if ($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id_client'] = $userinfo['id_client'];
            $_SESSION['utilisateur'] = $userinfo['utilisateur'];
            $_SESSION['mail'] = $userinfo['mail'];

            header("Location: profil.php?id=" . $_SESSION['id_client']);
        } else {
            $erreur = "Mauvail mail ou mots de passe";
        }
    } else {
        $erreur = "Tous les champs doit êtres complétés !";
    }
}