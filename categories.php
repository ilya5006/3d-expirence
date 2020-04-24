<?php SESSION_START(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/header.css">
    <link rel="stylesheet" href="./view/css/categories.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Ruda:wght@400;500&display=swap" rel="stylesheet">

    <script src="/view/js/b64toBlob.js" defer></script>
    <script src="/view/js/header.js" defer></script>
    
    <script src="/view/js/categories.js" defer></script>
    <title>Категории</title>
</head>
<body>
    <?php require_once './view/header.php'?>
    
    <div id="categories">
        <!-- Dynamic update from JS -->
    </div>
</body>
</html>