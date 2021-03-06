<?php SESSION_START(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- STYLES -->
    <link rel="stylesheet" href="./view/css/messanger.css">

    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/header.css">
    <link rel="stylesheet" href="./view/css/rating.css">

    <link rel="stylesheet" href="./view/css/figure.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

    <!-- SCRIPTS -->
    <script src="/view/js/classes/Messanger.js" defer></script>
    <script src="/view/js/classes/Rating.js" defer></script>
    
    <script src="/view/js/b64toBlob.js" defer></script>
    <script src="/view/js/header.js" defer></script>
    
    <script src="/view/js/figure.js" defer></script>

    <title>3D-модель</title>
</head>
<body>
    <?php require_once './view/header.php'; ?>

    <div id="main_content_wrapper">
        <div id="figure_info">
            <!-- DYNAMIC GENERATION IN JAVASCRIPT -->
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
                <p id="figure_name"></p>
                <div id="figure_specs">
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>

        <div id="reviews">
            <p>Последние отзывы</p>

            <!-- DYNAMIC GENERATION IN JAVASCRIPT -->
            
        </div>
        
        <a id="all_reviews" href="/all-reviews.php">Все отзывы</a>
        <a id="write_review" href="/write-review.php">Напиать отзыв</a>
    </div>
</body>
</html>