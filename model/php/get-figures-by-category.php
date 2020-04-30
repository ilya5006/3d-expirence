<?php
    require_once __DIR__ . '/Classes/Database.php';

    $idCategory = (int)$_GET['id_category'];

    $figures = $db->queryAll(
        "SELECT 
        `id_figure`,
        `name`,
        `image`,
        `price`,
        `plastic`,
        `print_time`,
        `filling_out`
        FROM `figure`
        WHERE `id_category` = $idCategory"
    );

    for ($i = 0; $i < count($figures); $i++)
    {
        $idFigure = $figures[$i]['id_figure'];

        $figures[$i]['image'] = base64_encode($figures[$i]['image']); 

        $figureGrades = $db->query(
            "SELECT SUM(`grade`), COUNT(*) 
            FROM `figure_review_grade` WHERE `id_figure` = $idFigure"
        );

        $gradesSum = (int)$figureGrades['SUM(`grade`)'];
        $gradesCount = (int)$figureGrades['COUNT(*)'];

        if ($gradesCount != 0)
            $figures[$i]['grade'] = round($gradesSum / $gradesCount);
        else
            $figures[$i]['grade'] = 0;
    }
    
    echo json_encode($figures, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
?>