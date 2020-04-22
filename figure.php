<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/header.css">

    <link rel="stylesheet" href="./view/css/figure.css">

    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,600;1,600&display=swap" rel="stylesheet">

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
            <p>Последние отзывы</p>
            
            <div class="review">
                <div class="review_user_info">
                    <a href="" class="user_avatar"></a>
                    <div class="user_name_date_rating">
                        <p><a href=""><span class="user_name">kEIz1337</span></a> | <span class="user_date">25.02.2019</span></p>
                        <div id="user_rating">
                            <div class="rating_star gold_rating_star"></div>
                            <div class="rating_star gold_rating_star"></div>
                            <div class="rating_star gold_rating_star"></div>
                            <div class="rating_star grey_rating_star"></div>
                            <div class="rating_star grey_rating_star"></div>
                        </div>
                    </div>
                </div>

                <p class="review_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea corrupti non suscipit perferendis dignissimos accusamus voluptas ipsum consequuntur illo ipsa.</p>
            </div>

            <div class="review">
                <div class="review_user_info">
                    <a href="" class="user_avatar"></a>
                    <div class="user_name_date_rating">
                        <p><a href=""><span class="user_name">kEIz1337</span></a> | <span class="user_date">25.02.2019</span></p>
                        <div id="user_rating">
                            <div class="rating_star gold_rating_star"></div>
                            <div class="rating_star gold_rating_star"></div>
                            <div class="rating_star gold_rating_star"></div>
                            <div class="rating_star grey_rating_star"></div>
                            <div class="rating_star grey_rating_star"></div>
                        </div>
                    </div>
                </div>

                <p class="review_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea corrupti non suscipit perferendis dignissimos accusamus voluptas ipsum consequuntur illo ipsa.</p>
            </div>

            <div class="review">
                <div class="review_user_info">
                    <a href="" class="user_avatar"></a>
                    <div class="user_name_date_rating">
                        <p><a href=""><span class="user_name">kEIz1337</span></a> | <span class="user_date">25.02.2019</span></p>
                        <div id="user_rating">
                            <div class="rating_star gold_rating_star"></div>
                            <div class="rating_star gold_rating_star"></div>
                            <div class="rating_star gold_rating_star"></div>
                            <div class="rating_star grey_rating_star"></div>
                            <div class="rating_star grey_rating_star"></div>
                        </div>
                    </div>
                </div>

                <p class="review_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea corrupti non suscipit perferendis dignissimos accusamus voluptas ipsum consequuntur illo ipsa.</p>
            </div>
        </div>
        
        <a id="all_reviews" href="/all-reviews.php">Все отзывы</a>
    </div>
</body>
</html>