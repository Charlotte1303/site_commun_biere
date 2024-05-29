<?php
// Inclure votre fichier de configuration de base de données
include 'app\model\connexionBDD.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Préparer et exécuter la requête d'insertion
    $stmt = $pdo->prepare("INSERT INTO contacts (nom, email, message) VALUES (?, ?, ?)");
    $stmt->execute([$nom, $email, $message]);

    // Redirection vers une page de confirmation ou afficher un message de confirmation
    header("Location: confirmation.php");
    exit();
}

//1 Données
$title = "nous_contacter";
$css = "nous_contacter.css";

//2 Générer Vue
$currentPage = 'nous_contacter';
ob_start();
include 'app/view/nous_contacter.view.php';
$content = ob_get_clean();

//3 inclure le layout
include 'app/view/common/layout.php';
