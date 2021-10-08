<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=meetic;charset=utf8', 'gothelus', '231098');

if (isset($_POST['account'])) {
    $ville = htmlspecialchars($_POST['ville']);
    if (!empty($_POST['loisir'])) {
        $loisir = $_POST['loisir'];
    }
    if (!empty($_POST['genre'])) {
        $genre = $_POST['genre'];
    }
    $reponse = $bdd->query('SELECT nom,prenom,date_naissance,loisir,genre,ville FROM client WHERE ville="' . $ville . '" AND loisir="' . $loisir . '" AND genre="' . $genre . '"');
}