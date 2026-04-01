<?php
include 'database.php';

session_start();

$stmt = $db->prepare('SELECT id, username, password FROM users WHERE username = :username');
$stmt->execute(['username' => $_POST['username']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user == null) {
    $_SESSION['error'] = 1;

    header('Location: ../login_form.php');

} else if ($user['password'] != $_POST['password']) {
    $_SESSION['error'] = 2;

    header('Location: ../login_form.php');
} else {
    $_SESSION['id'] = $user['id'];

    header('Location: ../index.php');
}
?>