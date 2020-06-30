<?php
    require_once __DIR__ . '/Classes/Db.php';

    $idArticle = (int)$_GET['id_article'];

    echo $db->query(
        "SELECT `text_article` 
        FROM `articles` 
        WHERE `id_article` = $idArticle"
    )['text_article'];
?>