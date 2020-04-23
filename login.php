<?php SESSION_START(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./view/css/header.css">
    <link rel="stylesheet" href="./view/css/main.css">
    
    <link rel="stylesheet" href="./view/css/login.css">

    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">

    <title>Авторизация</title>
</head>
<body>
    <?php require_once './view/header.php'?>
    
    <form action="" method="GET">
        <p>Авторизация</p>

        <input type="text" placeholder="Логин" id="login" required>
        <input type="password" placeholder="Пароль" id="password" required>

        <a href="">Забыли пароль?</a>

        <button>Войти</button>
    </form>
</body>
</html>