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

    if (!$idMembre = $stmt->fetch()) {
        $_SESSION['message'] = "Le membre n'existe pas!";
        header('Location: trombinoscope.php');
        exit;
    }
    return $membre;
}

function getAllBieres(PDO $pdo): array
{
    $sql = "SELECT * FROM biere";
    $stmt = $pdo->query($sql);
    $biere = $stmt->fetchAll();
    return $biere;
}

function getStudentsByPage(PDO $pdo, int $numPage): array
{
    $nbStudentsPerPage = 16;
    $offset = ($numPage - 1) * $nbStudentsPerPage;
    $sql = "SELECT * FROM students LIMIT ". $nbStudentsPerPage.  " OFFSET ". $offset;
    $stmt = $pdo->query($sql);
    $students = $stmt->fetchAll();
    return $students;
}

function searchBieres(PDO $pdo, string $search): array
{
    $searchWithWildCards = '%'. $search. '%';
    $sql = "SELECT * FROM biere WHERE Nom LIKE :search OR Description LIKE :search";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":search", $searchWithWildCards);
    $stmt->execute();
    return $stmt->fetchAll();
}
function getBiereById(int $idBiere, PDO $pdo): array
{
    $sql = "SELECT * FROM biere WHERE idBiere=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $idBiere, PDO::PARAM_INT);
    $stmt->execute();

    if (!$bieres = $stmt->fetch()) {
        $_SESSION['message'] = "La bière n'existe pas !";
        header('Location: nos_bieres.php');
        exit;
    }
    return $bieres;
}