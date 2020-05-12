<?php
    SESSION_START();

    require_once __DIR__ . '/Classes/Database.php';

    $idUser = isset($_GET['id_user']) ? (int)$_GET['id_user'] : $_SESSION['id_user'];

    $figures = $db->queryAll(
        "SELECT `name`,
                `image`,
                `plastic`, 
                `print_time`, 
                `filling_out`,
                `id_figure`
        FROM `figure` 
        WHERE `id_user` = $idUser
        AND `favourite` = 1"
    );

    for ($i = 0; $i < count($figures); $i++)
    {
        $idFigure = $figures[$i]['id_figure'];

        $figureGrades = $db->query("SELECT SUM(`grade`), COUNT(*) FROM `figure_review_grade_user` WHERE `id_figure` = $idFigure");

        $gradesSum = (int)$figureGrades['SUM(`grade`)'];
        $gradesCount = (int)$figureGrades['COUNT(*)'];

        if ($gradesCount != 0)
            $figures[$i]['grade'] = round($gradesSum / $gradesCount);
        else
            $figures[$i]['grade'] = 0;

        $figures[$i]['image'] = base64_encode($figures[$i]['image']);
    }

    echo json_encode($figures, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
?>