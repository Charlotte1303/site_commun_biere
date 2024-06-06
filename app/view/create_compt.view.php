<?php
// Inclure le fichier de connexion à la base de données
include 'db_utilisateur.php';


$conn = new mysqli($servername, $username, $password, $dbname);

$nom = $email = $mot_de_passe = "";
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

    // Validation du mot de passe
    if (empty(trim($_POST["mot_de_passe"]))) {
        $mot_de_passe_err = "Veuillez entrer un mot de passe.";
    } elseif (strlen(trim($_POST["mot_de_passe"])) < 6) {
        $mot_de_passe_err = "Le mot de passe doit avoir au moins 6 caractères.";
    } else {
        $mot_de_passe = trim($_POST["mot_de_passe"]);
    }

    // Vérifier les erreurs avant de continuer
    if (empty($nom_err) && empty($email_err) && empty($mot_de_passe_err)) {
        // Vérifier si l'utilisateur existe déjà
        $sql = "SELECT id FROM utilisateurs WHERE nom = ? OR email = ?";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ss", $param_nom, $param_email);
            $param_nom = $nom;
            $param_email = $email;

            if ($stmt->execute()) {
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    $message = "Un utilisateur avec ce nom ou cet email existe déjà.";
                } else {
                    // Préparer une déclaration d'insertion
                    $sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (?, ?, ?)";

                    if ($stmt = $conn->prepare($sql)) {
                        $stmt->bind_param("sss", $param_nom, $param_email, $param_mot_de_passe);

                        // Définir les paramètres
                        $param_nom = $nom;
                        $param_email = $email;
                        $param_mot_de_passe = password_hash($mot_de_passe, PASSWORD_DEFAULT); // Crée un hash du mot de passe

                        // Tenter d'exécuter la déclaration préparée
                        if ($stmt->execute()) {
                            $message = "Compte créé avec succès!";
                        } else {
                            $message = "Quelque chose a mal tourné. Veuillez réessayer plus tard.";
                        }
                    } else {
                        $message = "Erreur lors de la préparation de la requête d'insertion : " . $conn->error;
                    }
                }
            } else {
                $message = "Erreur lors de la préparation de la requête de vérification : " . $conn->error;
            }
        } else {
            $message = "Erreur lors de la préparation de la requête de vérification : " . $conn->error;
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
            <h2>Créer un compte</h2>


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