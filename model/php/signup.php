<?php
    SESSION_START();

    require_once './Classes/Database.php';

    $login = $db->escapeString($_GET['login']);
    $password = $db->escapeString($_GET['password']);
    $email = $db->escapeString($_GET['email']);
    $avatar = addslashes(file_get_contents('../../view/img/avatar.jpg'));

    $isUserExists = $db->query("SELECT `id_user` FROM `user` WHERE `login` = '$login'")['id_login'];
    
    if ($isUserExists) die('2'); // Пользователь уже существует

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $result = $db->queryExecute("INSERT INTO `user` VALUES (NULL, '4', '$login', '$passwordHash', '$email', NULL, '$avatar')");

    $idUser = $db->query("SELECT `id_user` FROM `user` ORDER BY `id_user` DESC")['id_user'];

    if ($result)
    {
        $_SESSION['id_user'] = $idUser;
        echo '1'; // Успешная регистрация
    }
    else
    {
        echo '0'; // Регистрация не удалась
    }
?>