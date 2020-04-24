<?php SESSION_START(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./view/css/header.css">
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/pagination.css">
    <link rel="stylesheet" href="./view/css/rating.css">

    <link rel="stylesheet" href="./view/css/catalog.css">

    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,100&display=swap" rel="stylesheet">

    <script src="/view/js/b64toBlob.js" defer></script>
    <script src="/view/js/header.js" defer></script>

    <title>Каталог</title>
</head>
<body>
    <?php require_once './view/header.php'?>
    
    <div id="sort_left_wrapper">
        <input type="text" id="search" placeholder="Поиск">
        
        <div id="sort_left">
            <p>Тип пластика:</p>
            <select class="sort_left_types" id="sort_plastic">
                <option>Hz1</option>
                <option>Hz2</option>
                <option>Hz3</option>
                <option>Hz4</option>
            </select>

            <p>Время печати:</p>
            <select class="sort_left_types" id="sort_printing_time">
                <option>Hz1</option>
                <option>Hz2</option>
                <option>Hz3</option>
                <option>Hz4</option>
            </select>
            
            <p>Время заполнения:</p>
            <select class="sort_left_types" id="sort_filling_out">
                <option>Hz1</option>
                <option>Hz2</option>
                <option>Hz3</option>
                <option>Hz4</option>
            </select>
        </div>

        <button id="sort_left_accept">Применить</button>
    </div>

    <div id="catalog_wrapper">
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

    </div>

    <div id="main_content_wrapper">
        <div id="figures">
            <div class="figure">
                <a href="/figure.php" class="figure_image_sepcs_wrapper">
                    <div class="figure_image"></div>
                
                    <div class="figure_specs">
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                    </div>
                </a>

                <a href="/figure.php" class="figure_name">Имя фигурки</a>

                <div class="figure_rating">
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                </div>
            </div>

            <div class="figure">
                <a class="figure_image_sepcs_wrapper" href="">
                    <div class="figure_image"></div>
                
                    <div class="figure_specs">
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                    </div>
                </a>

                <a href="" class="figure_name">Имя фигурки</a>

                <div class="figure_rating">
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                </div>
            </div>

            <div class="figure">
                <a class="figure_image_sepcs_wrapper" href="">
                    <div class="figure_image"></div>
                
                    <div class="figure_specs">
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                    </div>
                </a>

                <a href="" class="figure_name">Имя фигурки</a>

                <div class="figure_rating">
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                </div>
            </div>

            <div class="figure">
                <a class="figure_image_sepcs_wrapper" href="">
                    <div class="figure_image"></div>
                
                    <div class="figure_specs">
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                    </div>
                </a>

                <a href="" class="figure_name">Имя фигурки</a>

                <div class="figure_rating">
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                </div>
            </div>

            <div class="figure">
                <a class="figure_image_sepcs_wrapper" href="">
                    <div class="figure_image"></div>
                
                    <div class="figure_specs">
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                    </div>
                </a>

                <a href="" class="figure_name">Имя фигурки</a>

                <div class="figure_rating">
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                </div>
            </div>

            <div class="figure">
                <a class="figure_image_sepcs_wrapper" href="">
                    <div class="figure_image"></div>
                
                    <div class="figure_specs">
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                    </div>
                </a>

                <a href="" class="figure_name">Имя фигурки</a>

                <div class="figure_rating">
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                </div>
            </div>

            <div class="figure">
                <a class="figure_image_sepcs_wrapper" href="">
                    <div class="figure_image"></div>
                
                    <div class="figure_specs">
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                        <p>Характеристики</p>
                    </div>
                </a>

                <a href="" class="figure_name">Имя фигурки</a>

                <div class="figure_rating">
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                    <div class="rating_star gold_rating_star"></div>
                </div>
            </div>
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