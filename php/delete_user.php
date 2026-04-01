<?php
include 'database.php';

session_start();

$stmt = $db->prepare('DELETE FROM users WHERE id = :id');
$stmt->execute(['id' => $_SESSION['id']]);

$_SESSION['id'] = null;

header('Location: ../index.php');
?>