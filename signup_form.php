<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>
    
    <div class="content">
        <h1>Sign in</h1>

        <form action="php/signup.php" method="POST" id="signup">
            <p>Nome</p>
            <input type="text" name="username" id="username">

            <p>Senha</p>
            <input type="password" name="password" id="password">

            <p>Confirmar Senha</p>
            <input type="password" id="password_confirmation">

            <p>Idade</p>
            <input type="number" name="age" id="age">

            <p>Cor</p>
            <input type="color" name="color" class="color">

            <p class="error_message invisible" id="error">A senha confirmada está diferente da senha</p>

            <?php
                if (isset($_SESSION['error'])) {
                    if ($_SESSION['error'] == 1) {
                        unset($_SESSION['error']);    
                    
                        echo '<p class="error_message">Usuário já existente, tente novamente</p>';
                    }
                }
            ?>

            <input type="submit" value="Enviar" class="submit">
        </form>
    </div>

    <?php
        include 'footer.php';
    ?>

    <script src="https://kit.fontawesome.com/5703751366.js" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
</body>
</html>