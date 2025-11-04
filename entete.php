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
    <h1>Document minimal en MMI</h1>
    <nav></nav>
</header>

<?php
if (isset($_SESSION['login'])) {
    echo "<p>Connecté en tant que " . $_SESSION['login'] . "</p>";
} else {
    echo '<a href="formulaire.php" style="float:right;">Connexion</a>';
}
?>

<?php
if (isset($_SESSION['login'])) {
    echo "<p>Connecté en tant que " . $_SESSION['login'] . "</p>";
    echo '<a href="logout.php" style="float:right;">Déconnexion</a>';
} else {
    echo '<a href="formulaire.php" style="float:right;">Connexion</a>';
}
?>