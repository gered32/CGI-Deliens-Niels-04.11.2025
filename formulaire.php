<?php include('entete.php'); ?>

<section>
    <?php
    // Si l'utilisateur est déjà connecté
    if (isset($_SESSION['login'])) {
        echo "<h2>Bonjour " . htmlspecialchars($_SESSION['login']) . " 👋</h2>";
        echo '<p>Vous êtes déjà connecté.</p>';
        echo '<a href="logout.php" class="btn-deconnexion">Se déconnecter</a>';
    } 
    // Sinon, afficher le formulaire
    else {
        echo '
        <h2>Connexion</h2>
        <form action="#" method="post">
            <label for="id">Identifiant :</label>
            <input type="text" name="Identifiant" id="id" required>

            <label for="pw"> Mot de passe :</label>
            <input type="password" name="passe" id="pw" required>

            <input type="submit" value="Se connecter">
        </form>
        ';
    }

    // Si le formulaire a été soumis
    if (!empty($_REQUEST['Identifiant'])) {
        $_SESSION['login'] = $_REQUEST['Identifiant'];
        header("Location: formulaire.php"); // recharge la page proprement
        exit;
    }
    ?>
</section>

<?php include('footer.php'); ?>