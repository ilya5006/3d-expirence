<?php
    SESSION_START();

    require_once './Classes/Database.php';

    $idUser = isset($_GET['id_user']) ? (int)$_GET['id_user'] : $_SESSION['id_user'];

    $userInfo = $db->query("SELECT `id_user`, `id_role`, `login`, `address`, `avatar` FROM `user` WHERE `id_user` = $idUser");
    
    $userInfo['avatar'] = base64_encode($userInfo['avatar']);

    $userRole = $db->query("SELECT `role`.`role_name` AS `role` FROM `user`, `role` WHERE `user`.`id_role` = `role`.`id_role` AND `user`.`id_user` = $idUser")['role'];

    $userInfo['role'] = $userRole;

    echo json_encode($userInfo, JSON_UNESCAPED_UNICODE);
?>