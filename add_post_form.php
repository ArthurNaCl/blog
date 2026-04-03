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
        <h1>Postar</h1>

        <form action="php/add_post.php" method="POST" id="post">
            <p>Título</p>
            <input type="text" name="title" id="title">

            <p>Conteúdo</p>
            <textarea name="content" id="content"></textarea>

            <?php
                if (isset($_SESSION['error'])) {
                    if ($_SESSION['error'] == 1) {
                        unset($_SESSION['error']);    
                    
                        echo '<p class="error_message">Usuário inválido, tente novamente</p>';
                    }
                }
            ?>

            <?php
                if (isset($_SESSION['error'])) {
                    if ($_SESSION['error'] == 2) {
                        unset($_SESSION['error']);    
                    
                        echo '<p class="error_message">Senha incorreta, tente novamente</p>';
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