<?php
    SESSION_START();

    require_once __DIR__ . '/Classes/Database.php';

    $idFigure = (int)$_GET['id_figure'];

    $figureInfo = $db->query(
        "SELECT `name`, 
                `image`, 
                `file`, 
                `plastic`, 
                `print_time`, 
                `filling_out` 
        FROM `figure` 
        WHERE `id_figure` = $idFigure"
    );

    $figureReviews = $db->queryAll(
        "SELECT 
            `review`.`id_review` AS `id_review`,
            `review`.`id_figure` AS `id_figure`,
            `figure_review_grade`.`grade` AS `grade`,
            `review`.`text_review` AS `text_review`,
            `review`.`date` AS `date`,
            `user`.`id_user` as `id_user`,
            `user`.`login` AS `login`,
            `user`.`avatar` AS `avatar`
        FROM `figure_review_grade`, `review`, `user`
        WHERE `figure_review_grade`.`id_figure` = $idFigure
        AND `figure_review_grade`.`id_figure` = `review`.`id_figure`
        AND `figure_review_grade`.`id_review` = `review`.`id_review`
        AND `review`.`id_user` = `user`.`id_user`
        LIMIT 5"
    );

    $figureIdUser = $db->query(
        "SELECT `id_user` 
        FROM `figure_user` 
        WHERE `id_figure` = $idFigure"
    )['id_user'];

    $figureGrades = $db->query(
        "SELECT SUM(`grade`), COUNT(*) 
        FROM `figure_review_grade` WHERE `id_figure` = $idFigure"
    );

    for ($i = 0; $i < count($figureReviews); $i++)
    {
        $figureReviews[$i]['avatar'] = base64_encode($figureReviews[$i]['avatar']);
    }

    // БЕРЁМ СРЕДНИЙ БАЛЛ ФИГУРКИ
    $gradesSum = (int)$figureGrades['SUM(`grade`)'];
    $gradesCount = (int)$figureGrades['COUNT(*)'];

    if ($gradesCount != 0)
        $figureInfo['grade'] = round($gradesSum / $gradesCount);
    else
        $figureInfo['grade'] = 0;

    $figureInfo['id_user'] = $figureIdUser; 
    $figureInfo['reviews'] = $figureReviews;
    $figureInfo['image'] = base64_encode($figureInfo['image']); 
    $figureInfo['file'] = base64_encode($figureInfo['file']);

    echo json_encode($figureInfo, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
    
?>