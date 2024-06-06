<?php
// Inclure le fichier de connexion à la base de données
include 'db_utilisateur.php';

$nom = $email = "";
$nom_err = $email_err = $mot_de_passe_err = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validation du nom
    if (empty(trim($_POST["nom"]))) {
        $nom_err = "Veuillez entrer un nom.";
    } else {
        $nom = trim($_POST["nom"]);
    }

    // Validation de l'email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Veuillez entrer un email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Vérifier les erreurs avant de continuer
    if (empty($nom_err) && empty($email_err)) {
        // Vérifier si l'utilisateur existe déjà
        $sql = "SELECT id FROM utilisateurs WHERE nom = ? AND email = ?";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ss", $param_nom, $param_email);
            $param_nom = $nom;
            $param_email = $email;

            if ($stmt->execute()) {
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    $message = "Connexion réussie!";
                } else {
                    $message = "Nom ou email incorrect.";
                }
            } else {
                $message = "Erreur lors de la préparation de la requête : " . $conn->error;
            }
        } else {
            $message = "Erreur lors de la préparation de la requête : " . $conn->error;
        }

        // Fermer la déclaration
        $stmt->close();
    }

    // Fermer la connexion
    $conn->close();
}
?>

<script type="text/javascript">
    function showMessage(message) {
        alert(message);
    }
</script>

<body>
    <div class="container">
        <div class="form-wrapper">
            <h2>Connexion</h2>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom" value="<?php echo $nom; ?>">
                    <span><?php echo $nom_err; ?></span>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>">
                    <span><?php echo $email_err; ?></span>
                </div>

                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" name="mot_de_passe">
                    <span><?php echo $mot_de_passe_err; ?></span>
                </div>

                <div class="form-group">
                    <input type="submit" value="Soumettre">
                </div>
            </form>
        </div>
    </div>

    <?php
    if (!empty($message)) {
        echo "<script type='text/javascript'>showMessage('$message');</script>";
    }
    ?>



</body>