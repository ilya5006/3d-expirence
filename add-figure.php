<?php

SESSION_START(); 

if (empty($_SESSION['id_user'])) header("Location: /index.php");

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/header.css">
    
    <link rel="stylesheet" href="./view/css/add-figure.css">

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">
    
    <script src="/view/js/b64toBlob.js" defer></script>
    <script src="/view/js/header.js" defer></script>
    <script src="/view/js/user-info.js" defer></script>

    <script src="/view/js/add-figure.js" defer></script>
    
    <title>Добавление 3D-модели</title>
</head>
<body>
    <?php require_once './view/header.php'; ?>

    <div id="user_info">
        <div id="user_avatar_role">
            <input type="file" id="user_avatar" accept=".jpg, .png">
            <p class="role_administrator" id="user_role">Администратор</p>

            <!-- ROLE CLASSES: 
                - role_administrator
                - role_moderator
                - role_3d_maker
                - role_user -->
        </div>

        <div id="user_other_info">
            <div id="user_text_info">
                <p id="user_name">Имя пользователя: <span>Admin</span></p>
                <p id="user_date_of_birth">Дата рождения: <span>13.05.1999</span></p>

                <p id="user_address">Адрес: <span>г. Москва, пр. Мира, д. 44, кв. 52</span></p>
            </div>
        </div>
    </div>

    <div id="user_data_to_change">
        <form action="/model/php/add-figure.php" method="POST" id="figure_add" enctype="multipart/form-data">
            <p>Наименование:</p>
            <input type="text" name="figure_name" id="figure_name" required>
            <p>Категория:</p>
            <select name="figure_category" id="figure_category" required>
                <!-- Dynamic update -->
            </select>
            <p>Картинка:</p>
            <input type="file" name="figure_image" id="figure_image" accept=".jpeg, .jpg, .png" required>
            <p>Файл с 3D-моделью:</p>
            <input type="file" name="figure_file" id="figure_file" required>
            <p>Пластик:</p>
            <input type="text" name="figure_plastic" id="figure_plastic" required>
            <p>Время печати:</p>
            <input type="text" name="figure_print_time" id="figure_print_time" required>
            <p>Заполнение:</p>
            <input type="text" name="figure_filling_out" id="figure_filling_out" required>

            <input type="submit" value="Добавить" name="figure_submit" id="figure_submit">
        </form>
    </div>
</body>
</html>