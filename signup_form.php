<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <link rel="stylesheet" href="css/style.css">

    <?php
        include 'php/user.php';
    ?>
</head>
<body>
    <header>
        <h1 onclick="go_to_home()">Meu Site</h1>

        <div class="user">
            <?php if ($logged): ?>
                <div class="username">
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

    <div class="content">
        <h1>Sign in</h1>

        <form action="php/signup.php" method="POST">
            <p>Nome</p>
            <input type="text" name="username">

            <p>Senha</p>
            <input type="password" name="password">

            <p>Confirmar Senha</p>
            <input type="password" name="password_confirmation">

            <p>Idade</p>
            <input type="number" name="age">

            <p>Cor</p>
            <input type="color" name="color" class="color">

            <input type="submit" value="Enviar" class="submit">
        </form>
    </div>

    <script src="https://kit.fontawesome.com/5703751366.js" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
</body>
</html>