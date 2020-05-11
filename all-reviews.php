<?php SESSION_START(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/header.css">
    <link rel="stylesheet" href="./view/css/pagination.css">
    <link rel="stylesheet" href="./view/css/rating.css">

    <link rel="stylesheet" href="./view/css/figure.css">
    <link rel="stylesheet" href="./view/css/all-reviews.css">

    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

    <script src="/view/js/b64toBlob.js" defer></script>
    <script src="/view/js/header.js" defer></script>
    <script src="/view/js/classes/Rating.js" defer></script>
    
    <script src="/view/js/all-reviews.js" defer></script>

    <title>3D-модель</title>
</head>
<body>
    <?php require_once './view/header.php'; ?>

    <div id="main_content_wrapper">
        <div id="figure_info">
            <div id="figure_image_rating_author">
                <div id="figure_image"></div>

                <div id="figure_rating">
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                </div>

                <a href="/profile.php">Автор</a>
            </div>

            <div id="figure_name_specs">
                <p id="figure_name">Название фигурки</p>
                <div id="figure_specs">
                    <p>Пластик - klassno</p>
                    <p>Время печати - very bistro</p>
                    <p>Заполнение - chivo bluat</p>
                </div>
            </div>
        </div>

        <div id="reviews">
            <p>Все отзывы</p>
            
            <!-- DYNAMIC GENERATION IN JAVASCRIPT -->
        </div>
        
        <?php require_once './view/pagination.php'; ?>
    </div>
</body>
</html>