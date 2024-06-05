<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['age_verified']) || $_SESSION['age_verified'] !== true) {
    header('Location: age_verification.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="public/css/<?= htmlspecialchars($csspage) ?>">
    <link rel="stylesheet" href="public/css/<?= htmlspecialchars($cssheaderfooter) ?>">
    <script src="public/js/script.js">defer</script>

</head>

<body>
    <header>
        <a href="index.php"><img class="logo" src="public/images/Logo.png" alt="Logo"></a>
        <nav class="menu">
            <ul>
                <li><a href="index.php"><span>Accueil</span><img src="public/images/maison.png" /></a></li>
                <li><a href="a_propos.php"><span>À propos</span><img src="public/images/interrogation.png" /></a></li>
                <li><a href="nos_bieres.php"><span>Nos bières</span><img src="public/images/pinte.png" /></a></li>
                <li><a href="brassage.php"><span>Brassage</span><img src="public/images/labo.png" /></a></li>
                <li><a href="nous_contacter.php"><span>Contact</span><img src="public/images/tel.png" /></a></li>
                <li><a href="panier.php"><img class="panier" src="public/images/Panier_logo.png" alt="Panier"></a></li>
            </ul>
        </nav>
    </header>
</body>