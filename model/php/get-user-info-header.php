<?php
    SESSION_START();

    require_once './Classes/Database.php';

    $idUser = $_SESSION['id_user'];

    $userInfo = $db->query("SELECT `avatar`, `login` FROM `user` WHERE `id_user` = $idUser");
    $userInfo['avatar'] = base64_encode($userInfo['avatar']);
    echo json_encode($userInfo, JSON_UNESCAPED_UNICODE);
?>