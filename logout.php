<?php
    SESSION_START();

    unset($_SESSION['id_user']);

    header("Location: /index.php");
?>