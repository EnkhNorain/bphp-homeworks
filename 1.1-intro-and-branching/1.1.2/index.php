<?php
//  Ваш программный код, в котором определяются значения 
//  переменных для последующего задания текста и стилей
$time = date("H");
$day =  date("N");
$time = 19;
$day = 5;
if ($day == 1){
    $day = 'понедельник';
} elseif ($day == 2) {
    $day = 'вторник';
} elseif ($day == 3) {
    $day = 'среда';
} elseif ($day == 4) {
    $day = 'четверг';
} elseif ($day == 5) {
    $day = 'пятница';
} elseif ($day == 6) {
    $day = 'суббота';
} elseif ($day == 7) {
    $day = 'воскресенье';
} else {
    $day = 'undefined';
}
if ($time >= 6 && $time < 11) {
    $greeting = 'Доброе утро! <hr> Сегодня ';
    $background = "https://www.nastol.com.ua/pic/201908/1366x768/nastol.com.ua-353360.jpg";
} elseif ($time >= 11 && $time < 18) {
    $greeting =  'Добрый день! <hr> Сегодня ';
    $background = "https://www.nastol.com.ua/pic/201907/1920x1200/nastol.com.ua-352757.jpg";
} elseif ($time >= 18 && $time < 23) {
    $greeting = 'Добрый вечер! <hr> Сегодня ';
    $background = "https://www.nastol.com.ua/pic/201907/1920x1080/nastol.com.ua-352754.jpg";
} else {
    $greeting = 'Доброй ночи! <hr> Сегодня ';
    $background = "https://www.nastol.com.ua/pic/201907/1920x1080/nastol.com.ua-350086.jpg";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
    <!-- подключение стилевого файла -->
    
</head>
<body style="background: url(<?= $background ?>) no-repeat; background-size: 100%; text-align: center">
    <h1 style="display: inline-block; margin: 350px auto 0; padding: 20px; background: #b9bcbb; opacity: 0.7;
    border-radius:
    50px"><?= $greeting . ' ' . $day?></h1>
</body>
</html>