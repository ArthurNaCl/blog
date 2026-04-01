<?php
include 'php/database.php';

session_start();

$id = $_SESSION['id'];

$logged = isset($id);

if ($logged) {
    $stmt = $db->prepare('SELECT * FROM users WHERE id = :id');
    $stmt->execute(['id' => strval($id)]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $logged = true;
}
?>