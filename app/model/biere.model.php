<?php

function getBiere(int $idBiere, PDO $pdo): array
{
    $sql = "SELECT * FROM biere WHERE idBiere=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $idBiere, PDO::PARAM_INT);
    $stmt->execute();

    if (!$bieres = $stmt->fetch()) {
        $_SESSION['message'] = "L'étudiant n'existe pas!";
        header('Location: trombinoscope.php');
        exit;
    }
    return $bieres;
}

function getMembre(int $idMembre, PDO $pdo): array
{
    $sql = "SELECT * FROM Membres WHERE idMembre=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $idMembre, PDO::PARAM_INT);
    $stmt->execute();

    if (!$membres = $stmt->fetch()) {
        $_SESSION['message'] = "Le membre n'existe pas!";
        header('Location: trombinoscope.php');
        exit;
    }
    return $membres;
}

function getAllBieres(PDO $pdo): array
{
    $sql = "SELECT * FROM biere";
    $stmt = $pdo->query($sql);
    $biere = $stmt->fetchAll();
    return $biere;
}