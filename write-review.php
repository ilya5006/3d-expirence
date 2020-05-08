<?php 
    SESSION_START();
    
    if (empty($_SESSION['id_user']))
    {
        header("Location: /index.php");
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/header.css">
    <link rel="stylesheet" href="./view/css/rating.css">
    <link rel="stylesheet" href="./view/css/figure.css">
    <link rel="stylesheet" href="./view/css/messanger.css">
    
    <link rel="stylesheet" href="./view/css/write-review.css">

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">
    
    <script src="/view/js/b64toBlob.js" defer></script>
    <script src="/view/js/header.js" defer></script>
    <script src="/view/js/classes/Messanger.js" defer></script>
    <script src="/view/js/classes/Rating.js" defer></script>

    <script src="/view/js/figure.js" defer></script>
    <script src="/view/js/write-review.js" defer></script>
    
    <title>Добавление 3D-модели</title>
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

        <form action="/model/php/add-review.php?id_figure=<?=(int)$_GET['id_figure']?>" method="GET" id="review_fields">
            <h2>НАПИСАТЬ ОТЗЫВ</h2>
            <textarea name="text_review"></textarea>
            <input type="submit">
        </form>

    </div>
</body>
</html>