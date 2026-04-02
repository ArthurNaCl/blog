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
    <footer>
        <?php if ($logged): ?>
            <button class="post" onclick="go_to_post_form()">Postar</button>
        <?php endif ?>
    </footer>
    
    <script src="js/script.js"></script>
</body>
</html>