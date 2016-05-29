<?php

include('../../include/class/Utilisateur.class.php');
include('../../include/manager/UtilisateurManager.class.php');
include('../../include/bdd/bdd.php');



$UtilisateurManager = new UtilisateurManager($bdd);
//création d'un objet Utilisateur avec les valeurs de ses attributs complétées par celles reçues par $_POST
$utilisateur = new Utilisateur();
$utilisateur->setLogin(htmlentities(addslashes($_POST['login'])));
$utilisateur->setPrenom(htmlentities(addslashes($_POST['prenom'])));
$pass_hache = sha1($_POST['password']);
$utilisateur->setNom(htmlentities(addslashes($_POST['nom'])));
$utilisateur->setPassword(htmlentities(addslashes(sha1($_POST['password']))));
$utilisateur->setEmail(htmlentities(addslashes($_POST['email'])));
$utilisateur->setDateNaissance($_POST['date_de_naissance']);
$identifiant = $UtilisateurManager->ajoutUtilisateur($utilisateur);

if ($identifiant != null) {
    echo '<p>Vous êtes inscrit! Vous allez être redirigé dans quelques secondes...</p>';
    $timeConnect = 3;
    $urlConnect = 'url=http://localhost/videogsb/login.php';
    //error
    header("Refresh:$timeConnect; $urlConnect");
} else {
    echo "<br />Vous n'avez pas pas pu être ajouté.<br /> Vous allez être redirigé dans quelques secondes...";
    $timeConnect = 3;
    $urlConnect = 'url=http://localhost/videogsb/login.php';
    //error
    header("Refresh:$timeConnect; $urlConnect");
}


