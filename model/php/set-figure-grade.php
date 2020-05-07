<?php
    SESSION_START();
    
    require_once __DIR__ . '/Classes/Database.php';

    $idUser = $_SESSION['id_user'];
    $idFigure = (int)$_GET['id_figure'];
    $grade = (int)$_GET['grade'];

    if (!$idUser)
        die('0');

    $isExists = $db->query(
        "SELECT `grade` FROM `figure_review_grade_user`
        WHERE `id_user` = $idUser
        AND `id_figure` = $idFigure"
    );

    if ($isExists)
    {
        $result = $db->queryExecute(
            "UPDATE `figure_review_grade_user` 
            SET `grade` = $grade
            WHERE `id_user` = $idUser
            AND `id_figure` = $idFigure"
        );
    }
    else
    {
        $result = $db->queryExecute(
            "INSERT INTO `figure_review_grade_user`
            VALUES ($idFigure, NULL, $idUser, $grade)"
        );
    }

    if ($result)
        echo '1';
?>