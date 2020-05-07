<?php
    SESSION_START();

    require_once __DIR__ . '/Classes/Database.php';

    $idFigure = (int)$_GET['id_figure'];

    $figureReviews = $db->queryAll(
        "SELECT 
            `figure_review_grade_user`.`grade` AS `grade`,
            `review`.`text_review` AS `text_review`,
            `review`.`date` AS `date`,
            `user`.`id_user` as `id_user`,
            `user`.`login` AS `login`,
            `user`.`avatar` AS `avatar`
        FROM `figure_review_grade_user`, `review`, `user`
        WHERE `figure_review_grade_user`.`id_figure` = $idFigure
        AND `figure_review_grade_user`.`id_figure` = `review`.`id_figure`
        AND `figure_review_grade_user`.`id_review` = `review`.`id_review`
        AND `figure_review_grade_user`.`id_user` = `user`.`id_user`"
    );

    for ($i = 0; $i < count($figureReviews); $i++)
    {
        $figureReviews[$i]['avatar'] = base64_encode($figureReviews[$i]['avatar']);
    }

    echo json_encode($figureReviews, JSON_UNESCAPED_UNICODE | JSON_NUMERIC_CHECK);
?>