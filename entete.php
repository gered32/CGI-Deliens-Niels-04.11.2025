<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGI TP4 - Niels Deliens</title>
</head>
<body>
<header>
    <h1>Face Bouc</h1>
    <nav><img id="goat" src="./4081988.png" alt=""></nav>
</header>

<?php
if (isset($_SESSION['login'])) {
    echo '<p id="tantque" style="text-align:right;">Connecté en tant que ' , $_SESSION['login'] , "</p>";
    echo '<p style="text-align:right;"><a href="logout.php" >Déconnexion</a></p>';
} else {
    echo '<p style="text-align:right;"><a href="formulaire.php">Connexion</a></p>';
}
?>