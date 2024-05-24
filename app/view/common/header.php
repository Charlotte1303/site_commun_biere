<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="public/css/<?= $css ?>">
</head>

<body>

    <header>
        <a href="app/view/common/index.html"><img class="logo" src="public/images/Logo.png"></a>
        <nav class="menu">
            <ul>
                <li>
                    <a href="index.php">Accueil</a>
                </li>
                <li>
                    <a href="page_a_propos.php">A propos</a>
                </li>
                <li>
                    <a href="page_nos_bieres.php">Nos bières</a>
                </li>
                <li>
                    <a href="brassage.php">Brassage</a>
                </li>
                <li>
                    <a href="nous_contacter.php">Contact</a>
                </li>
                <li>
                    <a href=""><img class="panier" src="public/images/Panier_logo.png"></a>
                </li>
                <li>
                    <!-- Formulaire de recherche -->
                    <form action="search.php" method="get">
                        <input type="text" name="search" placeholder="Rechercher une bière">
                        <input type="submit" value="Rechercher">
                    </form>
                </li>

            </ul>

        </nav>
    </header>