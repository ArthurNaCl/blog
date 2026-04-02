<?php
include 'database.php';

session_start();

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
}

$logged = isset($id);

if ($logged) {
    $stmt = $db->prepare('SELECT * FROM users WHERE id = :id');
    $stmt->execute(['id' => strval($id)]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $logged = true;
}
?>