<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=meetic;charset=utf8', 'gothelus', '231098');

function cherche($abo)
{
    if (isset($_GET[$abo])) {
        $pff = $_GET[$abo];
    } else {
        $pff = "";
    }
    return $pff;
}
if (empty(cherche('modify'))) {
    $error1 = 'Veuiller remplir les cases.';
} else {
    $updateclient = $bdd->query('UPDATE client SET
                            nom="' . cherche('modify1') . '",
                            prenom="' . cherche('modify2') . '",
                            utilisateur="' . cherche('modify3') . '",
                            mdp=SHA1(' . cherche('modify4') . '),
                            date="' . cherche('modify5') . '",
                            date_naissance="' . cherche('modify6') . '",
                            ville="' . cherche('modify7') . '",
                            loisir="' . cherche('modify8') . '",
                            genre="' . cherche('modify9') . '"
                            WHERE 
                            nom="' . cherche('modify1') . '"OR
                            prenom="' . cherche('modify2') . '"OR
                            utilisateur="' . cherche('modify3') . '"OR
                            mdp=SHA1(' . cherche('modify4') . ')OR
                            date="' . cherche('modify5') . '"OR
                            date_naissance="' . cherche('modify6') . '"OR
                            ville="' . cherche('modify7') . '"OR
                            loisir="' . cherche('modify8') . '"OR
                            genre="' . cherche('modify9') . '"');
}