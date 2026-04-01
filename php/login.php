<?php
include 'database.php';

session_start();

$stmt = $db->prepare('SELECT id, username, password FROM users WHERE username = :username');
$stmt->execute(['username' => $_POST['username']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user['password'] == $_POST['password']) {
    $_SESSION['id'] = $user['id'];

    header('Location: ../index.php');
} else {
    header('Location: ../login_form.php');
}
?>