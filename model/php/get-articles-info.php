<?php
    require_once __DIR__ . '/Classes/Db.php';

    $articles = $db->queryAll(
        "SELECT * FROM `articles`"
    );

    // echo ',kzm,';
    echo json_encode($articles, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
?>