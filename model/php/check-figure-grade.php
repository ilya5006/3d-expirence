<?php
    SESSION_START();

    require_once __DIR__ . '/Classes/Database.php';

    $idUser = $_SESSION['id_user'];
    $idFigure = (int)$_GET['id_figure'];

    $grade = $db->query(
        "SELECT `grade` FROM `figure_review_grade_user`
        WHERE `id_user` = $idUser
        AND `id_figure` = $idFigure"
    );

    if ($grade)
    {
        echo '1';
    }
    else
    {
        echo '0';
    }
?>