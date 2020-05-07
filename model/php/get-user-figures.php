<?php
    SESSION_START();

    require_once __DIR__ . '/Classes/Database.php';

    $idUser = isset($_GET['id_user']) ? (int)$_GET['id_user'] : $_SESSION['id_user'];

    $figuresInfo = $db->queryAll(
        "SELECT 
            `figure`.`id_figure` AS `id_figure`, 
            `figure`.`name` AS `name`, 
            `figure`.`image` AS `image`, 
            `figure`.`plastic` AS `plastic`, 
            `figure`.`print_time` AS `print_time`, 
            `figure`.`filling_out` 
        FROM `figure`
        WHERE `figure`.`id_user` = $idUser"
    );

    // Конвертируем изображение в base64 и узнаём оценку каждой фигурки
    for ($i = 0; $i < count($figuresInfo); $i++)
    {
        $figuresInfo[$i]['image'] = base64_encode($figuresInfo[$i]['image']);

        $idFigure = $figuresInfo[$i]['id_figure'];

        $figureGrades = $db->query("SELECT SUM(`grade`), COUNT(*) FROM `figure_review_grade_user` WHERE `id_figure` = $idFigure");
        
        $gradesSum = (int)$figureGrades['SUM(`grade`)'];
        $gradesCount = (int)$figureGrades['COUNT(*)'];

        if ($gradesCount != 0)
            $figuresInfo[$i]['grade'] = round($gradesSum / $gradesCount);
        else
            $figuresInfo[$i]['grade'] = 0;
    }

    echo json_encode($figuresInfo, JSON_UNESCAPED_UNICODE);
?>