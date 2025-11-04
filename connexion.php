<?php include('entete.php'); ?>

<section>
<?php
    if (!empty($_REQUEST['Identifiant'])) {
        $identifiant = $_REQUEST['Identifiant'];
        echo "<h2>Bonjour $identifiant !</h2>";
    } else {
        echo "<p>Vous n'avez rien entré !</p>";
    }
?>
</section>

<?php include('pieddepage.php'); ?>