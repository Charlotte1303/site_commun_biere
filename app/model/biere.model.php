<?php

function getBiere(int $idBiere, PDO $pdo): array
{
    $sql = "SELECT * FROM students WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $numStudent, PDO::PARAM_INT);
    $stmt->execute();

    if (!$student = $stmt->fetch()) {
        $_SESSION['message'] = "L'étudiant n'existe pas !";
        header('Location: trombinoscope.php');
        exit;
    }
    return $student;
}

function getAllBieres(PDO $pdo) 
{
    $sql = "SELECT * FROM bieres";
    $stmt = $pdo->query($sql);
    $bieres = $stmt->fetchAll();
    return $bieres;
}

function getStudentsByPage(PDO $pdo, int $numPage): array
{
    $nbStudentsPerPage = 16;
    $offset = ($numPage - 1) * $nbStudentsPerPage;
    $sql = "SELECT * FROM students LIMIT " . $nbStudentsPerPage .  " OFFSET " . $offset;
    $stmt = $pdo->query($sql);
    $students = $stmt->fetchAll();
    return $students;
}

function searchBieres(PDO $pdo, string $search) {
    $searchWithWildCards = '%' . $search . '%';
    $sql = "SELECT * FROM biere WHERE Nom LIKE :search OR Description LIKE :search";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":search", $searchWithWildCards);
    $stmt->execute();
    return $stmt->fetchAll();
}