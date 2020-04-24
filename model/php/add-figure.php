<?php
    SESSION_START();

    require_once './Classes/Database.php';

    $name = $db->escapeString($_POST['figure_name']);
    $image = $_FILES['figure_image']['tmp_name'];
    $model = $_FILES['figure_file']['tmp_name'];
    $plastic = $db->escapeString($_POST['figure_plastic']);
    $printTime = $db->escapeString($_POST['figure_print_time']);
    $fillingOut = $db->escapeString($_POST['figure_filling_out']);

    // echo $name . '<br>';
    // echo $image . '<br>';
    // echo $model . '<br>';
    // echo $plastic . '<br>';
    // echo $printTime . '<br>';
    // echo $fillingOut . '<br>';

    
?>