<?php
    SESSION_START();

    $isAdmin = $_SESSION['admin'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminPage</title>
    <link rel="stylesheet" href="view/resources/css/style.css">
    <link rel="stylesheet" href="view/resources/css/admin.css">
</head>
<body>
    <?php
        if (!$isAdmin):
    ?>

    <form action="/model/php/auth.php" method="GET" class="auth">

        <input type="text" name="login" placeholder="Введите логин">
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="submit">

    </form>

    <?php
        else:
    ?>

    <form 
        action="/model/php/add-article.php" 
        method="POST" 
        enctype="multipart/form-data"
        class="newArticle"
    >

        <input type="text" name="title" placeholder="Введите заголовок статьи">
        <input type="text" name="text" placeholder="Введите текст статьи">
        <label for="file">Выбрать картинку</label>
        <input type="file" name="image" accept=".jpg, .jpeg, .png" id="file">
        <input type="submit" value="Готово">

    </form>

    <?php 
        endif;
    ?>
</body>
</html>
