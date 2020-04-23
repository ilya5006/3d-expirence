<?php
    SESSION_START();

    require_once './Classes/Database.php';

    $login = $db->escapeString($_GET['login']);
    $password = $db->escapeString($_GET['password']);

    $dbUserInfo = $db->query("SELECT `id_user`, `password` FROM `user` WHERE `login`=  '$login'");

    if (password_verify($password, $dbUserInfo['password']))
    {
        $_SESSION['id_user'] = $dbUserInfo['id_user'];
     
        echo '1'; 
    }
    else
    {
        echo '0';
    }
?>