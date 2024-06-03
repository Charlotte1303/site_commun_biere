<?php

// Fonction pour vérifier si le panier existe
function creationPanier()
{
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
        $_SESSION['panier']['libelleProduit'] = array();
        $_SESSION['panier']['qteProduit'] = array();
        $_SESSION['panier']['prixProduit'] = array();
        $_SESSION['panier']['verrou'] = false;
    }
    return true;
}

// Fonction pour ajouter un article au panier
function ajouterArticle($libelleProduit, $qteProduit, $prixProduit)
{
    if (creationPanier() && !isVerrouille()) {
        $positionProduit = array_search($libelleProduit, $_SESSION['panier']['libelleProduit']);

        if ($positionProduit !== false) {
            $_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit;
        } else {
            array_push($_SESSION['panier']['libelleProduit'], $libelleProduit);
            array_push($_SESSION['panier']['qteProduit'], $qteProduit);
            array_push($_SESSION['panier']['prixProduit'], $prixProduit);
        }
    } else {
        echo "Un problème est survenu veuillez contacter l'administrateur du site.";
    }
}

// Fonction pour supprimer un article du panier
function supprimerArticle($libelleProduit)
{
    if (creationPanier() && !isVerrouille()) {
        $positionProduit = array_search($libelleProduit, $_SESSION['panier']['libelleProduit']);

        if ($positionProduit !== false) {
            unset($_SESSION['panier']['libelleProduit'][$positionProduit]);
            unset($_SESSION['panier']['qteProduit'][$positionProduit]);
            unset($_SESSION['panier']['prixProduit'][$positionProduit]);
        }
    }
}

// Fonction pour modifier la quantité d'un article dans le panier 
function modifierQTeArticle($libelleProduit, $nouvelleQte)
{
    if (creationPanier() && !isVerrouille()) {
        $positionProduit = array_search($libelleProduit, $_SESSION['panier']['libelleProduit']);

        if ($positionProduit !== false) {
            $_SESSION['panier']['qteProduit'][$positionProduit] = $nouvelleQte;
        }
    }
}

// Fonction pour calculer le montant total du panier
function MontantGlobal()
{
    $total = 0;
    for ($i = 0; $i < count($_SESSION['panier']['libelleProduit']); $i++) {
        $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
    }
    return $total;
}

// Fonction pour vérifier si le panier est verrouillé
function isVerrouille()
{
    if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou']) {
        return true;
    } else {
        return false;
    }
}

// Fonction pour compter le nombre d'articles différents dans le panier
function compterArticles()
{
    if (isset($_SESSION['panier'])) {
        return count($_SESSION['panier']['libelleProduit']);
    } else {
        return 0;
    }
}

// Fonction pour supprimer le panier
function supprimePanier()
{
    unset($_SESSION['panier']);
}
