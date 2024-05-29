<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['age_confirm']) && $_POST['age_confirm'] == 'yes') {
        $_SESSION['age_verified'] = true;
        header('Location: index.php'); // Rediriger vers la page d'accueil ou la page précédente
        exit;
    } else {
        $error_message = "Vous devez être majeur pour accéder à ce site.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérification de l'âge</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <main>
        <div class="titre">
            <h1>Vérification de l'âge</h1>
        </div>
        <section>
            <form method="POST" action="">
                <p>Êtes-vous âgé de 18 ans ou plus ?</p>
                <button type="submit" name="age_confirm" value="yes">Oui</button>
                <button type="submit" name="age_confirm" value="no">Non</button>
            </form>
            <?php
            if (isset($error_message)) {
                echo "<p style='color: red;'>$error_message</p>";
            }
            ?>
        </section>
    </main>
</body>
</html>
