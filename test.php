<?php
$bdd = new PDO('mysql:host=localhost;dbname=meetic;charset=utf8', 'gothelus', '231098');

if (isset($_POST['inscription'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $utilisateur = htmlspecialchars($_POST['utilisateur']);
    $mdp = sha1($_POST['mdp']);
    $date = htmlspecialchars($_POST['date']);
    $mail = htmlspecialchars($_POST['mail']);
    $ville = htmlspecialchars($_POST['ville']);
    foreach ($_POST['loisir'] as $loisir);
    foreach ($_POST['sexe'] as $sexe);
    $naiss = new DateTime($date);
    $today = new DateTime(date('Y-m-d'));
    $age = $naiss->diff($today);
    if (empty($_POST['nom'])) {
        $error1 = 'Nom est requis';
    } else if (empty($_POST['prenom'])) {
        $error2 = 'Prénom est requis';
    } else if (empty($_POST['utilisateur'])) {
        $error3 = 'L"utilisateur est requis';
    } else if (empty($_POST['mdp'])) {
        $error4 = 'Un mots de passe  est requis';
    } else if (empty($_POST['date'])) {
        $error5 = 'Une date est requis';
    } elseif ($age->format('%y') >= 18) {
        $error10 = "Vous n'avez pas 18 ans";
    } else if (empty($_POST['mail'])) {
        $error6 = 'Un mail est requis';
    } else if (empty($_POST['ville'])) {
        $error7 = 'Une ville est requis';
    } else if (empty($_POST['loisir'])) {
        $error8 = 'Minimun 1 loisir est requis';
    } else if (empty($_POST['sexe'])) {
        $error9 = 'Un sexe est requis';
    }
    if (!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['utilisateur']) and !empty($_POST['mdp']) and !empty($_POST['date']) and !empty($_POST['mail']) and !empty($_POST['ville']) and !empty($_POST['loisir']) and !empty($_POST['sexe'])) {
        $client =  $bdd->query('INSERT INTO client(id_loisir,nom,prenom,utilisateur,mdp,date_naissance,ville,mail,genre) VALUES (LAST_INSERT_ID(),"' . $nom . '","' . $prenom . '","' . $utilisateur . '","' . $mdp . '","' . $date . '","' . $ville . '","' . $mail . '","' . $sexe . '")');
        $loisirs = $bdd->query('INSERT INTO loisir(id_client,nom) VALUES (LAST_INSERT_ID(),"' . $loisir . '")');
    }
}