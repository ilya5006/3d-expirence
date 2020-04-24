<?php
    SESSION_START();

    require_once './Classes/Database.php';

    $idUser = $_SESSION['id_user'];

    echo $db->query("SELECT `avatar` FROM `user` WHERE `id_user` = $idUser")['avatar'];
?>