<?php
include 'database.php';

session_start();

$stmt = $db->prepare('SELECT * FROM users WHERE username = :username');
$stmt->execute(['username' => $_POST['username']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user != null) {
    $_SESSION['error'] = 1;

    header('Location: ../signup_form.php');
} else {
    $stmt = $db->prepare('INSERT INTO users (username, password, age, color) VALUES (:username, :password, :age, :color)');
    $stmt->execute(['username' => $_POST['username'], 'password' => $_POST['password'], 'age' => strval($_POST['age']), 'color' => $_POST['color']]);

    $stmt = $db->query('SELECT id FROM users ORDER BY id DESC LIMIT 1');
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $_SESSION['id'] = $user['id'];

    header('Location: ../index.php');
}
?>