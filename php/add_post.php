<?php
include 'database.php';

session_start();

$stmt = $db->prepare('INSERT INTO posts (title, content, user_id) VALUES (:title, :content, :id)');
$stmt->execute(['title' => $_POST['title'], 'content' => $_POST['content'], 'id' => $_SESSION['id']]);

header('Location: ../index.php');
?>