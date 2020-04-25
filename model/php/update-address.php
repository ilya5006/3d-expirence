<?php
    SESSION_START();

    require_once './Classes/Database.php';

    $idUser = $_SESSION['id_user'];
    $address = $db->escapeString($_GET['address']);

    $db->queryExecute("UPDATE `user` SET `address` = '$address' WHERE `id_user` = $idUser");

    header("Location: /profile.php");
?>