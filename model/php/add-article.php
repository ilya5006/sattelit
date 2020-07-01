<?php
    function getLastArticleId() {
        global $db;

        $lastId = $db->query(
            "SELECT `id_article`
            FROM `articles`
            ORDER BY `id_article`
            DESC"
        )['id_article'];

        return $lastId; 
    }
    
    SESSION_START();

    require_once __DIR__ . '/Classes/Db.php';

    $isAdmin = $_SESSION['admin'];

    if (!$isAdmin) {
        die ('Вы не авторизированы');
    }

    $articleText = $db->escapeString($_POST['title']);
    $articleTitle = $db->escapeString($_POST['text']);
    $articleImage = $_FILES['image'];

    $db->queryExecute(
        "INSERT INTO `articles`
        VALUES (NULL, '$articleTitle', '$articleText')"
    );

    if ($articleImage['error'] == UPLOAD_ERR_OK) {
        $lastArticleId = getLastArticleId();

        move_uploaded_file($articleImage['tmp_name'], __DIR__ . '/../../view/resources/img/article-img/' . $lastArticleId . '.jpg');

        header('Location: /article.php?id_article='.$lastArticleId);
    }
    else {
        die('Изображение не удалось загрузить, повторите попытку');
    }

?>