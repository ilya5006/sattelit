<?php
    SESSION_START();

    require_once __DIR__ . '/Classes/Db.php';

    $login = $db->escapeString($_GET['login']);
    $password = $db->escapeString($_GET['password']);

    $passwordHashDb = $db->query(
        "SELECT `password`
        FROM `users`
        WHERE `login` = '$login'"
    )['password'];

    if (password_verify($password, $passwordHashDb))
    {
        $_SESSION['admin'] = 1;
        header('Location: /admin.php');
    }
    else
    {
        echo 'Вы ввели неверные данные';
    }
?>