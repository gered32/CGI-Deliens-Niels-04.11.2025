<?php include('entete.php'); ?>

<section>
    <h2>Connexion</h2>
    <form action="connexion.php" method="post">
        <label for="id">Identifiant :</label>
        <input type="text" name="Identifiant" id="id">

        <label for="mdp">Mot de passe :</label>
        <input type="password" name="MDP" id="mdp">

        <input type="submit" value="Envoyer">
    </form>
</section>

<?php include('pieddepage.php'); ?>