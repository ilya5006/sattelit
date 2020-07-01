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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>failAuthPage</title>
    <link rel="stylesheet" href="/view/resources/css/style.css">
    <link rel="stylesheet" href="/view/resources/css/admin.css">
</head>
<body>
    <?
        if (!(password_verify($password, $passwordHashDb))){
            echo '<p class="failAuth"> Вы ввели неверные данные </p>';
        }
    ?>
</body>
</html>