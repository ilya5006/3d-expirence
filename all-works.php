<?php SESSION_START(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/header.css">
    <link rel="stylesheet" href="./view/css/pagination.css">

    <link rel="stylesheet" href="./view/css/all-works.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">
    
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
                <p id="user_date_of_birth">Дата рождения: <span>13.05.1999</span></p>

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