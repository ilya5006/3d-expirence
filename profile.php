<?php
    SESSION_START();
    
    $isAuth = isset($_SESSION['id_user']) ? true : false;
    
    $isSameUser = isset($_GET['id_user'])
        ? $_GET['id_user'] == $_SESSION['id_user'] 
            ? true
            : false
        : true;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- STYLES -->
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/header.css">
    <link rel="stylesheet" href="./view/css/rating.css">
    
    <link rel="stylesheet" href="./view/css/profile.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    
    <!-- SCRIPTS -->
    <script src="/view/js/b64toBlob.js" defer></script>
    <script src="/view/js/classes/Rating.js" defer></script>
    <script src="/view/js/header.js" defer></script>

    <script src="/view/js/user-info.js" defer></script>
    <script src="/view/js/profile.js" defer></script>
    
    <title>Профиль пользователя</title>
</head>
<body>
    <?php require_once './view/header.php'; ?>

    <div id="profile_wrapper">
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

                    <?php if ($isSameUser): ?>
                        <p id="user_address">Адрес: <span>г. Москва, пр. Мира, д. 44, кв. 52</span></p>                        
                    <?php endif; ?>
                </div>
            </div>

            <?php if ($isSameUser): ?>
                <div id="user_edit_buttons">
                    <a href="/profile-edit.php" id="edit_button">Редактировать</a>
                    <a href="/orders.php" id="orders_button">Заказы</a>
                    <a href="/add-figure.php" id="orders_button">Добавить 3D-модель</a>
                </div>
            <?php else: ?>
                <div id="user_edit_buttons">
                    <a href="">Оформить работу на заказ</a>
                </div>
            <?php endif; ?>

        </div>

        <div id="user_favourite">
            <h2>Избранные работы</h2>

            <div id="works">
                <!-- <div class="user_work">
                   <a href="" class="user_work_image"></a>

                   <a href="/figure.php" class="user_work_name">Имя фигурки</a>

                   <div class="work_rating">
                        <div class="rating_star gold_rating_star"></div>
                        <div class="rating_star gold_rating_star"></div>
                        <div class="rating_star gold_rating_star"></div>
                        <div class="rating_star gray_rating_star"></div>
                        <div class="rating_star gray_rating_star"></div>
                    </div>
                </div>

                <div class="user_work">
                   <a href="" class="user_work_image"></a>

                   <a href="/figure.php" class="user_work_name">Имя фигурки</a>

                   <div class="work_rating">
                        <div class="rating_star gold_rating_star"></div>
                        <div class="rating_star gold_rating_star"></div>
                        <div class="rating_star gold_rating_star"></div>
                        <div class="rating_star gray_rating_star"></div>
                        <div class="rating_star gray_rating_star"></div>
                    </div>
                </div> -->
            </div>

        </div>

        <a href="/all-works.php" id="user_all_works">Все работы</a>

    </div>
</body>
</html>