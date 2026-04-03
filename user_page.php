<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>

    <link rel="stylesheet" href="css/style.css">

    <?php
        include 'php/user.php';

        $stmt = $db->prepare('SELECT title, content, user_id FROM posts WHERE user_id = :id ORDER BY posts.id DESC');
        $stmt->execute(['id' => $_GET['id']]);
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt = $db->prepare('SELECT username, color FROM users WHERE id = :id');
        $stmt->execute(['id' => $_GET['id']]);
        $post_user = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <div class="content">
        <div class="banner" style="background-color: <?= $post_user['color'] ?>">
            <div class="banner_username">
                <h1><?= $post_user['username'] ?></h1>
            </div>
        </div>

        <?php foreach($posts as $post): ?>
            <section class="post">
                <div class="post_header">
                    <div class="username" onclick="go_to_user_page(<?= $_GET['id'] ?>)">
                        <div class="profile" style="background-color: <?= $post_user['color'] ?>;"></div>

                        <h2><?= $post_user['username'] ?></h2>
                    </div>

                    <?php
                        if ($_SESSION['id'] == $post['user_id']) {
                            echo '<i class="fa-solid fa-trash delete" onclick="delete_post(' . $post['post_id'] . ')"></i>';
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