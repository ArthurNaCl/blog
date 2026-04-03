<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        include 'php/user.php';
    ?>
</head>
<body>
    <header>
        <h1 class="logo" onclick="go_to_home()">Meu Site</h1>

        <div class="user">
            <?php if ($logged): ?>
                <div class="username" onclick="go_to_user_page(<?= $user['id'] ?>)">
                    <div class="profile" style="background-color: <?= $user['color'] ?>;"></div>

                    <h2><?= $user['username'] ?></h2>
                </div>

                <i class="fa-sharp fa-solid fa-gear" onclick="go_to_config()"></i>
            <?php else: ?>
                <a href="login_form.php">Log in</a>

                <a href="signup_form.php">Sign up</a>
            <?php endif ?>
        </div>
    </header>
    
    <script src="js/script.js"></script>
</body>
</html>