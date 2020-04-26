<?php
    SESSION_START();

    require_once './Classes/Database.php';

    $idUser = $_SESSION['id_user'];
    $name = $db->escapeString($_POST['figure_name']);
    $categoryId = (int)$_POST['figure_category'];
    $image = addslashes(file_get_contents($_FILES['figure_image']['tmp_name']));
    $model = addslashes(file_get_contents($_FILES['figure_file']['tmp_name']));
    $plastic = $db->escapeString($_POST['figure_plastic']);
    $printTime = $db->escapeString($_POST['figure_print_time']);
    $fillingOut = $db->escapeString($_POST['figure_filling_out']);

    $lastFigureId = $db->query("SELECT `id_figure` FROM `figure` ORDER BY `id_figure` DESC")['id_figure'];
    $figureId = (int)$lastFigureId;
    $figureId++;

    $db->queryExecute("INSERT INTO `figure` VALUES ($figureId, $categoryId, '$name', '$image', '$model', 0.000, 0, '$plastic', '$printTime', '$fillingOut')");

    $db->queryExecute("INSERT INTO `figure_user` VALUES ($figureId, $idUser)");

    header("Location: /all-works.php");
?>