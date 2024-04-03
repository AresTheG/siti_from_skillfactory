<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Визитка</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Привет, меня зовут <?php echo $name . ' ' . $surname; ?>. Мне <?php echo $age; ?> лет, и я из города <?php echo $city; ?>.</p>
    <p>Перейдите на <a href="main.php">главную страницу</a>.</p>
</body>
</html>
