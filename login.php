<?php 

SESSION_START(); 

if (isset($_SESSION['id_user']))
{
    header('Location: /index.php');
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLES -->
    <link rel="stylesheet" href="./view/css/header.css">
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/messanger.css">
    
    <link rel="stylesheet" href="./view/css/login.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">

    <!-- SCRIPTS -->
    <script src="/view/js/classes/Messanger.js" defer></script>
    <script src="/view/js/login.js" defer></script>

    <title>Авторизация</title>
</head>
<body>
    <?php require_once './view/header.php'?>
    
    <form action="" method="GET">
        <p>Авторизация</p>

        <input type="text" name="login" placeholder="Логин" id="login" required>
        <input type="password" name="password" placeholder="Пароль" id="password" required>

        <a href="">Забыли пароль?</a>

        <button>Войти</button>
    </form>
</body>
</html>