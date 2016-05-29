<?php
//include bdd
include('include/bdd/bdd.php');
//include head
include('include/structure/head.php');
//include navigation
include('include/structure/navigation.php');
?>


<h2>Galaxy Swiss Bourdin vidéo vous souhaite la bienvenue</h2>
<section class="video">
    <video width="600" height="300" controls="controls">
        <source src="web/doc/materiel-medical-drap-dexamen.mp4" type="video/mp4" />
        <source src="web/doc/materiel-medical-drap-dexamen.mp4" type="video/webm" />
        <source src="web/doc/materiel-medical-drap-dexamen.mp4" type="video/ogg" />
    </video>
</section>


<!--FOOTER-->
<?php
include('include/structure/footer.php');
