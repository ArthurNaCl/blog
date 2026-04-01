<?php
include 'database.php';

$stmt = $db->prepare('DELETE FROM posts WHERE id = :id');
$stmt->execute(['id' => $_GET['id']]);

header('Location: ../index.php');
?>