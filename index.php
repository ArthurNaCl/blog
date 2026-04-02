<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>

    <link rel="stylesheet" href="css/style.css">

    <?php
        include 'php/user.php';

        $stmt = $db->query('SELECT posts.id, title, content, user_id, users.username, users.color FROM posts INNER JOIN users ON user_id = users.id ORDER BY posts.id DESC');
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <div class="content">
        <?php foreach($posts as $post): ?>
            <section class="post">
                <div class="post_header">
                    <div class="username">
                        <div class="profile" style="background-color: <?= $post['color'] ?>;"></div>

                        <h2><?= $post['username'] ?></h2>
                    </div>

                    <?php
                        if ($_SESSION['id'] == $post['user_id']) {
                            echo '<i class="fa-solid fa-trash delete" onclick="delete_post(' . $post['id'] . ')"></i>';
                        }
                    ?>
                </div>

                <h1><?= $post['title'] ?></h1>

                <p><?= $post['content'] ?></p>
            </section>
        <?php endforeach ?>
    </div>

    <?php
        include 'footer.php';
    ?>

    <script src="https://kit.fontawesome.com/5703751366.js" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
</body>
</html>