<?php
    SESSION_START();
    $isAuth = isset($_SESSION['id_user']) ? true : false;
    $isSameUser = $_GET['id_user'] == $_SESSION['id_user'];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/header.css">
    
    <link rel="stylesheet" href="./view/css/profile.css">

    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">
    
    <title>3D-expirence</title>
</head>
<body>
    <?php require_once './view/header.php'; ?>

    <div id="profile_wrapper">
        <div id="user_info">
            <div id="user_avatar_role">
                <input type="file" id="user_avatar" accept=".jpg, .png">
                <p id="user_role">Администратор</p>
            </div>

            <div id="user_other_info">
                <div id="user_text_info">
                    <p id="user_name">Имя пользователя: <span>Admin</span></p>
                    <p id="user_date_of_birth">Дата рождения: <span>13.05.1999</span></p>

                    <?php if ($isSameUser): ?>
                        <p id="user_address">Адрес: <span>г. Москва, пр. Мира, д. 44, кв. 52</span></p>                        
                    <?php endif; ?>
                </div>
            </div>

            <?php if ($isSameUser): ?>
                <div id="user_edit_buttons">
                    <a href="/edit.php" id="edit_button">Редактировать</a>
                    <a href="/orders.php" id="orders_button">Заказы</a>
                    <a href="/add_figure.php" id="orders_button">Добавить 3D-модель</a>
                </div>
            <?php else: ?>
                <div id="user_edit_buttons">
                    <a href="">Оформить работу на заказ</a>
                </div>
            <?php endif; ?>

        </div>

        <div id="user_favourite">
            <h2>Избранные работы</h2>

            <div>
                <div class="user_work">
                   <a href=""></a>

                   <div id="user_rating">
                        <div class="rating_star gold_rating_star"></div>
                        <div class="rating_star gold_rating_star"></div>
                        <div class="rating_star gold_rating_star"></div>
                        <div class="rating_star grey_rating_star"></div>
                        <div class="rating_star grey_rating_star"></div>
                    </div> 
                </div>
            </div>

            <a href="/all-works.php" id="user_all_works">Все работы</a>
        </div>
    </div>
</body>
</html>