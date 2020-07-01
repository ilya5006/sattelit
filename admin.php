<?php
    SESSION_START();

    $isAdmin = $_SESSION['admin'];

    if (!$isAdmin): ?>

    <form action="/model/php/auth.php" method="GET">

        <input type="text" name="login" placeholder="Введите логин">
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="submit">

    </form>

    <?php
    else: ?>
    
    <form 
        action="/model/php/add-article.php" 
        method="POST" 
        enctype="multipart/form-data"
    >

        <input type="text" name="title" placeholder="Введите заголовок статьи">
        <input type="text" name="text" placeholder="Введите текст статьи">
        <input type="file" name="image" value="Выберите картинку" accept=".jpg, .jpeg, .png">
        <input type="submit" value="Готово">

    </form>

    <?php 
    endif;
?>