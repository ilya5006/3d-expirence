<?php
    require_once './Classes/Database.php';

    $categories = $db->queryAll("SELECT * FROM `category`");

    echo json_encode($categories, JSON_UNESCAPED_UNICODE);
?>