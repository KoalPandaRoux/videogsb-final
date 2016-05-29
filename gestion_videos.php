<?php
//include bdd
include('include/bdd/bdd.php');


//include head
include('include/structure/head.php');
//include navigation
include('include/structure/navigation.php');
include('gestion/utilisateur/control_sessions.php');
if (controlAdmin(	$_SESSION['type_utilisateur']) == TRUE)
{}
else{header('Location: error/404.php');}

?>

<h2>Panel admin gestion des vidéos</h2>

<div class="container lien-gestion">
    <a class="color-link-g" href="gestion_utilisateurs.php">Gestion des Utilisateurs</a><br>
    <a class="color-link-g" href="gestion_videos.php">Gestion des Vidéos</a>
</div>

<?php

/*
 * Liste des vidéos par id_utilisateur, id_type_utilisateur, login, nom, prenom, email, date_de_naissance
 */
$reponse = $bdd->query('SELECT * FROM video');
while ($donnees = $reponse->fetch())
{
    ?>
    <p>
        <strong>L'id vidéo est</strong> : <?php echo $donnees['id_video'];?><br />
        <strong>L'id genre est</strong> : <?php echo $donnees['id_genre']; ?><br />
        <strong>L'id utilisateur est</strong> : <?php echo $_SESSION['id_utilisateur']; ?><br />
        <strong>Le titre est</strong> : <?php echo $donnees['titre'];?><br />
        <strong>La description est</strong> : <?php echo $donnees['description'];?><br />
        <strong>La vidéo est</strong> : <?php echo $donnees['video'];?><br />
        <strong>La date d'upload est</strong> : <?php echo $donnees['date'];?><br />
        <a href="gestion/video/update_video.php?m=edit&id=<?php echo $donnees['id_video']; ?>">Edit</a> |
        <a href="gestion/video/delete_video.php?id=<?php echo $donnees['id_video']; ?>">Supprimer</a>
    </p>
    <?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>



<!--FOOTER-->
<?php include('include/structure/footer.php');
