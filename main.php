<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Визитка <?php echo $name . ' ' . $surname; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?php echo "$name $surname"; ?></h1>
        <img src="img/111.png" alt="Аватар" width="200" height="200">
        <p><?php echo "$age лет из $city"; ?></p>
    </header>
    <section id="knowledge">
        <h2>Полученные знания</h2>
        <?php
        $integerVar = 42;
        $stringVar = "строка";
        $floatVar = 42.42;
        $boolVar = true;
        $sum = $integerVar + $floatVar;
        $concatenation = $stringVar . " и число " . $integerVar;
        echo "<p>Целое число: $integerVar</p>";
        echo "<p>Строка: $stringVar</p>";
        echo "<p>Число с плавающей точкой: $floatVar</p>";
        echo "<p>Булево значение: " . ($boolVar ? 'истина' : 'ложь') . "</p>";
        echo "<p>Сумма чисел: $sum</p>";
        echo "<p>Конкатенация строки и числа: $concatenation</p>";
        ?>
    </section>
    <section id="video">
        <h2>Видеоролик</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/POb02mjj2zE?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </section>
    <section id="about">
        <h2>Обо мне</h2>
        <p>Текст о себе...</p>
    </section>
    <section id="services">
        <h2>Услуги</h2>
        <p>Описание услуг...</p>
    </section>
    <section id="contact">
        <h2>Контакт</h2>
        <form action="contact.php" method="POST">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="email" name="email" placeholder="Ваш email">
            <textarea name="message" placeholder="Ваше сообщение"></textarea>
            <button type="submit">Отправить</button>
        </form>
    </section>
    <?php
    include 'footer.php';
    ?>
</body>
</html>
