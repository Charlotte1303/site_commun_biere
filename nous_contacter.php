<?php
// Inclure votre fichier de connexion à la base de données
include 'app/model/connexionBDD.php';

// Récupérer une connexion à la base de données
$pdo = getDatabaseConnection();


// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Afficher les données pour le débogage
    echo "Nom: $nom<br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";

    // Vérifier si les champs ne sont pas vides
    if (!empty($nom) && !empty($email) && !empty($message)) {
        try {
            // Préparer et exécuter la requête d'insertion
            $stmt = $pdo->prepare("INSERT INTO formulaire_de_contact (nom, email, message) VALUES (?, ?, ?)");
            if ($stmt->execute([$nom, $email, $message])) {
                // Redirection vers une page de confirmation ou afficher un message de confirmation
                header("Location: confirmation.php");
                exit();
            } else {
                echo "Erreur lors de l'insertion des données dans la base de données.";
            }
        } catch (PDOException $e) {
            echo "Erreur PDO : " . $e->getMessage();
        }
    } else {
        echo "Veuillez remplir tous les champs du formulaire.";
    }
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
?>
