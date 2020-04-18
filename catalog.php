<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./view/css/header.css">
    <link rel="stylesheet" href="./view/css/main.css">

    <link rel="stylesheet" href="./view/css/catalog.css">

    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,100&display=swap" rel="stylesheet">

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
                <button class="arrows sort_top_buttons" id="sort_top_arrow"></button>
                <button class="arrows sort_top_buttons" id="sort_bottom_arrow"></button>
            </div>

            <div id="view_buttons">
                <button class="view_button sort_top_buttons" id="sandwitch"></button>
                <button class="view_button sort_top_buttons" id="grid"></button>
            </div>
        </div>

    </div>

    <div id="figures">
        <div class="figure">
            <img src="" class="figure_image">

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
            <img src="" class="figure_image">

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
            <img src="" class="figure_image">

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
            <img src="" class="figure_image">
            
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
            <img src="./view/img/max.png" class="figure_image">
            
            <a href="" class="figure_name">Имя фигурки</a>
            
            <div class="figure_rating">
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
            </div>
        </div>
        
        <div class="figure">
            <img src="./view/img/max.png" class="figure_image">
            
            <a href="" class="figure_name">Имя фигурки</a>
            
            <div class="figure_rating">
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
            </div>
        </div>
        
        <div class="figure">
            <img src="./view/img/max.png" class="figure_image">
            
            <a href="" class="figure_name">Имя фигурки</a>
            
            <div class="figure_rating">
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
            </div>
        </div>
        
        <div class="figure">
            <img src="./view/img/max.png" class="figure_image">
            
            <a href="" class="figure_name">Имя фигурки</a>
            
            <div class="figure_rating">
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
                <div class="rating_star grey_rating_star"></div>
            </div>
        </div>
        
        <div class="figure">
            <img src="./view/img/max.png" class="figure_image">
            
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

</body>
</html>