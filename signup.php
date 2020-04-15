<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./view/css/header.css">
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/signup.css">

    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">

    <title>Регистрация</title>
</head>
<body>
    <?php require_once './view/header.php'?>

    <form action="" method="GET">
        <p>Регистрация</p>

        <input type="text" placeholder="Логин" id="login" required>
        <input type="password" placeholder="Пароль" id="password" required>
        <input type="password" placeholder="Повторите пароль" id="password_repeat" required>
        <input type="email" placeholder="Email" id="email" required>

        <button>Регистрация</button>
    </form>
</body>
</html>