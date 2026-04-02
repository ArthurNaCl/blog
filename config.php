<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Config</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include 'header.php';
    ?>
    
    <div class="content">
        <h1>Configurações</h1>

        <button class="red" onclick="logout()">Sair</button>

        <button class="red" onclick="delete_account()">Deletar Conta</button>
    </div>

    <?php
        include 'footer.php';
    ?>

    <script src="https://kit.fontawesome.com/5703751366.js" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
</body>
</html>