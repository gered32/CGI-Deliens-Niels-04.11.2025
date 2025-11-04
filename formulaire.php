<?php include('entete.php'); ?>

<section>
    <form action="#" method="post">
        <label for="id">Identifiant :</label>
        <input type="text" name="Identifiant" id="id">
        <input type="submit" value="Envoyer">
    </form>

<?php
    if (!empty($_REQUEST['Identifiant'])) {
        $_SESSION['login'] = $_REQUEST['Identifiant'];
        echo "<p>Bonjour " . $_SESSION['login'] . " !</p>";
    }
?>
</section>

<?php include('pieddepage.php'); ?>