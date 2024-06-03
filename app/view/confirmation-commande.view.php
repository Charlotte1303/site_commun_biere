<?php
// Vérification de la commande
if (isset($_SESSION['panier']) &&!empty($_SESSION['panier'])) {
    // Traitement de la commande
    $total = 0;
    foreach ($_SESSION['panier'] as $produit) {
        $total += $produit['prix'] * $produit['quantite'];
    }
    // Enregistrement de la commande en base de données
    //...
    // Suppression du panier
    unset($_SESSION['panier']);
   ?>
    <html>
    <head>
        <title>Confirmation de commande</title>
        <style>
            /* CSS adapté */
            body {
                font-family: 'Roboto-Bold', sans-serif;
                margin: 0;
                padding: 0;
                background-color: black;
                color: white;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
            /*... */
        </style>
    </head>
    <body>
        <div class="content">
            <h1>Confirmation de commande</h1>
            <p>Votre commande a été enregistrée avec succès.</p>
            <p>Le montant total de votre commande est de <?php echo $total;?> €.</p>
            <p>Merci de votre achat!</p>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "Erreur : votre panier est vide.";
}
?>