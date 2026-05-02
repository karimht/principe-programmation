<?php

require_once 'config/config.php'; // fichier config
require_once 'services/StudentService.php'; // classe StudentService

//  Test ajout étudiant
if (isset($_POST['add_student'])) {
    $name = trim($_POST['prenom'] ?? '');
    $age = isset($_POST['age']) ? (int) $_POST['age'] : 0;

    if ($name !== '' && $age > 0) {
        StudentService::addStudent($name, $age);
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

//  Test suppression
if (isset($_GET['delete_id'])) {
    $id = (int) $_GET['delete_id'];
    StudentService::deleteStudent($id);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Récupération des données
$students = StudentService::getAllStudents();

//  Affichage
require_once 'views/students.php';