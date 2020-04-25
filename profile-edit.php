<?php SESSION_START(); ?>

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

    <script src="/view/js/profile.js" defer></script>
    
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

                <p id="user_address">Адрес: <span>г. Москва, пр. Мира, д. 44, кв. 52</span></p>
            </div>
        </div>
    </div>

    <div id="user_data_to_change">
        <form action="/model/php/update-address.php" method="GET" id="user_address">
            <p>Адрес:</p>
            <input type="text" name="address">
            <input type="submit" value="Обновить адрес" name="update_address" id="update_address">
        </form>

        <form action="" method="GET" id="user_password">
            <p>Новый пароль:</p>
            <input type="password" name="user_password" id="user_password">
            <p>Повторите пароль:</p>
            <input type="password" name="user_password_repeat" id="user_password_repeat">
            <input type="submit" value="Обновить пароль" name="update_password" id="update_password">
        </form>
    </div>
</body>
</html>