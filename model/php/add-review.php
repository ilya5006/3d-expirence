<?php
    SESSION_START();

    require_once  __DIR__ . '/Classes/Database.php';

    $idUser = $_SESSION['id_user'];
    $idFigure = (int)$_GET['id_figure'];
    $textReview = $db->escapeString($_GET['text_review']);
    
    $date = new DateTime();
    $date = $date->format('Y-m-d H:i:s');

    $db->queryExecute(
        "INSERT INTO `review` VALUES (NULL, $idFigure, '$textReview', '$date')"
    );

    $lastIdReview = $db->query("SELECT `id_review` FROM `review` ORDER BY `id_review` DESC")['id_review'];

    $db->queryExecute(
        "UPDATE `figure_review_grade_user`
        SET `id_review` = $lastIdReview
        WHERE `id_user` = $idUser
        AND `id_figure` = $idFigure"
    );

    header("Location: /figure.php?id_figure=".$idFigure);
?>