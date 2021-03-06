<?php SESSION_START(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- STYLES -->
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/header.css">
    <link rel="stylesheet" href="./view/css/pagination.css">
    <link rel="stylesheet" href="./view/css/rating.css">

    <link rel="stylesheet" href="./view/css/all-works.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    
    <!-- SCRIPTS -->
    
    <!-- <script src="/view/js/classes/Rating.js" defer></script>
    <script src="/view/js/all-works.js" defer></script> -->

    <script src="/view/js/classes/Rating.js" defer></script>
    <script src="/view/js/b64toBlob.js" defer></script>
    <script src="/view/js/header.js" defer></script>
    <script src="/view/js/user-info.js" defer></script>

    <script src="/view/js/all-works.js" defer></script>

    <title>Все работы пользователя</title>
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

                <?php if ($isSameUser): ?>
                    <p id="user_address">Адрес: <span>г. Москва, пр. Мира, д. 44, кв. 52</span></p>                        
                <?php endif; ?>
            </div>
        </div>

    </div>          
        
    <div id="all_works_wrapper">
        <div id="sort_top_wrapper">
            <p id="sort_type">Соритровка по: 
                <select id="sort_top_type">
                    <option value="1" id="sort_date">Дате добавления</option>
                    <option value="2" id="sort_date">Цене</option>
                    <option value="3" id="sort_date">Отзывам</option>
                </select>
            </p>

            <div id="sort_arrow_buttons">
                <button class="arrows sort_top_buttons chosed" id="sort_top_arrow"></button>
                <button class="arrows sort_top_buttons" id="sort_bottom_arrow"></button>
            </div>
        </div>

        <div id="figures">
            <!-- DYNAMIC GENERATING IN JAVASCRIPT -->
        </div>

        <div id="pagination">
            <button>&lt;</button>
            <button>1</button>
            <p class="pagination_three_dots">...</p>
            <button>4</button>
            <button>5</button>
            <button id="current_page">6</button>
            <button>7</button>
            <button>8</button>
            <p class="pagination_three_dots">...</p>
            <button>N</button>
            <button>&gt;</button>
        </div>
    </div>
</body>
</html>