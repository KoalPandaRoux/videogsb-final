<?php
//include bdd
include('include/bdd/bdd.php');
//include head
include('include/structure/head.php');
//include navigation
include('include/structure/navigation.php');
?>


<form class="form" action="gestion/utilisateur/post_login.php" method="POST">

    <h2>Formulaire de connexion</h2>

    <input type="text" placeholder="Login" maxlength="30" name="login"/><br>

    <input type="password" placeholder="Password" maxlength="30" name="password"/><br>

    <button class="input-envoyer" type="submit" name="envoyer">Se Connecter</button> 
</form>
<?php
if ($_SESSION === ['login']) {
    echo $_SESSION['login'] . '<p>yo</p>';
}
?>
<!--FOOTER-->
<?php include('include/structure/footer.php');
